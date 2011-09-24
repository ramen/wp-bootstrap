<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Bootstrap from Twitter
 * @since Twenty Eleven 1.0
 */

get_header(); ?>

<!--single.php-->

		<div id="primary" class="span12">
			<div id="content" role="main">

				<?php while ( have_posts() ) : the_post(); ?>

					<nav id="nav-single" class="pagination">
						<h3 class="assistive-text"><?php _e( 'Post navigation', 'twentyeleven' ); ?></h3>
						<ul>
							<li class="nav-previous"><?php previous_post_link( '%link', __( 'Prev', 'twentyeleven' ) ); ?></li>
							<li class="nav-next"><?php next_post_link( '%link', __( 'Next', 'twentyeleven' ) ); ?></li>
						</ul>
					</nav><!-- #nav-single -->

					<?php get_template_part( 'content', 'single' ); ?>

					<?php comments_template( '', true ); ?>

				<?php endwhile; // end of the loop. ?>

			</div><!-- #content -->
		</div><!-- #primary -->

<?php get_footer(); ?>