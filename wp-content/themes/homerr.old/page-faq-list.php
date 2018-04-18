<?php

     /*
    Template Name: FAQ Page ID LISTING
    */

    get_header();
    if ( have_posts() ) {
        while ( have_posts() ) {
            the_post();
            the_content();
        }
    } else {
        _e( 'Sorry, no posts matched your criteria.' );
    } ?>

		<div class="container">
				<!--Search form for custom post type-->

				<?php
						the_content();

						$args = array(
							'orderby' => 'name',
							'show_count' => 0,
							'pad_counts' => 0,
							'hierarchical' => 1,
							'taxonomy' => 'category',
							'title_li' => ''
						);

						$question_id = !empty( $_GET['question'] ) ? $_GET['question'] : NULL;
						?>

						<!--New FAQs content page-->
						<div>
							<?php
									$categories = get_categories( array(
											'orderby' => 'name',
											'parent'  => 0,
											'taxonomy'=>'faqs_category'
									) );
									$i=1;
									?>
								<!-- Tab panes -->

								<div>
									<?php foreach ( $categories as $category ) {
											echo '<h1>' . $category->name . '</h1>';
										$terms = get_terms( array(
												'taxonomy' => 'faqs_category',
												'hide_empty' => false,
												'parent'=>$category->term_id
										) );?>

										<?php?>
											<div>
												<?php

												foreach ($terms as $term) {
													$args = array(
														'post_type'   => 'faq',
														'posts_per_page' => -1,
														'tax_query' => array(
															array(
																'taxonomy' => 'faqs_category',
																'field' => 'slug',
																'terms' => $term->slug
															)
														),
														'order'=>'ASC'
													);?>
													<div >
															<div>
																<h3><?php echo $term->name;?></h3>
															</div>
															<?php
															$query = new WP_Query( $args );?>
															<!--Start the loop-->
																<?php
																	while ( $query->have_posts() ) : $query->the_post();?>
																		<?php //echo the_content();?>
																		<?php $_question_id = get_the_ID(); ?>
																		<p>
																			<?php echo the_title() . ' <b>ID=</b>' . $_question_id . ' <b>LINK =</b> ' . site_url() . '/faq/?question=' . $_question_id;  ?>
																		</p>
																	<?php
																	endwhile;
																?>
													</div>
												<?php }
												?>
											</div>
											</div>
											<?php
											?>

											<?php
										} //category end
											?>
								</div>


					</div>
					<!--New FAQs content page-->

		</div><!-- .container -->
<?php
    get_footer();
?>
