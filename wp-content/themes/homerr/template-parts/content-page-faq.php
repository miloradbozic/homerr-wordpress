 <?php
/**
 * Template part for displaying page content in page-faq.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package homerr
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
      <header class="entry-header entry-header-background search-page-header" style="background-image: url('<?php echo $image[0]; ?>')">
        <div class="container height-js">
          <div class="center-elements">
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
                 <?php endif;
                if (get_field('display_download_buttons')) {
                  appstore_buttons();
                } ?>
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
    <div class="entry-content faq-page-content">
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

                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" role="tablist">
                      <?php foreach ( $categories as $category ) {?>
                        <?php
                        if ($i==1){?>
                           <li style="border-left: 0px solid transparent;" role="presentation" class="active"><a href="#<?php echo $category->term_id;?>" aria-controls="settings" role="tab" data-toggle="tab"><?php echo $category->name;?></a></li>
                        <?php
                        }
                        else{?>
                          <li role="presentation"><a href="#<?php echo $category->term_id;?>" aria-controls="settings" role="tab" data-toggle="tab"><?php echo $category->name;?></a></li>
                        <?php
                        }?>
                      <?php
                      $i=$i+1;
                      }
                      ?>
                    </ul>
                    <div class="wrapInput">
                      <?php
                        get_search_form();
                      ?>
                    </div>

                    <?php $i=1;?>
                    <!-- Tab panes -->

                    <div class="tab-content">
                      <?php foreach ( $categories as $category ) {
                          //echo $category->name;
                        $terms = get_terms( array(
                            'taxonomy' => 'faqs_category',
                            'hide_empty' => false,
                            'parent'=>$category->term_id
                        ) );?>

                        <?php
                        if ($i==1){?>
                          <div role="tabpanel" class="tab-pane active" id="<?php echo $category->term_id;?>">
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
                              <div class="row">
                                  <div class="col-md-4">
                                    <h3><?php echo $term->name;?></h3>
                                  </div>
                                  <?php
                                  $query = new WP_Query( $args );?>
                                  <!--Start the loop-->
                                  <div class="col-md-8">
                                    <?php
                                      $output = '<div class="faq-container">';
                                      while ( $query->have_posts() ) : $query->the_post();?>
                                        <?php //echo the_title();?>
                                        <?php //echo the_content();?>
                                        <?php $_question_id = get_the_ID();
                                        $active = ( $question_id == $_question_id ) ? 'faq-active' : '';
                                        $output .= '<div class="faq-single"><div id="question-' . $_question_id . '" class="faq-question ' . $active . '">' . get_the_title() . '</div>';
                                        $output .= '<div class="faq-answer question-' . $_question_id . '" style="display:none;">' . get_the_content() . '</div></div>';?>
                                    <?php endwhile;
                                    $output .= '</div>';
                                    echo $output;
                                    ?>
                                  </div>
                              </div>
                            <?php }
                            ?>
                          </div>
                        <?php
                        }
                        else{?>
                          <div role="tabpanel" class="tab-pane" id="<?php echo $category->term_id;?>">
                            <?php foreach ($terms as $term) {
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
                              <div class="row">
                                <div class="col-md-4">
                                  <h3><?php echo $term->name;?></h3>
                                </div>

                                <?php
                                $query = new WP_Query( $args );?>
                                <!--Start the loop-->
                                <div class="col-md-8">
                                  <?php
                                    $output = '<div class="faq-container">';
                                    while ( $query->have_posts() ) : $query->the_post();?>
                                      <?php //echo the_title();?>
                                      <?php //echo the_content();?>
                                      <?php $_question_id = get_the_ID();
                                      $active = ( $question_id == $_question_id ) ? 'faq-active' : '';
                                      $output .= '<div class="faq-single"><div id="question-' . $_question_id . '" class="faq-question ' . $active . '">' . get_the_title() . '</div>';
                                      $output .= '<div class="faq-answer question-' . $_question_id . '" style="display:none;">' . get_the_content() . '</div></div>';?>
                                  <?php endwhile;
                                  $output .= '</div>';
                                  echo $output;
                                  ?>
                                </div>
                              </div>
                          <?php
                            }
                          ?>
                          </div>
                          <?php
                          }
                          $i=$i+1;
                          ?>

                          <?php
                          } //kraj za kategoriju
                          ?>
                    </div>


              </div>
              <!--New FAQs content page-->

        </div><!-- .container -->
    </div><!-- .entry-content -->
</article><!-- #post-## -->
