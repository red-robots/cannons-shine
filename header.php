<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<link href="https://fonts.googleapis.com/css?family=Raleway|Schoolbell" rel="stylesheet">
<?php wp_head(); 


// specific post ID you want to pull
$post = get_post(2); 
setup_postdata( $post );
 
	$contact_button_text = get_field('contact_button_text');
	$disclaimer = get_field('disclaimer');
	$cannons_bio = get_field('cannons_bio');
	$locations_title = get_field('locations_title');
	$email = get_field('email');
	$antispam = antispambot($email);
 
wp_reset_postdata();

?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">


<div class="top-bar">
	<div class="bottle-banner">
		<img src="<?php bloginfo('template_url'); ?>/images/bottle-banner.png" alt="Cannon's Shine">
	</div>
</div>
<div class="top-dash"></div>

	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper">
			
		<div class="top-left-col">
	        <h1 class="logo">
	        	<a href="<?php bloginfo('url'); ?>">
	        		<img src="<?php bloginfo('template_url'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>">
	        	</a>
	        </h1>

	        <div class="cbutton-wrapper">
	        	<div class="cbutton">
	        		<a href="<?php echo 'mailto:'.$antispam; ?>">
	        			<?php echo $contact_button_text; ?>
	        		</a>
	        	</div>
	        </div>

	        <div class="bottle-banner-mobile">
	        	<img src="<?php bloginfo('template_url'); ?>/images/bottle-banner.png">
	        </div>

        </div>
	        

			
	</div><!-- wrapper -->
	</header><!-- #masthead -->
<div class="bottom-dash"></div>
	<div id="content" class="site-content ">
