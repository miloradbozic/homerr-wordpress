</div> <!-- main content -->

   <?php
		$style = '';//is_front_page() ? 'margin-top: -210px;' : '';
		if( $pagename != 'aanmelden' ) {
   ?>
<?php
        $shadow_pages = array("homepage", "services", "hoe-werkt-homerr", "wordhomerr");
 ?>
   <div id="before-footer" class="<?php if (in_array($pagename, $shadow_pages) || is_front_page() ) { echo "before-footer-shadow"; } ?>" style="<?php echo $style; ?>">
        <?php
            if( is_active_sidebar( 'footer-sidebar' ) ) {
                dynamic_sidebar( 'footer-sidebar' );
            }
        ?>
        <div class="before-footer-wrapper">
            <div class="container">
            </div>
        </div>
    </div>
    <div class="before-footer-wrapper">
        <div class="container company-logos">
            <hr class="hr-text" data-content="PARTNERS">
            <div class="row company-logos-bottom">
                <div class="col-xs-5ths company-logo-single">
                    <img class="ups" src="<?php echo get_template_directory_uri()?>/images/ups-new.png"/>
                </div>
                <div class="col-xs-5ths company-logo-single">
                    <img src="<?php echo get_template_directory_uri()?>/images/dpd-new.png" />
                </div>
                <div class="col-xs-5ths company-logo-single">
                    <img src="<?php echo get_template_directory_uri()?>/images/frank-new.png" />
                </div>
                <div class="col-xs-5ths company-logo-single company-dhl" >
                    <img height="30px" src="<?php echo get_template_directory_uri()?>/images/dhl-new.png" />
                </div>
            </div>
            <hr class="hr-text" data-content="">
        </div>
        
    </div>
    <div class="before-footer-wrapper">
        <h1 class="section-title services-section-title">Meld je vandaag nog <br/ >aan voor Homerr</h1>
    </div>
    <div class="before-footer-wrapper">
        <div class=container>
            <div class="app-icons-campaign footer-icons">
                <!-- <div class="row small-gutter"> -->
                    <div class="col-xs-4" style="width: 300px;height: 90;">
                        <a href="https://itunes.apple.com/us/app/homerr/id1166169719?mt=8">
                            <img src="http://homerr.nl/wp-content/themes/homerr/images/app_store.png" />
                        </a>
                    </div>
                    <div class="col-xs-4" style="width: 300px;height: 90;">
                        <a href="https://play.google.com/store/apps/details?id=com.homerr.app">
                            <img src="http://homerr.nl/wp-content/themes/homerr/images/google_play.png" />
                        </a>
                    </div>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div id="footer" class="footer-parent">
        <div class="footer-row">
            <div class="row">

                <div id="footer-sidebar1" class="col-xs-6 col-sm-2">
                <?php
                    if( is_active_sidebar( 'footer-sidebar-1' ) ) {
                        dynamic_sidebar( 'footer-sidebar-1' );
                    }
                ?>
                <div class="social-icons">
                    <a href="https://www.facebook.com/tryhomerr" class="facebook-icon" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/facebook-icon.svg" alt=""></a>
                    <a href="https:/www.twitter.com/tryhomerr" class="twitter-icon" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/twitter-icon.svg" alt=""></a>
                </div>
                </div>
                <div id="footer-sidebar2" class="col-xs-6 col-sm-2">
                <?php
                    if( is_active_sidebar( 'footer-sidebar-2' ) ) {
                        dynamic_sidebar( 'footer-sidebar-2' );
                    }
                ?>
                </div>
                <div id="footer-sidebar3" class="col-xs-12 col-sm-4">
                <?php
                    if( is_active_sidebar( 'footer-sidebar-3' ) ) {
                        dynamic_sidebar( 'footer-sidebar-3' );
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-copyright text-center">
        <b>Copyright Nucleus Group</b>
    </div>
	<?php } ?>
    <?php wp_footer(); ?>
  </body>
</html>
