<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package valley
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php if( is_front_page() || is_home() ) : ?>
	<meta name = "keywords" content = "Pole vault in PA,Pole vault clubs in PA,Pole vault lessons in PA,Pole vault private lessons in PA,Pole vaulting private lessons in PA,Pole vaulting in PA,Pole vaulting clubs in PA,Where to pole vault in PA,Pole vault clinics in PA,Private pole vault lessons In PA,Group pole vault lessons in PA,Pole vault camps in PA,Pole vault in Pennsylvania,Pole vault clubs in Pennsylvania,Pole vault lessons in Pennsylvania,Pole vault private lessons in Pennsylvania,Pole vaulting private lessons in Pennsylvania,Pole vaulting in Pennsylvania,Pole vaulting clubs in Pennsylvania,Where to pole vault in Pennsylvania,Pole vault clinics in Pennsylvania,Private pole vault lessons In Pennsylvania,Group pole vault lessons in Pennsylvania,Pole vault camps in Pennsylvania,Valley Forge,Valley Forge pole vault,Valley Forge pole vault club,Valley Forge pole vaulting" /> 
	<meta name = "description"  content = "Offering personal training, training regiments, and individualized small group pole vault lessons. We are dedicated to helping you reach your potential. We are a pole vault club in King of Prussia Pennsylvania." />
	<?php elseif( is_page( 'contact-us' ) ) :?>
	<meta name = "keywords" content = "Pole vaulting clubs in Pennsylvania,Pole vault clubs near New Jersey,Pole vault clubs near Delaware,Pole vault clubs near New York,Where to pole vault near New Jersey,Where to pole vault near New York,Where to pole vault near Delaware,Pole vault clubs near New Jersey,Pole vault clubs near Delaware,Pole vault camps near New Jersey,Pole vault camps near New York,Pole vault clinics near Delaware,Pole vault clinics near New Jersey,Pole vault clinics near New York,Private pole vault lessons near New Jersey,Private pole vault lessons near New York,Private pole vault lessons near Delaware,Group pole vault lessons near New Jersey,Group pole vault lessons near New York,Group pole vault lessons near Delaware" /> 
	<meta name = "description"  content = "Our location is in King of Prussia Pennsylvania minutes from the King of Prussia mall and Valley Forge park. Pole vaulters living in or near New Jersey, Delaware, and New York can easily attend our club and pole vault with us." />
	<?php elseif(is_page( 'classes' )):?>
	<meta name = "keywords" content = "Pole vault classes,Pole vaulting private lessons,Pole vault training programs,Small group pole vaulting lessons,Pole vault pole rentals,Pole vault summer lessons" /> 
	<meta name = "description"  content = "Our club holds personal pole vault lessons, individualized training programs, small group pole vault lessons, pole vaulting clinics, and pole rentals." />
	<?php elseif(is_page( 'why-we-are-different' )):?>
	<meta name = "keywords" content = "Sergey Bubka,Mondo Duplantis,Armand Duplantis,Yelena Isenbayeva,Petrov model,Renaud Lavillenie,Vertical Assault,Philly Jumps Club,Vault Worx" /> 
	<meta name = "description"  content = "We teach our vaulters a combination of technical work and mental skills training while culturing a safe and welcoming environment. We have worked with and follow similar coaching styles as Vertical Assault, Philly Jumps Club, and Vault Worx except ours is curtailed more to your needs as an individual." />
	<?php elseif(is_page( 'our-values' )):?>
	<meta name = "keywords" content = "Sergey Bubka,Mondo Duplantis,Armand Duplantis,Yelena Isenbayeva,Petrov model,Renaud Lavillenie,Vertical Assault,Philly Jumps Club,Vault Worx" /> 
	<meta name = "description"  content = "Our practices build a foundation of success that stems into all aspects of vaulters lives." />
	<?php elseif(is_page( 'our-story' )):?>
	<meta name = "keywords" content = "Pole vaulter" /> 
	<meta name = "description"  content = "Our team knows what it is like to want something more than you currently have. They are dedicated to helping you obtain your goals and have our team become part of your family." />
	<?php endif;?>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php if( is_front_page() || is_home() ) : ?>
	<div class="splace-screen">
		<div class="splace-screen-top"></div>
		<div class="splace-logo">
			<div class="w-100 text-center"><img src="<?php echo get_field('splace_logo', 'option');?>"></div>
		</div>
		<div class="splace-screen-bottom"></div>
	</div>
	<div id="hide-time">
	<?php endif;?>
		<div id="wrap">
			<header class="<?php if( is_page( 'contact-us' ) ) :?>teal-blue<?php elseif(is_page( array( 'classes', 'our-story' ) )):?>mix<?php endif;?>">
				<div class="top-bg"><img src="<?php echo get_field('top_background_image', 'option');?>" alt="top-image"></div>
				<div class="container">
					<div class="contact-info">
						<?php echo get_field('contact_information', 'option', false);?>
					</div>
				</div>
				<div class="clearfix"></div>
				<?php 
					if( is_front_page() || is_home() ) :
						$page_mobile_version_logo = get_field('home_page_mobile_version_logo', 'option');
						$page_logo = get_field('home_page_logo', 'option');
					elseif(is_page( 'contact-us' )):
						$page_mobile_version_logo = get_field('join_us_page_mobile_logo', 'option');
						$page_logo = get_field('join_us_page_logo', 'option');
					elseif(is_page( 'classes' )):
						$page_mobile_version_logo = get_field('classes_page_mobile_version_logo', 'option');
						$page_logo = get_field('classes_page_logo', 'option');
					elseif(is_page( 'why-we-are-different' )):
						$page_mobile_version_logo = get_field('why_different_page_mobile_version_logo', 'option');
						$page_logo = get_field('why_different_page_logo', 'option');
					elseif(is_page( 'our-values' )):
						$page_mobile_version_logo = get_field('our_values_page_mobile_version_logo', 'option');
						$page_logo = get_field('our_values_page_logo', 'option');
					elseif(is_page( 'our-story' )):
						$page_mobile_version_logo = get_field('our_story_page_mobile_version_logo', 'option');
						$page_logo = get_field('our_story_page_logo', 'option');
					endif;
				?>
				<nav class="navbar navbar-expand-lg navbar-light"> 
					<a class="navbar-brand mob-logo" href="<?php bloginfo('url');?>"><img src="<?php echo $page_mobile_version_logo;?>" alt="logo"></a>
					<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
					<div class="mobile-contact-info">
						<div class="contact-info">
							<?php echo get_field('contact_information_for_mobile', 'option', false);?>
						</div>
					</div>
				   <?php
					wp_nav_menu(
						array(
							'theme_location' => 'menu-header',
							'menu_class'        => 'navbar-nav',
							'container_class'        => 'collapse navbar-collapse justify-content-center',
							'container_id'        => 'navbarNav',
						)
					);
					?>
					<!--<div class="collapse navbar-collapse justify-content-center" id="navbarNav">
						
						<ul class="navbar-nav">
							<li class="nav-item active"> <a class="nav-link cool-link" href="index.html">HOME <span class="sr-only">(current)</span></a> </li>
							<li class="nav-item"> <a class="nav-link cool-link" href="joinus.html">JOIN US</a> </li>
							<li class="nav-item"> <a class="nav-link cool-link" href="classes.html">Classes</a> </li>
							<li class="nav-item"> <a class="nav-link cool-link" href="why-different.html">WHY WE’RE DIFFERENT</a> </li>
							<li class="nav-item"> <a class="nav-link cool-link" href="our-values.html">OUR VALUES</a> </li>
							<li class="nav-item"> <a class="nav-link cool-link" href="our-story.html">OUR STORY</a> </li>
						</ul>
					</div>-->
				</nav>
				<div class="logo"><a class="navbar-brand" href="<?php bloginfo('url');?>"><img src="<?php echo $page_logo;?>" alt="logo"></a></div>
			</header>
