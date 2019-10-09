<?php

// Add visibility option for field labels "Gravity Form"
add_filter( 'gform_enable_field_label_visibility_settings', '__return_true' );

// Pagination
// $query = new WP_Query( $args );
// echo page_pagination($query);

function webtheme_setup()
{
    // Add title tag
    add_theme_support( 'title-tag' );

    // Add post thumbnail support
    add_theme_support( 'post-thumbnails' );
    //  Add image sizes
    // add_image_size( 'webp-thumbnail-avatar', 100, 100, true );
    add_image_size( 'featured-image-app', 500, 200, false ); //(cropped)
    // add_image_size( 'member-img', 200, 200, false ); //(scaled)

    // Add theme support for Custom Logo.
    add_theme_support( 'custom-logo', array(
        'width'       => 250,
        'height'      => 250,
        'flex-width'  => true,
    ) );

    // Register Navigation Menus
    register_nav_menus( array(
        'top'    => __( 'Top Menu', 'webtheme' ),
        'main'    => __( 'Main Menu', 'webtheme' ),
        'social' => __( 'Social Links Menu', 'webtheme' ),
    ) );
    
}
add_action( 'after_setup_theme', 'webtheme_setup' );


function webtheme_pagination( $total_query_num_pages = '' ) {
    // before args
    // $paged = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
    // inside wp_query
    // 'paged' => $paged

    global $wp_query;
    $total = $total_query_num_pages ? $total_query_num_pages : $wp_query->max_num_pages;
    // $total = $total_query_num_pages->max_num_pages;
    $big = 999999999; // need an unlikely integer
    $args = array(
        'base'               => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
        'format'             => '?paged=%#%',
        'total'              => $total,
        'current'            => max( 1, get_query_var('paged') ),
        'show_all'           => false,
        'end_size'           => 1,
        'mid_size'           => 2,
        'prev_next'          => true,
        'prev_text'          => __('< Prev'),
        'next_text'          => __('Next >'),
        'type'               => 'plain',
        'add_args'           => false,
        'add_fragment'       => '',
        'before_page_number' => '',
        'after_page_number'  => ''
    );
    return paginate_links( $args );
}

 
function thumbnail_upscale( $default, $orig_w, $orig_h, $new_w, $new_h, $crop ){

    if ( !$crop ) return null; // let the wordpress default function handle this

    $aspect_ratio = $orig_w / $orig_h;
    $size_ratio = max($new_w / $orig_w, $new_h / $orig_h);

    $crop_w = round($new_w / $size_ratio);
    $crop_h = round($new_h / $size_ratio);

    $s_x = floor( ($orig_w - $crop_w) / 2 );
    $s_y = floor( ($orig_h - $crop_h) / 2 );

    return array( 0, 0, (int) $s_x, (int) $s_y, (int) $new_w, (int) $new_h, (int) $crop_w, (int) $crop_h );
}
add_filter( 'image_resize_dimensions', 'thumbnail_upscale', 10, 6 );


/**
 * Custom backend login
 */

// logo
function site_login_logo() { 

    // Get the logo
    $logo = theme_logo();

    $bg_image = get_template_directory_uri().'/assets/img/login-bg.png';
    ?>
    <style type="text/css">
        body.login{
            /* background: #fffafa; */
            background-image: url(<?php echo $bg_image; ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: center bottom;
        }
        #login{
             /*padding-top: 10px !important; */
        }

        #login h1 a, .login h1 a {
            background-image: url(<?php echo $logo; ?>);
            width: 100%;
            background-size: contain;
            background-repeat: no-repeat;
            margin-bottom: 0;
            /* padding-bottom: 30px; */
        }
        .login h1 a:active,
        .login h1 a:focus{
            /* border:none; */
            box-shadow: none;
            /* text-decoration: none; */
        }

        #loginform{
            background: rgb(4, 73, 132, 0.7);
            color: #fff;
            border-radius: 10px;
            margin-top: 0;
        }

        #loginform .input:active,
        #loginform .input:focus{
            /* border:2px solid #fabfb9; */
            box-shadow: none;
            /* text-decoration: none; */
        }

        .submit #wp-submit{
            background: #da251c;
            text-shadow: none;
            box-shadow: none;
            border: 1px solid #da251c;
            transition: 0.5s;
        }
        .submit #wp-submit:hover{
            /*background: #69e2cf;*/

        }

        /*Footer links*/
        #nav a,
        #backtoblog a{
            color: #fff !important;
        }

    </style>
<?php }
add_action( 'login_enqueue_scripts', 'site_login_logo' );

// link
function site_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'site_login_logo_url' );

// title
function site_login_logo_url_title() {
    return  get_bloginfo('name');
}
add_filter( 'login_headertitle', 'site_login_logo_url_title' );


// Site logo
function theme_logo(){
    $custom_logo_id = get_theme_mod( 'custom_logo' );
    $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
    return $logo[0];
}

/* Append search to menu */
function add_search_menu($items, $args) {
    if ($args->theme_location == 'top') {
        // $search_form = "<div class='search-container'>";
        // $search_form .= get_search_form(false); //Whether to echo or return the form
        // $search_form .= "</div>";
        $search_form = '<a href="#" class="btn-search"><i class="fas fa-search"></i>'.get_search_form(false).'</a>';
        $items .= '<li class="menu-item-search">'.$search_form.'</li>';
    }
    return $items;
}
// add_filter( 'wp_nav_menu_items', 'add_search_menu', 10, 2 );



// Filter posts
add_action( 'pre_get_posts', 'ssc_pre_get_posts' );
function ssc_pre_get_posts($query) {

    if( is_admin() ) //exclude backend
        return;

    // set posts per page
    if( $query->is_main_query() && $query->is_post_type_archive('post') ):
        $query->set('posts_per_page', 6);
    endif;
    
    return $query;
}