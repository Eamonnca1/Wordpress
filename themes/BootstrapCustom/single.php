<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="section">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p><?php _e('Posted on', 'h5'); ?> <?php the_time('F jS, Y'); ?> <?php _e('by', 'h5'); ?> <?php the_author(); ?></p>
				</header>
				<section>
					<?php if (has_post_thumbnail()) the_post_thumbnail(); ?>
					<?php the_content(); ?>

				</section>
				<footer>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
					<?php the_tags( '<p>Tags: ', ', ', '</p>'); ?>
					<?php get_template_part('lib/inc/post-details'); ?>
				</footer>
			</article>

			<?php comments_template(); ?>

			<nav class="page-nav">
				<p><?php previous_post_link(); ?> &bull; <?php next_post_link(); ?></p>
			</nav>
		</div>

	<?php endwhile; else: ?>

		<div class="section">
			<article>
				<p><?php _e('Sorry, no posts matched your criteria.', 'h5'); ?></p>
			</article>
		</div>

	<?php endif; ?>

<?php get_sidebar(); ?>

<?php get_footer(); ?>