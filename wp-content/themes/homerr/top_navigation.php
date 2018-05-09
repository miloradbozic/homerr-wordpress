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
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" onclick="displayMobileNavBar()">
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
       <?php if ($left_item->title == "Home" && $title == "Homerr | sociaal logistiek netwerk") $left_active = 'active';?>
       
                <li><a class="<?php echo $left_active; ?> " href="<?php echo $left_item->url ?>"><?php echo $left_item->title ?></a></li>
              
            <?php endforeach; ?>
            
      
            
            <?php foreach( $top_right_menu_items as $right_item ) : $right_active = $title == $right_item->title ? 'active' : ''; ?>
                <li><a class="<?php echo $right_active; ?>" href="<?php echo $right_item->url ?>"><?php echo $right_item->title ?></a></li>
            <?php endforeach; ?>
            <div class="wrapCloseMobileButon">
              <button id="closeBtn" type="button" class="navbar-toggle collapsed closeBtn"  data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar" onclick="hideNavbar()">
            </div>
        </ul>
      <?php endif; ?>
      
        
      </button>
    </div><!--/.nav-collapse -->
  </div>
</nav>
<!-- End of Top navigation -->
<script>
  function displayMobileNavBar() {
    if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
      console.log('mobile');
      $(".navbar-header").css("display", "none");
      $(".homeNetwerk li:first-child").css("display", "block");
      $(".navbar-collapse").css({"max-height": "none", "background": "white", "opacity": "1"});
      $(".navbar-collapse").addClass("mobileNavHeight");
      $(".navbar-default .navbar-nav>li>a").css({"text-align": "center", "text-transform": "uppercase", "font-size": "30px", "line-height": "1em", "color": "black"});
      $(".navbar-default .navbar-nav>li").css({"margin-bottom": "5%"});
      // $(".navbar-default .navbar-nav>li>a").removeClass('active');
      $(".nav.navbar-nav.navbar-right > li:last-of-type a").css({"margin-left": "0px"});
      $(".homeNetwerk li:last-child").css({"border": "0px solid"});
      $(".navbar-default .navbar-toggle").css({"border-color": "transparent", "text-align": "center"});
      $(".closeBtn").addClass("imageCloseBtn");
      $("#closeBtn").css("display", "block");
      $(".homeNetwerk").css({"display": "flex", "flex-direction": "column", "justify-content": "space-between", "height": "100vh"});
      $(".active").css("color", "#37b89f");
    } else {
      console.log('desktop');
      $('.homeNetwerk button').css("display", "none");
    }
  }

  function hideNavbar() {
    $(".navbar-header").css("display", "block");
  }
</script>