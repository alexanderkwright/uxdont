<?php
if (!function_exists('uxdont_sidebar_widgets')) :
  function uxdont_sidebar_widgets() {
    register_sidebar(array(
      'id' => 'sidebar-widgets',
      'name' => __('Sidebar widgets', 'uxdont'),
      'description' => __('Drag widgets to this sidebar container.', 'uxdont'),
      'before_widget' => '<article id="%1$s" class="c-widget c-widget--full %2$s"><div class="c-widget__content">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'
    ));
    register_sidebar(array(
      'id' => 'footer-widgets',
      'name' => __('Footer widgets', 'uxdont'),
      'description' => __('Drag widgets to this footer container', 'uxdont'),
      'before_widget' => '<article id="%1$s" class="c-widget c-widget--quarter %2$s"><div class="c-widget__content">',
      'after_widget' => '</div></article>',
      'before_title' => '<h6>',
      'after_title' => '</h6>'      
    ));
  }
  add_action( 'widgets_init', 'uxdont_sidebar_widgets' );
endif;
?>