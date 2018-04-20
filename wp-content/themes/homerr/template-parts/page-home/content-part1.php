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
style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/home-image-1.png')">
  <!-- <div class="flexHeader"> -->
    <div class="container">
      <div class="header-content">
        <h1 class="entry-title white-big-title">De toekomst van pakketbezorging</h1>
        <p class="white-small-title">One morning, when Gregor Samsa woke from troubled dreams,
        he found himself transformed in his bed into a snail.</p>
      </div>
      <div class="phoneDiv"
style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/phone.png')"></div>
    </div>
  <!-- </div> -->
</header>
<div class="wrapDivApps">
  <div class="wrapText">
  <span>
    Download once gratis app
  </span>
  <span>ene meld ja ann als Homerr</span>
  </div>
  <div class="wrapAppImages">
    <a class="ios mobile" href="https://itunes.apple.com/us/app/homerr/id1166169719?mt=8"
style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/ios_button.png')"></a>
<div class="firstSpaceBetween"></div>
    <a class="android mobile" href="https://play.google.com/store/apps/details?id=com.homerr.app"
style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/android_button.png')"></a>
  </div>
</div>
<!-- <div class="col-md-3"></div>
<div class="col-md-6">
  <div class="col-md-12">
    <div class="col-md-12"><span>Download once gratis app</span></div>
    <div class="col-md-12"><span>ene meld ja ann als Homerr</span></div>
    <div class="col-md-6">
      <a class="ios mobile"
      style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/ios_button.png')"></a>
    </div>
    <div class="col-md-6">
      <a class="android mobile"
      style="background-image: url('<?php echo get_template_directory_uri(); ?>/images/home/android_button.png')"></a>
    </div>
  </div>
</div>
<div class="col-md-3"></div> -->
 <?php endif; ?>
 <!--todo handle no post_thumbnail -->