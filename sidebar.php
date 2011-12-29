<?php
/**
 * The Sidebar containing the main widget area.
 *
 * @package WordPress
 * @subpackage Bootstrap from Twitter
 * @since Twenty Eleven 1.0
 */

$options = twentyeleven_get_theme_options();
$current_layout = $options['theme_layout'];

if ( 'content' != $current_layout ) :
?>

<!--sidebar.php-->

		<div class="span4">
		<div id="secondary" class="span4 widget-area" role="complementary">

			<div class="widget">
				<script src="http://widgets.twimg.com/j/2/widget.js"></script>
				<script>
					new TWTR.Widget({
						version: 2,
						type: 'profile',
						rpp: 4,
						interval: 30000,
						width: 250,
						height: 300,
						theme: {
							shell: {
								background: '#049cd9',
								color: '#ffffff'
							},
							tweets: {
								background: '#ffffff',
								color: '#404040',
								links: '#0069d6'
							}
						},
						features: {
							scrollbar: false,
							loop: false,
							live: false,
							behavior: 'all'
						}
					}).render().setUser('ramenlabs').start();
				</script>
			</div>

			<?php if ( ! dynamic_sidebar( 'sidebar-1' ) ) : ?>

				<aside id="archives" class="widget">
					<h3 class="widget-title"><?php _e( 'Archives', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_get_archives( array( 'type' => 'monthly' ) ); ?>
					</ul>
				</aside>

				<aside id="meta" class="widget">
					<h3 class="widget-title"><?php _e( 'Meta', 'twentyeleven' ); ?></h3>
					<ul>
						<?php wp_register(); ?>
						<li><?php wp_loginout(); ?></li>
						<?php wp_meta(); ?>
					</ul>
				</aside>

			<?php endif; // end sidebar widget area ?>
		</div><!-- #secondary .widget-area -->
		</div><!-- .span4 -->
<?php endif; ?>
