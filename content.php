<?php
/**
 * The default template for displaying content. Used for both single and index/archive/search.
 *
 * @subpackage uxdont
 * @since uxdont 1.0
 */

  $post_classes = array(
    'c-post',
    'c-post--tile'
  );
?>

<article id="post-<?php the_ID(); ?>" <?php post_class($post_classes); ?>>
  <?php if ( has_post_thumbnail() ): ?>
    <figure class="c-post__image">
      <?php the_post_thumbnail('', array('class' => 'c-post__thumbnail')); ?>
    </figure>
  <?php endif; ?>
  <header class="c-post__header">
    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
    <?php uxdont_entry_meta(); ?>
  </header>
  <div class="c-post__content">
    <?php the_content(__('Continue reading...', 'uxdont')); ?>
  </div>
  <footer class="c-post__footer">
    <?php $tag = get_the_tags(); if (!$tag) { } else { ?><p><?php the_tags(); ?></p><?php } ?>
  </footer>
</article>