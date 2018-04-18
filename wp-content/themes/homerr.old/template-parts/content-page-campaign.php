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
                <header class="entry-header entry-header-background" style="background-image: url('<?php echo $image[0]; ?>')">
                    <div class="container">
											<div class="row">
												<div class="col-md-3 hidden-xs hidden-sm">
													<div class="">
	                            <img class="phone-image" src="<?php echo get_template_directory_uri(); ?>/images/iphone-campaign.png" />
	                        </div>
												</div>
												<div class="col-md-8 col-md-offset-1">
	                        <div class="header-content-area-campaign">
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
                                 <?php endif;?>
																 <div class="campaign-speech-testimonial">

																		<div class="bubble">
																			<div class="bubble-content">
																				<span class="quotation-marks">“</span>Door simpelweg het adres van een Homerr te gebruiken, hoef je nooit meer een pakketje te missen.<span class="quotation-marks">”</span><span class="visible-xs-inline small"> - <em>Juriaan Matthijssen</em></span></span>
																			</div>
																			<div class="bubble-content-image hidden-xs">
																				<img class="img-circle" src="<?php echo get_template_directory_uri(); ?>/images/campaign-avatar.png" alt="">
																			</div>
																			<img class="bubble-tip hidden-xs" src="<?php echo get_template_directory_uri(); ?>/images/balloon-tip.png" />
																		</div>


																 </div>
																 <div class="row">
																	 <div class="col-md-6 col-md-offset-6">
				 														<?php
				 															if (get_field('display_download_buttons')) {
				 																	appstore_buttons_campaign();
				 															}
				 														 ?>
				 													</div>
																 </div>
	                            </div>
	                        </div>

												</div>

                    </div>
									</div>
            <?php else: ?>
                <header class="entry-header">
                    <div class="container">
                        <?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
                    </div>
            <?php endif; ?>
    </header><!-- .entry-header -->
</article><!-- #post-## -->
