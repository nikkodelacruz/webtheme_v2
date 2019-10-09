<?php get_header(); ?>
<?php // echo do_shortcode('[fl_builder_insert_layout slug="404-page"]'); ?>  
<?php if ( have_posts() ): ?>
	<?php while( have_posts() ): the_post(); ?>
		<?php the_content(); ?>
	<?php endwhile ?>
<?php endif; ?>
<?php get_footer(); ?>