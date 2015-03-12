<?php get_header(); ?>

<div>
  <?php
    if ( have_posts() ) :

      do_action('uxdont_before_content');

      while ( have_posts() ) : the_post();
        get_template_part( 'content', get_post_format() );
      endwhile;

      else :
        get_template_part( 'content', 'none' );

      do_action('uxdont_before_pagination');

    endif;
    

    if ( function_exists('uxdont_pagination') ) {
      uxdont_pagination();
    } else if ( is_paged() ) { ?>
    <nav class="c-pagination">
      <div class="c-pagination__link c-pagination--prev"><?php next_posts_link( __( '&larr; Older posts', 'uxdont' ) ); ?></div>
      <div class="c-pagination__link c-pagination--next"><?php previous_posts_link( __( 'Newer posts &rarr;', 'uxdont' ) ); ?></div>
    </nav>
  <?php } ?>

  <?php do_action('uxdont_after_content'); ?>

  </div>
  <?php get_sidebar(); ?>

</div>

<?php get_footer(); ?>