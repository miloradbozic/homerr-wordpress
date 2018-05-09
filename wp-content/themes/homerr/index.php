<?php 
    get_header();
    if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
 	<header class="entry-header entry-header-background home-slider" style="background-image: url('https://homerr.com/wp-content/uploads/2017/06/BG-Homerr-1.png')">
		<div class="container">
			<!-- <div class="center-elements"> -->
				<div class="header-content">
					<div class="header-content-area-inner">
						<!-- <h1 class="entry-title white-big-title"><?php the_title(); ?></h1> -->
					</div>
				</div>
			<!-- </div> -->
		</div>
	</header>
 	
	<div style="padding: 30px;">
		<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
		<small style="margin-top: 30px;"><?php the_time('F jS, Y'); ?> by <?php the_author_posts_link(); ?></small>
		<div class="entry">
			<?php the_content(); ?>
		</div>
	</div>
	 <?php endwhile; else : ?>
	    <p><?php _e( 'Sorry, no posts matched your criteria.' ); ?></p>
	 <?php endif;
    get_footer(); 
?>
