<?php

/**
 * Frontend enqueue
 */
function webtheme_frontend_enqueue()
{  
    // Enqueue Styles
    // wp_enqueue_style( handle, src, deps, media );

    // Enqueue Scripts
    // wp_enqueue_script( handle, src, deps, in_footer );

    // BOOTSTRAP
    wp_enqueue_script( 'popper', 'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js', array('jquery'), null, true );
    // wp_enqueue_style( 'bootstrap-css', get_template_directory_uri() .'/vendors/bootstrap/css/bootstrap.min.css' );
    // wp_enqueue_script( 'bootstrap-js', get_template_directory_uri() .'/vendors/bootstrap/js/bootstrap.min.js', array('jquery'), null, true );
    // CDN
    wp_enqueue_style( 'bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/css/bootstrap.min.css' );
    wp_enqueue_script( 'bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.3.1/js/bootstrap.min.js', array('jquery'), null, true );

    // Libraries
    // MMENU
    // wp_enqueue_script( 'mm-js', get_template_directory_uri() .'/vendors/mmenu/dist/mmenu.js', array( 'jquery' ), '', true );
    // wp_enqueue_style( 'mm-css', get_template_directory_uri() .'/vendors/mmenu/dist/mmenu.css','',null );
    // wp_enqueue_style( 'mm2-css', get_template_directory_uri() .'/vendors/mburger-css/dist/mburger.css','',null );
    // CDN
    wp_enqueue_script( 'mm-js', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/8.2.3/mmenu.js', array( 'jquery' ), '', true );
    wp_enqueue_style( 'mm-css', 'https://cdnjs.cloudflare.com/ajax/libs/jQuery.mmenu/8.2.3/mmenu.css','',null );
    wp_enqueue_style( 'mburger-css', get_template_directory_uri() .'/vendors/mburger-css/dist/mburger.css','',null );
   
    // OWL CAROUSEL
    // wp_enqueue_style( 'oc-css', get_template_directory_uri() .'/vendors/owlcarousel/dist/assets/owl.carousel.min.css','',null );
    // wp_enqueue_style( 'oc-theme-css', get_template_directory_uri() .'/vendors/owlcarousel/dist/assets/owl.theme.default.min.css','',null );
    // wp_enqueue_script( 'oc-js', get_template_directory_uri() .'/vendors/owlcarousel/dist/owl.carousel.min.js', array( 'jquery' ), '', true );
    // CDN
    wp_enqueue_style( 'oc-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css','',null );
    wp_enqueue_style( 'oc-theme-css', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css','',null );
    wp_enqueue_script( 'oc-js', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array( 'jquery' ), '', true );

    // FONT AWESOME
    wp_enqueue_style( 'fa-css', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.min.css' );

    // FANCYBOX
    // wp_enqueue_style( 'fb-css', get_template_directory_uri() .'/vendors/fancybox/dist/jquery.fancybox.min.css','',null );
    // wp_enqueue_script( 'fb-js', get_template_directory_uri() .'/vendors/fancybox/dist/jquery.fancybox.min.js', array( 'jquery' ), '', true );
    // CDN
    wp_enqueue_style( 'fb-css', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css','',null );
    wp_enqueue_script( 'fb-js', 'https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js', array( 'jquery' ), '', true );

    // MOMENT JS
    // wp_enqueue_script( 'moment-js', 'https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js', array( 'jquery' ), '', true  );

    // FULLCALENDAR - CSS
    // wp_enqueue_style( 'fc-core-css', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.css' );
    // wp_enqueue_style( 'fc-daygrid-css', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.css' );
    // wp_enqueue_style( 'fc-timegrid-css', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.css' );
    // wp_enqueue_style( 'fc-list-css', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.css' );

    // FULLCALENDAR - JS
    // wp_enqueue_script( 'fc-core-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/core/main.min.js', array( 'jquery' ), '', true  );
    // wp_enqueue_script( 'fc-daygrid-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/daygrid/main.min.js', array( 'jquery' ), '', true  );
    // wp_enqueue_script( 'fc-interaction-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/interaction/main.min.js', array( 'jquery' ), '', true  );
    // wp_enqueue_script( 'fc-timegrid-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/timegrid/main.min.js', array( 'jquery' ), '', true  );
    // wp_enqueue_script( 'fc-list-js', 'https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/4.2.0/list/main.min.js', array( 'jquery' ), '', true  );

     /**
     * Browser Compatibility
     */
    $u_agent = $_SERVER['HTTP_USER_AGENT'];
    $browser = '';
    if( preg_match( '/trident/i', $u_agent ) ) //IE
    {
        $browser = 'IE';
    } 
    elseif( preg_match( '/firefox/i', $u_agent ) ) // Mozilla Firefox
    {
        $browser = 'mozilla';
        wp_enqueue_style( 'style-css', get_template_directory_uri() .'/assets/css/browser/mozilla.css' );
    } 
    elseif( preg_match( '/mac/i', $u_agent ) ) // Safari
    {
        $browser = 'safari';
    } 
    elseif( preg_match( '/chrome/i', $u_agent ) ) // Google Chrome
    {
        $browser = 'chrome';
    } 
    elseif( preg_match( '/Opera/i',$u_agent ) || preg_match( '/OPR/i',$u_agent ) ) // Opera
    {
        $browser = 'opera';
    }
    else // Undefine
    {
        $browser = 'na';
    }

    // Custom scripts
    wp_enqueue_script( 'script-js', get_template_directory_uri() .'/assets/js/script.js', array('jquery'), null, true );    
    $script_data = array(
        'browser' => $browser
    ); //pass the value to the script
    wp_localize_script( 'script-js', 'script_object', $script_data );

    // Custom styles
    wp_enqueue_style( 'style-css', get_template_directory_uri() .'/assets/css/main.css' );

    // AJAX
    $data = array(
        'ajax_url' => admin_url( 'admin-ajax.php' ),
        'ajax_nonce' => wp_create_nonce('webtheme')
    );
    wp_enqueue_script( 'ajax-js', get_template_directory_uri() .'/assets/js/ajax.js', array('jquery'), null, true );
    wp_localize_script( 'ajax-js', 'ajax_object', $data );

}
// add_action( 'wp_enqueue_scripts', 'webtheme_frontend_enqueue' );

/**
 * Backend enqueue
 */
function webtheme_backend_enqueue()
{
    
    // JS
    wp_enqueue_script( 'backend-js', get_template_directory_uri().'/assets/backend/ajax.js' );
    wp_localize_script( 'backend-js', 'ajax_object', array( 'ajax_url' => admin_url( 'admin-ajax.php' ) ) ); //ajax_object.ajax_url

    wp_enqueue_style( 'backend-css', get_template_directory_uri().'/assets/backend/style.css' );

}
// add_action( 'admin_enqueue_scripts', 'webtheme_backend_enqueue' );