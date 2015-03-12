<?php

/**
 * Register Menus
 * http://codex.wordpress.org/Function_Reference/register_nav_menus#Examples
 */
register_nav_menus(array(
    'nav_bar' => 'Top Nav', // registers the menu in the WordPress admin menu editor
));

/**
 * Navigation bar
 * http://codex.wordpress.org/Function_Reference/wp_nav_menu
 */
if ( ! function_exists( 'uxdont_nav_bar' ) ) {
  function uxdont_nav_bar() {
      wp_nav_menu(array( 
          'container' => false,                     // remove nav container
          'container_class' => '',                  // class of container
          'menu' => '',                             // menu name
          'menu_class' => 'o-sitenav__links',       // adding custom nav class
          'theme_location' => 'nav-bar',            // where it's located in the theme
          'before' => '',                           // before each link <a> 
          'after' => '',                            // after each link </a>
          'link_before' => '',                      // before each link text
          'link_after' => '',                       // after each link text
          'depth' => 5,                             // limit the depth of the nav
          'fallback_cb' => false,                   // fallback function
          'walker' => new uxdont_nav_bar_walker()
      ));
  }
}

?>