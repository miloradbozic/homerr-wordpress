<?php
/**
 * Template for displaying search forms
 */
?>

  <form role="search" method="get" id="searchform" class="faq-search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
		<input type="hidden" name="post_type" value="faq"/>
		<input type="hidden" name="search_page_id" value="<?php echo get_the_ID(); ?>"/>
		<input type="hidden" name="lang" value="<?php echo(ICL_LANGUAGE_CODE); ?>"/>
    <div class="input-group">
      <input type="text" class="form-control" value="" name="s" id="s" autocomplete="off" placeholder="Waar ben je naar op zoek?">
      <div class="input-group-btn">
        <!-- <button type="submit" id="searchsubmit" class="btn btn-default" aria-label="Search">
          <span class="glyphicon glyphicon-search"></span>
        </button> -->
      </div>
    </div>

	</form>
