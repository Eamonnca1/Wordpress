<?php get_header(); ?>

		<div class="section">

		<?php if (have_posts()) : ?>

			<?php $post = $posts[0]; // hack: set $post so that the_date() works ?>
			<?php if (is_category()) : ?>
			<h1><?php _e('Archive for the', 'h5'); ?> <?php single_cat_title(); ?> <?php _e('Category', 'h5'); ?></h1>

			<?php elseif(is_tag()) : ?>
			<h1><?php _e('Posts tagged as', 'h5'); ?> <?php single_tag_title(); ?></h1>

			<?php elseif (is_day()) : ?>
			<h1><?php _e('Archive for', 'h5'); ?> <?php the_time('F jS, Y'); ?></h1>

			<?php elseif (is_month()) : ?>
			<h1><?php _e('Archive for', 'h5'); ?> <?php the_time('F, Y'); ?></h1>

			<?php elseif (is_year()) : ?>
			<h1><?php _e('Archive for', 'h5'); ?> <?php the_time('Y'); ?></h1>

			<?php elseif (is_author()) : ?>
			<h1><?php _e('Author Archive', 'h5'); ?></h1>

			<?php elseif (isset($_GET['paged']) && !empty($_GET['paged'])) : ?>
			<h1><?php _e('Blog Archives', 'h5'); ?></h1>

		<?php endif; ?>
		
		<?php while (have_posts()) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header>
					<h1><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a></h1>
					<p><?php _e('Posted on', 'h5'); ?> <?php the_time('F jS, Y'); ?> <?php _e('by', 'h5'); ?> <?php the_author(); ?></p>
				</header>
				<section>
					<?php the_excerpt(); ?>
				</section>
				<footer>
					<p>
						<?php the_tags('Tags: ', ', ', '<br>'); ?> 
						<?php _e('Posted in', 'h5'); ?> <?php the_category(', '); ?> <?php _e('&bull;', 'h5'); ?>
						<?php edit_post_link('Edit', '', ' &bull; '); ?> 
						<?php comments_popup_link('Respond to this post &raquo;', '1 Response &raquo;', '% Responses &raquo;'); ?>
					</p>
				</footer>
			</article>

			<?php endwhile; ?>

			<nav class="page-nav">
				<p><?php posts_nav_link('&nbsp;&bull;&nbsp;'); ?></p>
			</nav>

			<?php else : ?>

			<article>
				<h1><?php _e('Not Found', 'h5'); ?></h1>
				<p><?php _e('Sorry, but the requested resource was not found on this site.', 'h5'); ?></p>
				<?php get_search_form(); ?>
			</article>

			<?php endif; ?>

		</div>

<?php get_sidebar(); ?>

<?php get_footer(); ?>
