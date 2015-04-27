<?php

//response generation function
  $response = "";
  $responseType="";

  //function to generate response
  function my_contact_form_generate_response($type, $message){

    global $response;
    global $responseType;
    $responseType=$type;

    if($type == "success") $response = "<section class='success'><p>{$message}</p></section>";
    else $response = "<section class='error'><p>{$message}</p></section>";

  }

  //response messages
  $not_human       = "Human verification incorrect.";
  $missing_content = "Please supply all information.";
  $email_invalid   = "Email Address Invalid.";
  $message_unsent  = "Message was not sent. Try Again.";
  $message_sent    = "Thanks! Your message has been sent.";

  //user posted variables
  $name = $_POST['message_name'];
  $email = $_POST['message_email'];
  $message = $_POST['message_text'];
  $human = $_POST['message_human'];
  $humanSecondNumber=$_POST['secondNumber'];
  $humanTotalNumber=$_POST['totalNumber'];

  //calculate human verification number that should have been posted
  $humanFirstNumber=$humanTotalNumber-$humanSecondNumber;

  //php mailer variables
  $to = get_option('admin_email');
  $subject = "Someone sent a message from ".get_bloginfo('name');
  $headers = 'From: '. $email . "rn" .
    'Reply-To: ' . $email . "rn";

  //Random numbers for human verification
  $firstNumber=rand(1,5);
  $secondNumber=rand(1,5);
  $totalNumber=$firstNumber+$secondNumber;

  if(!$human == 0){
    if($human != $humanFirstNumber) my_contact_form_generate_response("error", $not_human); //not human!
    else {

      //validate email
      if(!filter_var($email, FILTER_VALIDATE_EMAIL))
        my_contact_form_generate_response("error", $email_invalid);
      else //email is valid
      {
        //validate presence of name and message
        if(empty($name) || empty($message)){
          my_contact_form_generate_response("error", $missing_content);
        }
        else //ready to go!
        {
          $sent = wp_mail($to, $subject, strip_tags($message), $headers);
          if($sent) my_contact_form_generate_response("success", $message_sent); //message sent!
          else my_contact_form_generate_response("error", $message_unsent); //message wasn't sent
        }
      }
    }
  }
  else if ($_POST['submitted']) my_contact_form_generate_response("error", $missing_content);
?>

<?php get_header(); ?>

  <div id="primary" class="site-content">
    <div id="content" role="main">

      <?php while ( have_posts() ) : the_post(); ?>
<?php // echo "Type is " . $responseType;
// echo esc_attr($_POST['message_name']);
 ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <h1>
            <h1 class="entry-title"><?php the_title(); ?></h1>
          </h1>

          <div class="entry-content">
            <?php the_content(); ?>

            <style type="text/css">
              .error p, .success p {
                padding: 5px 9px;
                border: 1px solid;
                border-radius: 3px;
              }
              .error p{
                border-color:red;
                color: red;
              }
              .success p{
                border-color: green;
                color: green;
              }
              form{
                width:300px;
              }
              form span{
                color: red;
              }
              form input[type="text"], form textarea, form input[type="email"] {
                min-height:20px;
                border:1px solid #ccc;
                width:300px;
                padding:3px;
              }
              form textarea {
                height:100px;
              }
              form input:focus, textarea:focus {
                background-color:#e0e0e0;
              }

              /* Angular styles */
              .message_name.ng-valid,
                .message_email.ng-valid,
                .message_text.ng-valid,
                .message_human.ng-valid {
                    border-color:green;
              }
              .message_name.ng-dirty.ng-invalid-required,
                .message_email.ng-dirty.ng-invalid-required,
                .message_text.ng-dirty.ng-invalid-required,
                .message_human.ng-dirty.ng-invalid-required {
                    border-color:red;
              }
            </style>

            <div id="respond">
              <form action="<?php the_permalink(); ?>" method="post" ng-app=""  ng-controller="validateCtrl" name="contactForm" novalidate>
                    <?php echo $response; ?>
                    <p><span>*</span> Required fields.
                    <p><label for="name">Name: <span>*</span> <br><input type="text"
                                                                         class="message_name"
                                                                         name="message_name"
                                                                         value="<?php if($responseType == 'error') { echo esc_attr($_POST['message_name']); } ?>"
                                                                         ng-model="message_name"
                                                                         required>
                                                                       </label>
                                                                       <span style="color:red" ng-show="contactForm.message_name.$dirty && contactForm.message_name.$invalid">
                                                                                 <span ng-show="contactForm.message_name.$error.required">Name is required.</span>
                                                                                 </span></p>
                    <p><label for="message_email">Email: <span>*</span> <br><input type="email"
                                                                                    class="message_email"
                                                                                    name="message_email"
                                                                                    value="<?php if($responseType  == 'error') echo esc_attr($_POST['message_email']); ?>"
                                                                                    ng-model="message_email"
                                                                                    required
                                                                                    ></label>
                                                                                    <span style="color:red" ng-show="contactForm.message_email.$dirty && contactForm.message_email.$invalid">
                                                                                      <span ng-show="contactForm.message_email.$error.required">Email is required.</span>
                                                                                      <span ng-show="contactForm.message_email.$error.email">Invalid email address.</span>
                                                                                      </span>
                                                                                    </p>
                    <p><label for="message_text">Message: <span>*</span> <br><textarea type="text"
                                                                                        class="message_text"
                                                                                        name="message_text"
                                                                                        ng-model="message_text"
                                                                                        required
                                                                                        ><?php if($responseType  == 'error') echo esc_textarea($_POST['message_text']); ?></textarea></label>
                                                                                        <span style="color:red" ng-show="contactForm.message_text.$dirty && contactForm.message_text.$invalid">
                                                                                          <span ng-show="contactForm.message_text.$error.required">Message is required.</span>
                                                                                          </span>
                                                                                        </p>
                    <p><label for="message_human">Human Verification: <span>*</span> <br><input type="text"
                                                                                                        style="width: 60px;"
                                                                                                        class="message_human"
                                                                                                        name="message_human"
                                                                                                        ng-model="message_human"
                                                                                                        required> + <?php echo $secondNumber ?> = <?php echo $totalNumber ?></label>
                                                                                                        <span style="color:red" ng-show="contactForm.message_human.$dirty && contactForm.message_human.$invalid">
                                                                                                          <span ng-show="contactForm.message_human.$error.required">Please verify that you are a human.</span>
                                                                                                          </span></p>
                    <input type="hidden" name="secondNumber" value="<?php echo $secondNumber ?>">
                    <input type="hidden" name="totalNumber" value="<?php echo $totalNumber ?>">
                    <input type="hidden" name="submitted" value="1">
                    <p align="right"><button type="submit">Send</button></p>
                </form>
              </div>

            </div><!-- .entry-content -->

          </article><!-- #post -->

      <?php endwhile; // end of the loop. ?>

      <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.js"></script>
      <script>
        function validateCtrl($scope) {
        //    $scope.user = 'John Doe';
        //    $scope.email = 'john.doe@gmail.com';
        }
      </script>
    </div><!-- #content -->
  </div><!-- #primary -->



<?php get_footer(); ?>
