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


<div class="container-fluid p-0">
	<div class="row">
		<div id="fullpage" class="col-12">
			<!-- 	Start Main Banner Section  -->			
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
			<!-- 	End Main Banner Section  -->		

			<!-- 	Start University Section  -->			
			<section class="university-repeater container-1000">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<?php while(have_rows('university_repeater')):the_row();?>
								<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12">
									<div class="university">
										<div class="col-12">
											<div class="data">
												<?php $logo = get_sub_field('university_image'); 
												$button_1= get_sub_field('button_1'); 
												$button_2 = get_sub_field('button_2');?>
												<img src="<?php echo $logo['url']; ?>" alt="" class="logo">
												<p><?php the_sub_field('description'); ?></p>
												<?php get_template_part( 'partials/partial', 'button'); ?>
											</div>
										</div>
										
									</div>
								</div>
							<?php endwhile;?>
						</div>
					</div>
				</div>
			</section>
			<!-- 	End University Section  -->	

			<!-- 	Start About TEFL  Section  -->	
			<section class="about-tefl container-1000">
				<div class="row">
					<div class="col-12">
						<div class="about-data">
							<h1><?php the_field('about_title'); ?></h1>
							<div class="paragraph-repeater">
								<?php while(have_rows('about_description')):the_row(); ?>
									<p><?php the_sub_field('description_block'); ?></p>
								<?php endwhile;?>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="row">
							<?php while(have_rows('about_repeater')):the_row();?>
								<?php $image = get_sub_field('image');?>
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<div class="about-repeater">
										<img src="<?php echo $image['url'] ?>" alt="">
										<h4><?php the_sub_field('title');?></h4>
										<p><?php the_sub_field('description');?> </p>
									</div>
								</div>
							<?php endwhile;?>
							<div class="col-12">
								<div class="notice">
									<span class="notice_1"><?php the_field('notice_1')?></span> 
									<span class ="notice_2"><a href=""><?php the_field('notice_2'); ?></a></span>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- 	End About TEFL  Section  -->	

			<!-- 	Start Employers  Section  -->	
			<section class="employer-tefl">
				<div class="row">
					<div class="col-12">
						<div class="section-title">
							<h1><?php the_field('employers_title');?></h1>	
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-12">
						<div class="row images">
							<?php while(have_rows('employers_repeater')): the_row();
								$image = get_sub_field('image'); ?>
								<div class="col-md-2 col-lg-2 col-xs-12 col-sm-12">
									<img src="<?php echo $image ['url']; ?>" alt="">
								</div>
							<?php endwhile;?>
						</div>
					</div>
				</div>
			</section>
			<!-- 	Start Employers  Section  -->	


			<!-- 	Start Courses  Section  -->	

			<div class="courses container-fluid px-0">
				<div class="row">
					<div class="section-title">
						<h1><?php the_field('courses_tefl');?></h1>
					</div>	
				</div>
				<div class="row">
					<div class="col-12">				
						<?php 
						$count =0;
						while(have_rows('courses_repeater')):the_row(); ?>
							<div class="row <?php	if( $count % 2 == 1) { echo "right-side";} ?> mx-0"> 
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 px-0">
									<?php $main_image = get_sub_field('main_image'); ?>
									<div class="main-image">
										<img class = "img-fluid w-100" src="<?php echo $main_image['url']; ?>" alt="">
										<!-- <div class="main-image" style="background-image: url('<?php echo $main_image['url'];?>')";></div> -->
									</div>
								</div>
								<div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 second-col">
									<?php $uni_image = get_sub_field('university_image'); ?>
									<img class = "img-fluid uni-image"src="<?php echo $uni_image['url']; ?>" alt="">
									<div class="text-repeater">
										<?php while(have_rows('text_repeater')):the_row(); ?>
											<p><i class = "fa fa-check"></i><?php the_sub_field('text');?></p>
										<?php endwhile; ?>
									</div>
									<?php get_template_part( 'partials/partial', 'button'); ?>
								</div>
							</div>
							<?php
							$count++;
						endwhile; ?>
					</div>
				</div>
			</div>

			<!-- 	End Courses  Section  -->	
			<!-- Start Testimonials Section -->
			<section class="testimonials-tefl">
				<div class="row">
					<div class="col-12">
						<div class="testimonial">
							<div class="row">
								<div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 col-xs-12">
									<?php $testimonial_img = get_field('image'); ?>
									<img src="<?php echo $testimonial_img['url'] ?>" alt="">
								</div>
								<div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 col-xs-12">
									<div class="testimonial-information">
										<p><?php the_field('description'); ?></p>
										<h4> <?php the_field('name'); ?></h4>
										<h5><?php the_field('location'); ?></h5>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!-- End Testimonials Section -->


			<!-- 	Start University Section  -->			
			<section class="university-repeater container-1000 end-page">
				<div class="row">
					<div class="col-12">
						<div class="row">
							<?php while(have_rows('university_repeater')):the_row();?>
								<div class="col-lg-6 col-xl-6 col-md-6 col-sm-12 col-xs-12">
									<div class="university">
										<div class="col-12">
											<div class="data">
												<?php $logo = get_sub_field('university_image'); ?>
												<img src="<?php echo $logo['url']; ?>" alt="" class="logo">
												<p><?php the_sub_field('description'); ?></p>
												<?php get_template_part( 'partials/partial', 'button'); ?>
											</div>
										</div>
										
									</div>
								</div>
							<?php endwhile;?>
						</div>
					</div>
				</div>

				<div class="row">
					<div class="col-12">
						<div class="bottom-information-section">
							<p class = "bottom-text-1"><?php the_field('bottom_text_1'); ?></p>
							<p class = "bottom-text-2 "><?php the_field('bottom_text_2')?> <span class = "bottom-text-3"><a href=""><?php the_field('bottom_text_3');?></a></span></p>
						</div>
					</div>
				</div>
			</section>
			<!-- 	End University Section  -->	


		</div><!-- #fullpage-->

	</div><!-- .row end -->

</div><!-- .container-fluid -->

<?php get_footer(); ?>
