<?php if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME'])) die(); ?>

<?php if (post_password_required()) : ?>
	<p class="post-password"><?php _e('This post is password protected. Enter the password to view comments.', 'h5'); ?></p>
<?php return; endif; ?>

<div id="comments">

	<div class="comments">
	
		<?php if (have_comments()) : ?>

			<h3><?php comments_number('No Responses', 'One Response', '% Responses'); ?> <?php _e('to', 'h5'); ?> &ldquo;<?php the_title(); ?>&rdquo;</h3>
			
			<ol class="comments-list">
				<?php wp_list_comments(array('type' => 'comment', 'avatar_size' => 96)); ?>
			</ol>
	
			<?php if ((int) get_option('page_comments') === 1) : // display only when paged comments are enabled ?>
			
			<div class="nav nav-comments">
				<div class="prev"><?php previous_comments_link(); ?></div>
				<div class="next"><?php next_comments_link(); ?></div>
			</div>
			
			<?php endif; ?>
		
		<?php else : // no comments yet.. ?>
	
			<?php if (comments_open()) : // no comments, but comments open ?>
			<!--p>Be the first to respond..</p-->
			
			<?php else : // no comments, and comments closed ?>
			<!--p>Comments are closed.</p-->
		
			<?php endif; ?>
	
		<?php endif; ?>

	</div>

	<?php if (comments_open()) : ?>

		<?php comment_form(); ?>

	<?php else : ?>

		<div id="respond" class="comments-respond">
			<p><?php _e('Comments are closed.', 'h5'); ?></p>
		</div>

	<?php endif; ?>

</div>