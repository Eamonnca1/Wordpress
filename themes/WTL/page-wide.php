<?php
	/*
		Template Name: Wide Page
	*/
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="wideSection">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<section>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
				</section>
				<section>
					<?php the_content(); ?>
				</section>

			</article>
		</div>

	<?php endwhile; else: ?>

		<div class="section">
			<article>
				<p><?php _e('Sorry, no posts matched your criteria.', 'h5'); ?></p>
			</article>
		</div>

	<?php endif; ?>



<?php get_footer(); ?>