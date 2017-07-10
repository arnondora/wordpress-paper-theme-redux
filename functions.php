<?php

//Theme Bootstrap
function papertheme_theme_setup()
{
  //Hook Theme Support List
  add_theme_support('menus');
  add_theme_support('post-thumbnails');
  add_theme_support('html5', array('search-form', 'comment-list', 'comment-form'));
  add_theme_support( 'automatic-feed-links' );
  add_theme_support('title-tag');

  //Register Nav Menu
  register_nav_menu('primary', 'Sidebar Navigation');
}
add_action('init', 'papertheme_theme_setup');

//Function for enqueue all assets (including related stylesheet and javascript)
function papertheme_enquque_assets()
{
  wp_register_style('papertheme_style', get_template_directory_uri() . '/dist/css/PaperTheme.css', array(),'1.2', all);
  wp_enqueue_style('papertheme_style');

  wp_register_script('papertheme_font_loader', 'https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js', array(),'1.2', true);
  wp_register_script('papertheme_script', get_template_directory_uri() . '/dist/js/PaperTheme.js', array(),'1.2', true);
  wp_register_script('papertheme_amp', 'https://cdn.ampproject.org/v0.js', array(),'1.2', true);
  wp_enqueue_script('papertheme_font_loader');
  wp_enqueue_script('papertheme_script');
  wp_enqueue_script('papertheme_amp');
}

add_action( 'wp_enqueue_scripts', 'papertheme_enquque_assets' );

// Filter For Add Async to script tag
function papertheme_script_async_tag_add($tag){

# Add async to all remaining scripts
return str_replace( ' src', ' async="async" src', $tag );
}
add_filter( 'script_loader_tag', 'papertheme_script_async_tag_add', 10 );

// Filter For Controlling Excerpt Length
function papertheme_excerpt_length( $length ) {
    return 15;
}
add_filter( 'excerpt_length', 'papertheme_excerpt_length', 999 );

// Filter For Page Pagination
function papertheme_previous_post_pagination_filter() {
    return 'class="pull-right waves-effect waves-light btn post-pagination-btn"';
}
add_filter('previous_posts_link_attributes', 'papertheme_previous_post_pagination_filter');

function papertheme_next_post_pagination_filter() {
    return 'class="pull-left waves-effect waves-light btn post-pagination-btn"';
}
add_filter('next_posts_link_attributes', 'papertheme_next_post_pagination_filter');


// Filter For Primary menu
class papertheme_primary_menu_nav_walker extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $output .= $indent . '<li>';

           $attributes .= ! empty( $item->target )     ? ' target="' . esc_attr( $item->target     ) .'"' : '';
           $attributes .= ! empty( $item->xfn )        ? ' rel="'    . esc_attr( $item->xfn        ) .'"' : '';
           $attributes .= ! empty( $item->url )        ? ' href="'   . esc_attr( $item->url        ) .'"' : '';

           $prepend = '<span>';
           $append = '</span>';

            $item_output = $args->before;
            $item_output .= '<a'. $attributes .'>';
            $item_output .= '<span><i class = "fa ' . esc_attr($item->attr_title) .' fa-3x"></i></span>';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}

?>
