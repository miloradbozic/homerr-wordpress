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
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
  <header class="entry-header entry-header-background home-slider-retailer" style="background-image: url('<?php echo $image[0]; ?>')">
    <div class="container height-js">
      <div class="center-elements">
        <div class="header-content header-content-alternate">
          <div class="header-content-area-inner-retailer">
            <?php if (get_field('page_title_override')) {
              echo '<h1 class="entry-title white-big-title-retailer">';
              the_field('page_title_override');
              echo '</h1>';
              } else {
              the_title( '<h1 class="entry-title white-big-title">', '</h1>' );
              }
              if (get_field('page_subtitle')) : ?>
            <p class="white-small-title-retailer"><?php the_field('page_subtitle') ?></p>
            <?php endif;
              if (get_field('display_download_buttons')) {
                appstore_buttons();
              } ?>
          </div>
        </div>
      </div>
    </div>
  </header>
    <?php else: ?>
    <header class="entry-header">
      <div class="container">
        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
      </div>
      <?php endif; ?>
    </header>
  <!-- .entry-header -->
  <div class="entry-content">
    <?php
      the_content();

      wp_link_pages( array(
          'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'homerr' ),
          'after'  => '</div>',
      ) );
      ?>
  </div>
  <!-- .entry-content -->
</article>
<!-- #post-## -->
