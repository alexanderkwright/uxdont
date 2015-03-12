<?php
/**
 * The template for displaying a "No posts found" message
 *
 * @subpackage uxdont
 * @since uxdont 1.0
 */
?>

<header class="c-page__header">
  <h1 class="c-page__title"><?php _e( 'Nothing Found', 'uxdont' ); ?></h1>
</header>

<div class="c-page__content">
  <?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

  <p><?php printf( __( 'Ready to publish your first post? <a href="%1$s">Get started here</a>.', 'uxdont' ), admin_url( 'post-new.php' ) ); ?></p>

  <?php elseif ( is_search() ) : ?>

  <p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with some different keywords.', 'uxdont' ); ?></p>
  <?php get_search_form(); ?>

  <?php else : ?>

  <p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'uxdont' ); ?></p>
  <?php get_search_form(); ?>

  <?php endif; ?>
</div>