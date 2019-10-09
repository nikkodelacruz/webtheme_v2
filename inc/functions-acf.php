<?php 

// ===============================
// Add acf options and sub page
// ===============================


// Options page
acf_add_options_page(
    array(
        'page_title' => 'Theme Settings',
        'menu_title' => 'Theme Settings',
        'menu_slug' => 'theme-settings',
        'capability' => 'manage_options',
        'redirect'      => false
        // 'position' => 2,
    )
);

// acf_add_options_page(
//     array(
//         'page_title' => 'Recommedation Settings',
//         'menu_title' => 'Recommedation Settings',
//         'menu_slug' => 'Recommedation-settings',
//         'capability' => 'manage_options',
//         // 'position' => 2,
//     )
// );

/*Subpage menu to option page*/
acf_add_options_sub_page(
    array(
        'page_title'    => 'About Us',
        'menu_title'    => 'About Us',
        'parent_slug'   => 'theme-settings',
    )
);

acf_add_options_sub_page(
    array(
        'page_title'    => '@SSC',
        'menu_title'    => '@SSC',
        'parent_slug'   => 'theme-settings',
    )
);

acf_add_options_sub_page(
    array(
        'page_title'    => 'Contact Us',
        'menu_title'    => 'Contact Us',
        'parent_slug'   => 'theme-settings',
    )
);

acf_add_options_sub_page(
    array(
        'page_title'    => 'Book a Visit',
        'menu_title'    => 'Book a Visit',
        'parent_slug'   => 'theme-settings',
    )
);


/*Add sub menu option under post type*/
// acf_add_options_sub_page( array(
//     'page_title'    => 'Submenu Settings',
//     'menu_title'    => 'Submenu Settings',
//     'menu_slug'     => 'menu-settings',
//     'capability'    => 'manage_options',
//     'parent_slug'   => 'edit.php?post_type=post-slug',
// ));


// Call repeater value based on index
/* Background image */
// function bg_image($index){
// 	return get_field('background_image','option')[$index]['bg_image'];
// }

// /* Section shortcodes */
// function section_shortcode($index){
// 	return do_shortcode(get_field('section_shortcode','option')[$index]['sec_shortcode']);
// }

// /* Page shortcodes */
// function page_shortcode($index){
//     return do_shortcode(get_field('page_shortcode','option')[$index]['shortcode_page']);
// }