<?php
	/*
		Template Name: Home Page
	*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<section>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>



				<section>
					<?php the_content(); ?>
				</section>

			</article>
		</section>

	<?php endwhile; else: ?>

		<div class="section">
			<article>
				<p><?php _e('Sorry, no posts matched your criteria.', 'h5'); ?></p>
			</article>
		</div>

	<?php endif; ?>



<?php get_footer(); ?>