		</main>
		<footer>
		    <div id="site-map" class="col-md-3">
		        <a href="/">Home</a>
		        <a href="/web-samples/">Web Development</a>
		        <a href="/technical-writing-services/">Technical Writing</a>
		        <a href="/samples/">Writing and Video Samples</a>
		        <a href="/contact/">Contact</a>
		    </div>
		    <div id="social-links" class="col-md-6">
       		    <p>
        				Wordpress theme developed by Eamonn Gormley &copy; <?php echo date('Y'); ?>
            	</p>
		    </div>
		    <div class="col-md-3">
                <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/eamonngormley/">
                    <i class="fa fa-linkedin"></i>
                  </a> <a href="http://www.linkedin.com/in/eamonngormley/">Visit me at LinkedIn</a>

			</div>


		</footer>
		
		<?php wp_footer(); ?>

        <script src="/wp-content/themes/H5Custom/lib/js/bjqs-1.3.min.js"></script>
        <script class="secret-source">
                jQuery(document).ready(function($) {

                  $('#banner-slide').bjqs({
                    animtype      : 'slide',
                    height        : 150,
                    width         : 150,
                    responsive    : true,
                    randomstart   : true
                  });

                });
        </script>

		<script type="text/javascript" src="/wp-content/themes/H5Custom/lib/js/jquery.fancybox.js"></script>
		<script type="text/javascript" src="/wp-content/themes/H5Custom/lib/js/jquery.fancybox.pack.js"></script>
		<script type="text/javascript" src="/wp-content/themes/H5Custom/lib/js/jquery.fancybox-buttons.js"></script>
		<script type="text/javascript" src="/wp-content/themes/H5Custom/lib/js/jquery.fancybox-media.js"></script>
		<script type="text/javascript" src="/wp-content/themes/H5Custom/lib/js/jquery.fancybox-thumbs.js"></script>
		<script type="text/javascript">
               // Remove padding, set opening and closing animations, close if clicked and disable overlay
               jQuery(".fancybox-effects-d").fancybox({
                        padding: 0,
                        margintop: 10,

                        openEffect : 'elastic',
                        openSpeed  : 150,

                        closeEffect : 'elastic',
                        closeSpeed  : 150,

                        closeClick : true,

                        helpers : {
                            overlay : null
                        }
               });
        </script>

        <script>
        // Google analytics
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', 'UA-11043507-1', 'auto');
          ga('send', 'pageview');

        </script>

	</body>
</html>