<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
?>
	</div><!-- #main .wrapper -->
	<footer id="colophon" role="contentinfo">
		<div class="site-info">
            <ul class="list-inline">
                <li><i class="fa fa-copyright" aria-hidden="true"></i> Harmonie la Fraternelle 2011-<?php echo date('Y'); ?></li>
                <li><i class="fa fa-cloud" aria-hidden="true"></i> Hébergé par <a href="http://www.graphandweb.fr" target="_blank">Graph and Web</a></li>
            </ul>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>
</body>
</html>
