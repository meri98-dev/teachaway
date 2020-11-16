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
							<div class="col-12">
								<h5><?php the_field('latest_post_text','options'); ?></h5>
							</div>		
							<div class="col-12">
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
												<p><?php the_title(); ?></p>
											</div>

											<?php
										}
									}
									?>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="col-12">
								<h5><?php the_field('about_menu_name','options'); ?></h5>
							</div>
							
							<div class="col-12">
								<div class="footer-menu">
									<?php wp_nav_menu( array( 'theme_location' => 'footer_menu') ); ?>
								</div>
							</div>

						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="col-12">
								<div class="location">
									<h5><?php the_field('get_in_touch_text','options'); ?></h5>
									<p><?php the_field('location','options'); ?></p>
								</div>
							</div>
							<div class="col-12">
								<h5><?php the_field('also_seen_on_text','options'); ?></h5>
							</div>
							<div class="col-12">
								<div class="row icons">
									<?php while(have_rows('image_repeater','options')):the_row();
										$image = get_sub_field('image','options'); ?>	
										<div class="col-4">
											<img src="<?php echo $image['url'] ?>" alt="">
										</div>
									<?php endwhile;?>
								</div>
							</div>
						</div>
						<div class="col-xl-3 col-lg-3 col-md-3 col-sm-12 col-xs-12">
							<div class="col-12">
								<h5><?php the_field('contacts_text','options'); ?></h5>
							</div>
							<div class="col-12">
								<ul class="locations">
									<?php while(have_rows('contacts','options')):the_row(); ?>
										<li><a href="<?php the_sub_field('link');?>"><?php the_sub_field('location');?></a></li>
									<?php endwhile; ?>
								</ul>
							</div>
						</div>
					</div> <!-- .top-footer -->

					<div class="row bottom-row">
						<div class="col-xl-2 col-lg-2 col-md-2 col-sm-12 col-xs-12">
							<?php $main_logo = get_field('footer_main_logo','options'); ?>
							<img src="<?php echo $main_logo['url']; ?>" alt="" class="footer-main-logo">
							<p class = "copyright-text"><?php the_field('copyright_text','options'); ?></p>
						</div>
						<div class="col-xl-10 col-lg-10 col-md-10 col-sm-12 col-xs-12">
							<?php $second_logo = get_field('footer_second_logo','options'); ?>
							<img src="<?php echo $second_logo['url']; ?>" alt="" class="footer-second-logo">
						</div>
					</div> <!-- bottom-footer -->

					<div class=" row fixed-mobile-menu">
						<div class="col-12">
							<div class="row">
								<div class="fixed-bottom-menu mobile-menu">
									<?php while(have_rows('menu_repeater','options')):the_row(); ?>
										<div class="col-3">
											<div class="item">
												<?php $small_logo = get_sub_field('image','options'); ?>
												<img src="<?php echo $small_logo['url']; ?>" alt="">
												<span><a href="<?php the_sub_field('link','options'); ?>"></a><?php the_sub_field('text','options'); ?></span>
											</div>
										</div>
									<?php endwhile;?>
								</div>
							</div>
						</div>
					</div> <!-- fixed-menu -->

				</footer><!-- #colophon -->

			</div><!--col end -->

		</div><!-- row end -->

	</div><!-- container end -->

</div><!-- wrapper end -->

</div><!-- #page we need this extra closing tag here -->

<?php wp_footer(); ?>



</body>

</html>

