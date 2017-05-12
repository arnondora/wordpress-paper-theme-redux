<?php

//Theme Bootstrap
function papertheme_theme_setup()
{
  //Hook Theme Support List
  add_theme_support('menus');

  //Register Nav Menu
  register_nav_menu('primary', 'Sidebar Navigation');
}
add_action('init', 'papertheme_theme_setup');

//Function for enqueue all assets (including related stylesheet and javascript)
function papertheme_enquque_assets()
{
  wp_register_style('papertheme_style', get_template_directory_uri() . '/dist/css/PaperTheme.css', array(),'1.0', all);
  wp_enqueue_style('papertheme_style');

  wp_register_script('papertheme_script', get_template_directory_uri() . '/dist/js/PaperTheme.js', array(),'1.0', true);
  wp_enqueue_script('papertheme_script');
}

add_action( 'wp_enqueue_scripts', 'papertheme_enquque_assets' );
?>
