<?php
/**
 * AJAX
 */

// function load_more_posts(){
// 	if ( check_ajax_referer( 'load-archive', 'security' ) ) {
// 		$paged = $_POST['page']+1;
// 		$query = new WP_Query(
// 			array(
// 				'post_type' => 'news-and-events',
// 				'posts_per_page' => 3,
// 				// 'post_status' => 'publish',
// 				'orderby' => 'date',
// 				'order' => 'DESC',
// 				'paged' => $paged
// 			)
// 		);
// 		if( $query->have_posts() ):
// 			while( $query->have_posts() ): $query->the_post();
// 				$id = get_the_ID();
// 				$overlay = get_field('background_overlay', $id); // color overlay field
// 				$overlay = explode( ',', $overlay );
// 				set_query_var( 'overlay_bg', $overlay[0] ); // pass parameter to template
// 				set_query_var( 'overlay_op', $overlay[1] ); // pass parameter to template
// 				get_template_part( 'templates/contents/content-news', get_post_format() ); // get the template to include here
// 			endwhile;
// 		endif;

// 		wp_die();
// 	}

// }
// add_action( 'wp_ajax_load_more_posts', 'load_more_posts' );
// add_action( 'wp_ajax_nopriv_load_more_posts', 'load_more_posts' );


function custom_ajax_function(){

	if ( check_ajax_referer( 'webtheme', 'security' ) ) {
	}


}
add_action( 'wp_ajax_custom_ajax_function', 'custom_ajax_function' );
add_action( 'wp_ajax_nopriv_custom_ajax_function', 'custom_ajax_function' );
