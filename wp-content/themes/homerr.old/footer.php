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
                <div class="row company-logos-bottom">
                    <div class="col-xs-5ths company-logo-single">
                        <img src="<?php echo get_template_directory_uri()?>/images/ups.png"/>
                    </div>
                    <div class="col-xs-5ths company-logo-single">
                        <img src="<?php echo get_template_directory_uri()?>/images/dpd.png" />
                    </div>
                    <div class="col-xs-5ths company-logo-single">
                        <img src="<?php echo get_template_directory_uri()?>/images/postnl.png" />
                    </div>
                    <div class="col-xs-5ths company-logo-single">
                        <img src="<?php echo get_template_directory_uri()?>/images/fedex.png" />
                    </div>
                    <div class="col-xs-5ths company-logo-single">
                        <img src="<?php echo get_template_directory_uri()?>/images/dhl.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer" class="">
        <div class="container">
        <div class="row">

            <div id="footer-sidebar1" class="col-xs-6 col-sm-4">
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
            <div id="footer-sidebar2" class="col-xs-6 col-sm-4">
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
                <div class="footer-appstore-buttons">
                    <a href="https://itunes.apple.com/us/app/homerr/id1166169719?mt=8" target="_blank">
                        <img src="<?php echo get_template_directory_uri() . '/images/app_store.png' ?>" />
                    </a><br />

                  <a href="https://play.google.com/store/apps/details?id=com.homerr.app" target="_blank">
                        <img src="<?php echo get_template_directory_uri() . '/images/google_play.png' ?>" />
                    </a>
                </div>
        	</div>
         </div>
        </div>
    </div>
	<?php } ?>
    <?php wp_footer(); ?>
  </body>
</html>
