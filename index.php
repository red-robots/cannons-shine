<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

get_header(); ?>

	<div id="primary" class="content-area">
		
		<div class="wrapper">
		<?php
		// specific post ID you want to pull
		$post = get_post(2); 
		setup_postdata( $post );
		 
			$contact_button_text = get_field('contact_button_text');
			$disclaimer = get_field('disclaimer');
			$cannons_bio = get_field('cannons_bio');
			$locations_title = get_field('locations_title');
			
		 
		 ?>

		 <div class="left-col">
		 	
		 
			 <?php if($disclaimer != '') { ?>
				 <div class="disclaimer-wrap">
					 <div class="disclaimer">
					 	<?php echo $disclaimer; ?>
					 </div>
				 </div>
			 <?php } ?>

			 <div class="cannon-content">
			 	<?php echo $cannons_bio; ?>
			 </div>

		 </div>
		 <!-- left col -->
		 <div class="right-col">
		 	<div class="details">
		 		<?php if(have_rows('details')) : while(have_rows('details')) : the_row(); 

		 			$detail = get_sub_field('detail');

		 		?>
		 			<div class="detail-wrap">
			 			<div class="detail">
			 				<?php echo $detail; ?>
			 			</div>
		 			</div>

		 	<?php endwhile; endif; ?>
		 	</div>
		 </div>
		 <!-- right col -->
	</div>
		

		<div class="top-tri">
			<img src="<?php bloginfo('template_url'); ?>/images/white-top.png">
		</div>

		

	</div><!-- #primary -->

	<section class="foundat">
			<h2><?php echo $locations_title; ?></h2>

			<div class="locations">
				<?php if(have_rows('locations')) : while(have_rows('locations')) : the_row(); 

				$logo = get_sub_field('logo');
				$link = get_sub_field('location_link');

				// echo '<pre>';
				// print_r($logo);
				// echo '</pre>';

				?>

				<div class="location">
					<a href="<?php echo $link; ?>" target="_blank">
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
					</a>
				</div>

				<?php endwhile; endif; ?>
			</div>	
	</section>
<?php

get_footer();
