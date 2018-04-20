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
    <div class="before-footer-wrapper companies-logo-wrapper">
        <div class="container">
            <hr class="hr-text" data-content="Partners">
            <div class="row company-logos-bottom">
                <div class="col-xs-5ths company-logo-single company-dhl">
                    <img class="ups" src="<?php echo get_template_directory_uri()?>/images/ups-new.png"/>
                </div>
                <div class="col-xs-5ths company-logo-single company-dhl">
                    <img src="<?php echo get_template_directory_uri()?>/images/dpd-new.png" />
                </div>
                <div class="col-xs-5ths company-logo-single company-dhl">
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
        <h1 class="section-title services-section-title footer-title"><span>Meld</span> je vandaag nog <br/ >aan voor <span>HomerrM</span></h1>
    </div>
    <div class="before-footer-wrapper">
        <div class=container>
            <div class="app-icons-campaign footer-icons">
                <div class="col-xs-4 download-app">
                    <a href="https://itunes.apple.com/us/app/homerr/id1166169719?mt=8">
                        <img src="http://homerr.nl/wp-content/themes/homerr/images/app_store.png" />
                    </a>
                </div>
                <div class="col-xs-4 download-app">
                    <a href="https://play.google.com/store/apps/details?id=com.homerr.app">
                        <img src="http://homerr.nl/wp-content/themes/homerr/images/google_play.png" />
                    </a>
                </div>
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
                <div class="col-xs-12 col-sm-8">
                    <img src="<?php echo get_template_directory_uri()?>/images/holland-flag.png" alt="" />
                    <img src="<?php echo get_template_directory_uri()?>/images/uk-flag.png" alt="" />
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
