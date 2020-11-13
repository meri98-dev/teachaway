<?php
/**
 * Template Name: TEFL Template
 *
 * Template for displaying a page without sidebar even if a sidebar widget is published.
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

get_header();
$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>


<div class="container-fluid">
	<div class="row">
		<div id="fullpage" class="col-12">
			<?php $main_banner_image = get_field('background_image');?>
			<section class="section main-banner" style="background-image: url('<?php echo $main_banner_image['url'];?>');">
				<div class="row">
					<div class="col-12">
						<div class="col-sm-12 col-xs-12">
							<div class="main-data">
								<h1><?php the_field('main_title'); ?></h1>
								<p><?php the_field('sub_title');?></p>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section class="university-repeater container-1000">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<?php while(have_rows('university_repeater')):the_row();?>
								<div class="col-lg-6 col-xl-6 col-md-12 col-sm-12 ">
									<div class="university">
										<div class="col-12">
											<div class="data">
												<?php $logo = get_sub_field('university_image'); 
												$button_1= get_sub_field('button_1'); 
												$button_2 = get_sub_field('button_2');?>

												<img src="<?php echo $logo['url']; ?>" alt="" class="logo">
												<p><?php the_sub_field('description'); ?></p>
												<div class="buttons">
													<a class="cta-button cta-green" href="<?php echo $button_1['cta_link']  ?>"><?php echo $button_1['cta_text']  ?></a>
													<a class="cta-button cta-white" href="<?php echo $button_2['cta_link']  ?>"><?php echo $button_2['cta_text']  ?></a>
												</div>
											</div>
										</div>
										
									</div>
								</div>
							<?php endwhile;?>
						</div>
					</div>
				</div>
			</section>

		</div><!-- #fullpage-->

	</div><!-- .row end -->

</div><!-- .container-fluid -->

<?php get_footer(); ?>
