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
                    <img class="ups" src="<?php echo get_template_directory_uri()?>/images/ups_logo.png"/>
                </div>
                <div class="col-xs-5ths company-logo-single company-dhl">
                    <img src="<?php echo get_template_directory_uri()?>/images/dpd_logo.png" />
                </div>
                <div class="col-xs-5ths company-logo-single company-dhl" >
                    <img src="<?php echo get_template_directory_uri()?>/images/dhl_logo.png" />
                </div>
            </div>
            <hr class="hr-text" data-content="">
        </div>
        
    </div>
    <div class="before-footer-wrapper retailer-footer-wrapper">
        <h1 class="section-title services-section-title footer-title"><span class="emphasized-other emphasized">Vraag </span ><span class="emphasized">vandaag </span><span class="blackColorFont">nog </span><br/ ><span class="blackColorFont">een </span><span class="emphasized-other emphasized">demo </span><span class="blackColorFont">aan.</span></h1>
    </div>
    <div class="row wrapVraagInformationBtn retailer-link-button" style="margin-top: 60px;">
        <a class="btn-default">Demo aanvragen</a>
    </div>
    <div class="before-footer-wrapper">
        <h1 class="section-title services-section-title footer-title colorTextGreen"><span>Meld</span> je vandaag nog aan voor <span>Homerr</span></h1>
    </div>
    <div class="before-footer-wrapper">
        <!-- <div class=container> -->
            <div class="app-icons-campaign footer-icons">
                <div class="download-app download-app-ios">
                    <a class="" href="https://itunes.apple.com/us/app/homerr/id1166169719?mt=8">
                        <!-- <img src="http://homerr.nl/wp-content/themes/homerr/images/app_store.png" /> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/apple_btn_small.png" alt="Smiley face" height="90" width="280">
                    </a>
                </div>
                <div class="spaceBetween"></div>
                <div class=" download-app download-app-android">
                    <a class="" href="https://play.google.com/store/apps/details?id=com.homerr.app">
                        <!-- <img src="http://homerr.nl/wp-content/themes/homerr/images/google_play.png" /> -->
                        <img src="<?php echo get_template_directory_uri(); ?>/images/home/google_btn_small.png" alt="Smiley face" height="90" width="280">
                    </a>
                </div>
            </div>
        <!-- </div> -->
    </div>
    <div id="footer" class="footer-parent">
        <div class="footer-row">
            <div class="row contatSitemap">
                <div class="coll-md-1"></div>
                <div class="coll-md-10">
                    <div id="footer-sidebar1" class="col-md-3 textFooter">
                        <?php
                            if( is_active_sidebar( 'footer-sidebar-1' ) ) {
                                dynamic_sidebar( 'footer-sidebar-1' );
                            }
                        ?>
                        <div class="social-icons socialIcons">
                            <a href="https://www.facebook.com/tryhomerr" class="facebook-icon" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/home/fb_black.png" width="30" height="40" alt=""></a>
                            <a href="https:/www.twitter.com/tryhomerr" class="twitter-icon" target="_blank"><img src="<?php echo get_template_directory_uri()?>/images/home/tw_black.png" width="80" height="40" alt=""></a>
                        </div>
                    </div>
                    <div id="footer-sidebar2" class="col-md-3 textFooter">
                        <?php
                            if( is_active_sidebar( 'footer-sidebar-2' ) ) {
                                dynamic_sidebar( 'footer-sidebar-2' );
                            }
                        ?>
                    </div>
                    <div class="col-md-3"></div>
                    <div class="col-md-3">
                        <!-- <img src="<?php echo get_template_directory_uri()?>/images/holland-flag.png" alt="" />
                        <img src="<?php echo get_template_directory_uri()?>/images/uk-flag.png" alt="" /> -->
                    </div>
                </div>
                <div class="coll-md-1"></div>
            </div>
        </div>
        <!-- <div class="translateImages">
            <div>
                <img src="<?php echo get_template_directory_uri()?>/images/holland-flag.png" alt="" />
                <img src="<?php echo get_template_directory_uri()?>/images/uk-flag.png" alt="" />
            </div>
        </div> -->
        <!-- <div class="col-md-12 iconsFlag"> -->
            <!-- <div class="col-md-10"></div>
            <div class="col-md-2">
                <div class="col-xs-6">
                    <img src="<?php echo get_template_directory_uri()?>/images/holland-flag.png" alt="" />
                </div>
                <div class="col-xs-6">
                    <img class="iconEngland" src="<?php echo get_template_directory_uri()?>/images/uk-flag.png" alt="" />
                </div>    
            </div> -->
            <?php } ?>
    <?php wp_footer(); ?>
        <!-- </div> -->
    </div>
    <div class="footer-copyright text-center">
        <div><span>Copyright Nucleus Group</span></div>
    </div>
    <!--wp_footer php tag -->
  </body>
</html>
