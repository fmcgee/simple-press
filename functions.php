<?php

/* Table of contents
––––––––––––––––––––––––––––––––––––––––––––––––––
- Styles and scripts (  Jquery , Jquery Ui and font awesome is already primed for action )
- Sidebars 
- Menus 
-
- ( Your themes php ) 


*/


/*  Add styles and scripts here ( The proper way :)  ) */


remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'index_rel_link');
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);





function wpdocs_theme_name_scripts() {

    wp_enqueue_script( 'jquery' );
    wp_enqueue_style( 'styles', get_stylesheet_uri() );
    wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css' ); 
    wp_enqueue_style( 'skeleton', get_template_directory_uri() . '/css/grid.css' );
    wp_enqueue_style( 'awesome', get_template_directory_uri() . '/css/font-awesome.css' );  
    wp_enqueue_script( 'myjs', get_template_directory_uri() . '/js/simplepress.js' , array(), false , 1 ); 
   wp_enqueue_script('jquery-ui', 'http://code.jquery.com/ui/1.11.4/jquery-ui.js');

      
}
add_action( 'wp_enqueue_scripts', 'wpdocs_theme_name_scripts',100 );



/* register sidebar */

add_action( 'widgets_init', 'theme_slug_widgets_init' );
function theme_slug_widgets_init() {
    register_sidebar( array(
        'name' => __( 'Main Sidebar', 'theme-slug' ),
        'id' => 'sidebar-1',
        'description' => __( 'Widgets in this area will be shown on all posts and pages.', 'theme-slug' ),
        'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
};

/* register menus */


function register_my_menus() {
  register_nav_menus(
    array(
      'header-menu' => __( 'Header Menu' ),
      'extra-menu' => __( 'Extra Menu' )
    )
  );
}
add_action( 'init', 'register_my_menus' );


/*  Now add your own */







/*  Leave this PHP close tag where it is  */
?>  
