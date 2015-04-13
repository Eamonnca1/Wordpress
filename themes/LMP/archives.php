<?php 
	/*
		Template Name: Archives
	*/ 
?>
<?php get_header(); ?>

	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div class="section">
			<article id="post-<?php the_ID(); ?>">
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p><?php _e('Posted on', 'h5'); ?> <?php the_time('F jS, Y'); ?> <?php _e('by', 'h5'); ?> <?php the_author(); ?></p>
				</header>
				<section>
					<h2><?php _e('Archives by Month', 'h5'); ?></h2>
					<ul>
						<?php wp_get_archives('type=monthly'); ?>
					</ul>
					<h2><?php _e('Archives by Subject', 'h5'); ?></h2>
					<ul>
						<?php wp_list_categories(); ?>
					</ul>
					<h2><?php _e('Archives by Tag', 'h5'); ?></h2>
					<?php wp_tag_cloud('format=list&smallest=12px&largest=12px'); ?>

				</section>
				<footer>
					<?php wp_link_pages(array('before' => '<p><strong>Pages:</strong> ', 'after' => '</p>', 'next_or_number' => 'number')); ?>
				</footer>
			</article>
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