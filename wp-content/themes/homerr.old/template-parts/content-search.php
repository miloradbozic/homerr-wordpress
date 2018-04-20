<?php
/**
 * Template part for displaying results in search pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Homerr
 */

?>



<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php
		$output = '<div class="faq-single"><div id="question-' . $_question_id . '" class="faq-question ' . $active . '">' . get_the_title() . '</div>';
		$output .= '<div class="faq-answer question-' . $_question_id . '" style="display:none;">' . get_the_content() . '</div></div>';
		echo $output;
	?>

</article><!-- #post-## -->
