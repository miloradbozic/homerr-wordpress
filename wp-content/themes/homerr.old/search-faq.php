<?php
/**
 * The template for displaying search results pages.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Homerr
 */

get_header();?>

 <div id="primary" class="content-area">
		 <main id="main" class="site-main" role="main">

       <?php
   		if ( have_posts() ) : ?>

				<?php

				get_template_part( 'template-parts/content', 'search-faq' );

      else :
    		get_template_part( 'template-parts/content', 'none' );

    		endif; ?>

		 </main><!-- #main -->
 </div><!-- #primary -->

<?php
 get_footer();
