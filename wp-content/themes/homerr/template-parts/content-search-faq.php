<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Homerr
 */

?>

<?php $faq_post_id = !empty( $_GET['search_page_id'] ) ? $_GET['search_page_id'] : 202; // Setting the faq page ID so we can pull the header data from the page that has sent search request?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<?php if (has_post_thumbnail( $faq_post_id ) ): ?>
			<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $faq_post_id ), 'single-post-thumbnail' ); ?>
				<header class="entry-header entry-header-background" style="background-image: url('<?php echo $image[0]; ?>')">
					<div class="container">
						<div class="header-content">
							<div class="header-content-area-inner">
								<?php
										echo '<h1 class="entry-title white-big-title">';
										_e( 'Search Results Found For: ', 'homerr' );
										echo '</h1>';
										echo '<p class="white-medium-title">';
										the_search_query();
										echo '</p>';
								if (get_field('display_download_buttons', $faq_post_id)) {
									appstore_buttons();
								} ?>
							</div>
						</div>
					</div>
			<?php else: ?>
				<header class="entry-header">
					<div class="container">
						<?php
							echo '<h1 class="entry-title white-big-title">';
							_e( 'Search Results Found For: ', 'homerr' );
							the_search_query();
							echo '</h2>';
						?>
					</div>
			<?php endif; ?>
	</header><!-- .entry-header -->
	<div class="entry-content">
		<div class="container">
			<?php
			while ( have_posts() ) : the_post();

				$_question_id = get_the_ID();
				$output = '<div class="faq-single"><div id="question-' . $_question_id . '" class="faq-question">' . get_the_title() . '</div>';
				$output .= '<div class="faq-answer question-' . $_question_id . '" style="display:none;">' . get_the_content() . '</div></div>';
				echo $output;

			endwhile; // End of the loop.

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'homerr' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .container -->
	</div><!-- .entry-content -->
</article><!-- #post-## -->
