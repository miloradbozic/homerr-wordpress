<!--
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
  <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>  
  <header class="entry-header entry-header-background home-slider" style="background-image: url('<?php echo $image[0]; ?>')">
    <div class="container height-js">
      <div class="center-elements">
        <div class="header-content-area">
          <div class="header-content-area-inner">
            <?php if (get_field('page_title_override')) {
              echo '<h1 class="entry-title white-big-title">';
              the_field('page_title_override');
              echo '</h1>';
              } else {
              the_title( '<h1 class="entry-title white-big-title">', '</h1>' );
              }
              if (get_field('page_subtitle')) : ?>
            <p class="white-small-title"><?php the_field('page_subtitle') ?></p>
            <?php endif;
              if (get_field('display_download_buttons')) {
                appstore_buttons();
              } ?>
          </div>
        </div>
        <div class="phone-image-wrapper hidden-xs">
          <img class="phone-image" src="<?php echo get_template_directory_uri(); ?>/images/Iphone2.png" />
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
-->

<?php if (has_post_thumbnail( $post->ID ) ): ?>
<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>  
<header class="entry-header entry-header-background home-slider"
style="background-image: url('<?php echo $image[0]; ?>')">
  <!-- <div class="flexHeader"> -->
    <div class="container">
      <div class="header-content">
        <h1 class="entry-title white-big-title"><?php the_field('page_title_override') ?></h1>
        <div class="wrapSmallTitle">
        <p class="white-small-title"><?php the_field('page_subtitle') ?></p>
        </div>
      </div>
      <div class="phoneDiv"
style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/phone.png');
 background-repeat: no-repeat;"></div>
    </div>
  <!-- </div> -->
</header>
 <?php endif; ?>
 <!--todo handle no post_thumbnail -->