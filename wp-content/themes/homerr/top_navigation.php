<?php
    $title = get_the_title();
    $top_left_menu_items = wp_get_nav_menu_items( 'Top Navigation Left' );
    $top_right_menu_items = wp_get_nav_menu_items( 'Top Navigation Right' );
    $num = 1;
?>
<!-- Top navigation -->
<nav class="navbar navbar-default navbar-fixed-top transparent-header"> <!-- navbar-static-top -->
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only"><?php _e( 'Toggle navigation', 'homerr' ); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand imgHeader" href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri() . '/images/header-images/logo.png' ?>"/></a>
    </div>
    <div id="navbar" class="navbar-collapse collapse">
      <?php if( !empty( $top_right_menu_items && $top_left_menu_items) ) : ?>
       <ul class="nav navbar-nav navbar-right homeNetwerk">
       <?php foreach( $top_left_menu_items as $left_item ) : $left_active = $title == $left_item->title ? 'active' : '';  ?>
                <li><a class="<?php echo $left_active; ?> " href="<?php echo $left_item->url ?>"><?php echo $left_item->title ?></a></li>
            <?php endforeach; ?>
            <?php do_action('wpml_add_language_selector'); ?>
      
            
            <?php foreach( $top_right_menu_items as $right_item ) : $right_active = $title == $right_item->title ? 'active' : ''; ?>
                <li><a class="<?php echo $right_active; ?>" href="<?php echo $right_item->url ?>"><?php echo $right_item->title ?></a></li>
            <?php endforeach; ?>
        </ul>
      <?php endif; ?>
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only"><?php _e( 'Toggle navigation', 'homerr' ); ?></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<!-- End of Top navigation -->
