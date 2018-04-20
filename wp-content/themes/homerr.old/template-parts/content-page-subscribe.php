<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package homerr
 */

?>

<?php



if( isset($_POST['subscriber_email']) ){
		$homerr_url = 'http://ec2-54-209-248-19.compute-1.amazonaws.com/api/1.0/newsletter-subscription';
		$api_token=get_option('homerr_api_token');

		$subscriber_name = $_POST['subscriber_name'];

		if ( isset ($_POST['subscriber_surname']) ) {
			$subscriber_name .= ' ';
			$subscriber_name .= $_POST['subscriber_surname'];
		};

		$subscriber_zip = $_POST['subscriber_zip_code'];
		$subscriber_email = $_POST['subscriber_email'];

		$response = wp_remote_post( $homerr_url, array(
				    'method'      => 'POST',
				    'timeout'     => 45,
				    //'redirection' => 5,
				    //'httpversion' => '1.0',
				    'blocking'    => true,
				    'headers' => array('content-type' => 'application/json', 'authorization' => 'Bearer \\"'.$api_token.'\\"'),
				    'body'        	=> json_encode(array(
											        'email' => $subscriber_email,
											        'name' => $subscriber_name,
											        'zip_code' => $subscriber_zip
											    	)
				    							),
					    )
					);


		$content_error = '';

		if ( is_wp_error( $response ) ) {

            $html = '<div id="post-error">';
                $html .= __( 'There was a problem retrieving the response from the server.', 'homerr' );
            $html .= '</div><!-- /#post-error -->';

        }
        else {

            $html = '<div id="post-messages">';
            $errorMessages=json_decode($response['body']);

            if (isset ($errorMessages->message)) {
            	$message=$errorMessages->message;
            };

            if (isset ($errorMessages->success)) {
            	$status=$errorMessages->success;
            };

            if ($status){
                $html .= '<p class="success">' . esc_html__( 'Thank you for your subscription. We will contact you shortly.', 'homerr') . '</p>';

            }
            else{
                $html .= '<p>' . esc_html__( 'An error has occured:') . '</p>';
                foreach ($message as $messageText) {
                    $html .= '<p class="error">' . $messageText[0] . '</p>';
                }
            }

            $html .= '</div><!-- /#post-error -->';
        }


		$content_error .= str_replace("newsletter subscriptions.", "", $html); ;

		}
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if (has_post_thumbnail( $post->ID ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
				<header class="entry-header entry-header-background" id="registration-form" style="background-image: url('<?php echo $image[0]; ?>')">
					<div class="container">
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
								 <?php endif; ?>

									<div class="row">
										<div class="col-md-12">
											<?php if( isset($content_error) ){ echo $content_error; }; ?>

											<form action="?visitid=<?php $userkey = time() . date(); echo md5($userkey);?>" method="POST">
											    <div class="form-elements">
											    	<div class="row">
											    		<div class="col-md-4">
											    			<label for="name" class="mandatory"><?php _e( 'Name', 'homerr' ); ?></label>
															<input name="subscriber_name" value="<?php if( isset($_POST['subscriber_name']) ){ echo $_POST['subscriber_name']; }; ?>" type="text" id="name">
											    		</div>
											    		<div class="col-md-4">
											    			<label for="surname"><?php _e( 'Surname', 'homerr' ); ?></label>
															<input name="subscriber_surname" value="<?php if( isset($_POST['subscriber_surname']) ){ echo $_POST['subscriber_surname']; }; ?>" type="text" id="surname">
											    		</div>

											    		<div class="col-md-4">
											    			<label for="zip_code" class="mandatory"><?php _e( 'Address & postcode', 'homerr' ); ?></label>
															<input name="subscriber_zip_code" value="<?php if( isset($_POST['subscriber_zip_code']) ){ echo $_POST['subscriber_zip_code']; }; ?>" type="text" id="zip_code">
											    		</div>
											    	</div>
											    	<div class="row">
											    		<div class="col-md-8">
											    			<label for="email" class="mandatory"><?php _e( 'E-mail', 'homerr' ); ?></label>
															<input name="subscriber_email" value="<?php if( isset($_POST['subscriber_email']) ){ echo $_POST['subscriber_email']; }; ?>" type="text" id="email">
											    		</div>
											    		<div class="col-md-4">
											    			<button type="submit" class="cta-button"><?php _e( 'Sign up', 'homerr' ); ?></button>
											    		</div>
											    	</div>
											    </div>
											</form>

										</div>
									</div>

								<?php
								if (get_field('display_download_buttons')) {
									appstore_buttons();
								} ?>
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
	<div class="entry-content">
		<div class="container">
			<?php
				the_content();

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'homerr' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .container -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
