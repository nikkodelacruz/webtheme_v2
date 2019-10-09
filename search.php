<?php get_header(); ?>
<?php echo do_shortcode('[fl_builder_insert_layout slug="search-banner"]'); ?>

<div class="container load-posts-container">
	<?php get_search_form(); ?>

	<!-- <div class="page-description"><?php echo get_search_query(); ?></div> -->
    <?php if( have_posts() ): ?>
    	<div class="row load-posts-row">
	        <?php while( have_posts() ): the_post();  ?>
	        	<div class="col-sm-12 col-md-6 col-lg-4 mb-5 post-default load-post-item reveal-item">
	        		<?php 
	        		if ( get_the_post_thumbnail_url() ){
	        			$image = get_the_post_thumbnail_url();
	        		}else{
	        			$image = theme_logo();
	        		}
	        		?>
	        		<img src="<?php echo $image ?>" alt="<?php echo get_the_title(); ?>" class="load-post-item-container-image" />
	        		<div class="load-post-item-container-title c-blue">
	        			<?php the_title(); ?>
	        		</div>
	        		<div class="load-post-item-container-description">
	        			<?php 

	        			if ( get_the_excerpt() ) {
	        				the_excerpt();
	        			}else{
		        			echo get_field('product_excerpt', get_the_ID());
	        			}
	        			?>
	        		</div>
	        		<a href="<?php echo get_the_permalink(); ?>" class="button btn-default d-inline-block">Read more</a>
	        	</div>
	        <?php endwhile;  ?>
    	</div>
        <div class="clearfix"></div>
        <div class="row justify-content-center mt-5 mb-5">
	        <?php
	        the_posts_pagination( array(
			'prev_text' =>'<',
			'next_text' => '>',
			'screen_reader_text' => ' ',
			 'before_page_number' => '',
			) ); ?>
        </div>
    <?php endif; ?>
</div>

<?php get_footer(); ?>