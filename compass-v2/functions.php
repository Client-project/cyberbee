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
        'name' =>  'Home sidebar 1',
        'id' => 'home-sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}
    
    //register_sidebar();
remove_filter('the_content', 'wpautop');




?>