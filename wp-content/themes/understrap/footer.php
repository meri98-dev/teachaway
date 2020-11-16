<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php get_template_part( 'sidebar-templates/sidebar', 'footerfull' ); ?>

<div class="wrapper" id="wrapper-footer">

	<div class="<?php echo esc_attr( $container ); ?>">

		<div class="row">

			<div class="col-md-12">

				<footer class="site-footer" id="colophon">

					<div class="row top-footer">
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="slick-slider">
								<?php
								$args = array(
									'post_type' => 'post'
								);

								$post_query = new WP_Query($args);

								if($post_query->have_posts() ) {
									while($post_query->have_posts() ) {
										$post_query->the_post();
										?>
										<div class="slick-item">
											<h5><?php the_title(); ?></h5>
										</div>

										<?php
									}
								}
								?>
							</div>

						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
							

							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">

							</div>
							<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">

							</div>
						</div>

					</footer><!-- #colophon -->

				</div><!--col end -->

			</div><!-- row end -->

		</div><!-- container end -->

	</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>



</body>

</html>

