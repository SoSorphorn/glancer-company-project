<?php
  /*
  ==========================
   Include Script and Style
  ==========================
  */
  function glancer_script_enqueue() {
    wp_enqueue_style('glancer_bootstrap_style', get_template_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('awesome_font', get_template_directory_uri() . '/vendor/font-awesome/css/font-awesome.min.css', array(), '1.0.0', 'all');
    wp_enqueue_style('awesome_creative_style', get_template_directory_uri() . '/css/creative.css', array(), '1.0.0', 'all');
    wp_enqueue_script('jquery', get_template_directory_uri() . '/vendor/jquery/jquery.min.js', array(), '1.0.0', true); // true it means print the script in the footer of the page.It defaults false.
    wp_enqueue_script('bootstrap', get_template_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', array(), '1.0.0', true);
  }
  add_action( 'wp_enqueue_scripts', 'glancer_script_enqueue');

/*
  ==========================
   Activate Menu
  ==========================
  */
  function glancer_theme_setup() {
  
    add_theme_support('menus');
    register_nav_menus(array(
      'menu-1' => esc_html__('Primary' , 'glancer'),
    ));
    
  }
  add_action('init', 'glancer_theme_setup');

/**  Register Custom Navigation Walker */
require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';

/*
  ==========================
   Theme Support Function
  ==========================
*/
  add_theme_support('post-thumbnails');
  add_theme_support('post-formats',array('aside','image','video'));
  add_theme_support('html5', array('search-form'));

/*
  ==========================
   Custom Post Type
  ==========================
*/
function create_posttype() {
 
  register_post_type( 'wpll_service',
  // CPT Options
      array(
          'labels' => array(
              'name' => __( 'Services' ),
              'singular_name' => __( 'Service' )
          ),
          'public' => true,
          'has_archive' => true,
          'rewrite' => array('slug' => 'services'),
      )
  );
}
// Hooking up our function to theme setup
add_action( 'init', 'create_posttype' );