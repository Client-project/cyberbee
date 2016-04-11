<?php 
require_once('wp_bootstrap_navwalker.php');
add_theme_support('post-thumbnails');

 function register_my_menu() {
	
    register_nav_menu( 'primary-menu', __( 'Primary Menu' ) );
	register_nav_menu( 'secondary-menu', __( 'Secondary Menu' ) );
	
}

add_action( 'init', 'register_my_menu' ); 

if ( function_exists('register_sidebar') ) {
    
    register_sidebar( array(
        'name' =>  'Frontpage Header Content',
        'id' => 'frontpage-header-content',
        'description' => __( 'Section for inserting header content into the front page', 'theme-slug' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '<h2 class="header-sidebar-title">',
        'after_title'   => '</h2>',
    ) );

    register_sidebar( array(
        'name' =>  'Latest Posts',
        'id' => 'frontpage-latest-posts',
        'description' => __( 'display the latest blog posts here', 'theme-slug' ),
	'before_title'  => '<h3 class="latest-posts-title">',
	'after_title'   => '</h3>',
    ) );
    
    register_sidebar( array(
        'name' =>  'Frontpage Contact',
        'id' => 'frontpage-contact',
        'description' => __( 'Section for inserting contact information', 'theme-slug' ),
        'before_widget' => '<li id="contact-sidebar" class="front-page-sidebar">',
    'after_widget'  => '</li>',
    'before_title'  => '<h2 class="contact-sidebar-title">',
    'after_title'   => '</h2>',
    ) );

}


    
    //register_sidebar();
remove_filter('the_content', 'wpautop');




?>