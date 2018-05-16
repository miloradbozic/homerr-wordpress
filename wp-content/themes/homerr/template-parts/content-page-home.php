<?php
/**
 * Template part for displaying page content in page-home.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package homerr
 */
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php get_template_part( 'template-parts/page-home/content', 'part1' ); ?>
  <?php //get_template_part( 'template-parts/page-home/content', 'part2' ); ?>
  <?php //get_template_part( 'template-parts/page-home/content', 'part3' ); ?>
  <div class="entry-content">
    <?php
      the_content();
      wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'homerr' ),
          'after'  => '</div>',
      ) );
      ?>
  </div>
  <?php //get_template_part( 'template-parts/page-home/content', 'part4' ); ?>
</article>
<!-- #post-## -->
