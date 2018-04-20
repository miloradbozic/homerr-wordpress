<?php
/**
 * Template for displaying search forms
 */
?>
  <!--<p class = "active-tab"><strong>Active Tab</strong>: <span></span></p>-->

	<form role="search" method="get" id="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>">
    <label class="screen-reader-text" for="s">Kunnen wij jou ergens mee helpen?</label>
		<input type="text" value="" name="s" id="s" />
    <input type="hidden" value="faq" name="post_type" />
    <input type="hidden" value="faqs_category" name="taxonomy" />
		<input type="submit" class="submit" name="submit" id="searchsubmit" value="Search" />
	</form>
