<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Bootstrap from Twitter
 * @since Twenty Eleven 1.0
 */
?>

<!--footer.php-->

	</div><!-- .row -->
	</div><!-- #main -->

	<footer id="colophon" role="contentinfo">

			<?php
				/* A sidebar in the footer? Yep. You can can customize
				 * your footer with three columns of widgets.
				 */
				get_sidebar( 'footer' );
			?>

			<div id="site-generator">
				<div class="row">
					<div class="span2 columns offset2">
						<a href="http://code.google.com/u/dave.benjamin/">googlecode</a>
					</div>

					<div class="span2 columns">
						<a href="http://github.com/ramen/">github</a>
					</div>

					<div class="span2 columns">
						<a href="http://twitter.com/ramenlabs/">twitter</a>
					</div>

					<div class="span2 columns">
						<a href="http://facebook.com/ramenlabs/">facebook</a>
					</div>

					<div class="span2 columns">
						<a href="http://www.linkedin.com/in/ramenlabs">linkedin</a>
					</div>

					<div class="span2 columns">
						<a href="http://www.flickr.com/photos/81209814@N00/">flickr</a>
					</div>

					<div class="span2 columns">
						<a href="http://reddit.com/user/ramen/">reddit</a>
					</div>

					<div class="span2 columns" style="text-align: right;">
						<a href="http://spoomusic.com/">spoomusic</a>
					</div>
				</div>
			</div>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
