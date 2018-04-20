<?php
/*
Template Name: Retailer template
*/
get_header('retailer'); ?>

  <div id="primary" class="content-area">
    <main id="main" class="site-main page-homepage" role="main">

      <?php
      while ( have_posts() ) : the_post();

        get_template_part( 'template-parts/content', 'page-retailer' );

      endwhile; // End of the loop.
      ?>

    </main><!-- #main -->
  </div><!-- #primary -->

<?php
get_footer();
