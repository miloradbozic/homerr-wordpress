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


				 <h2 class="search-result-title"><?php _e( 'Search Results Found For', 'locale' ); ?>: "<?php the_search_query(); ?>" </h2>

				 <?php
				 while ( have_posts() ) : the_post();

						 get_template_part( 'template-parts/content', 'search' );

				 endwhile; // End of the loop.

      else :
    		get_template_part( 'template-parts/content', 'none' );

    		endif; ?>

		 </main><!-- #main -->
 </div><!-- #primary -->

<?php
 get_footer();
