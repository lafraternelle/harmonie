<?php
/**
 * Template for displaying search forms in Twenty Twelve Child
 *
 * @package WordPress
 * @subpackage Twenty_Twelve_Child
 * @since Twenty Twelve Child 1.0.0
 */
?>

<form role="search" method="get" class="searchform" action="<?php echo esc_url( home_url( '/' ) ); ?>" id="searchform">
	<div>
		<label class="screen-reader-text" for="s"><?php echo _x( 'Search for:', 'label', 'twentytwelve' ); ?></label>
		<input type="text" value="" name="s" id="s" placeholder="Recherche ...">
		<input type="submit" value="&#xf002;" id="searchsubmit">
	</div>
</form>
