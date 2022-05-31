<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package valley
 */

?>

	</div>
	<div class="clearfix"></div>
	<footer class="<?php if( is_page( 'contact-us' ) ) :?>teal-blue<?php elseif( is_page( 'our-values' ) ):?>teal-blue our-val-fot<?php elseif( is_page( 'our-story' ) ):?>teal-blue our-val-fot our-sto-fot<?php endif;?>">
		<div class="container">
			<?php if( is_front_page() || is_home() ) :?>
			<img src="<?php echo get_field('home_page_footer_border_image', 'option');?>" class="border-line footer-line" alt="border">
			<h2 class="text-center help"><?php echo get_field('home_page_footer_text', 'option', false);?></h2>
			<?php endif;?>
			
			<?php 
				if( is_front_page() || is_home() ) :
					$page_logo = get_field('home_page_logo', 'option');
				elseif(is_page( 'contact-us' )):
					$page_logo = get_field('join_us_page_logo', 'option');
				elseif(is_page( 'classes' )):
					$page_logo = get_field('classes_page_logo', 'option');
				elseif(is_page( 'why-we-are-different' )):
					$page_logo = get_field('why_different_page_logo', 'option');
				elseif(is_page( 'our-values' )):
					$page_logo = get_field('our_values_page_logo', 'option');
				elseif(is_page( 'our-story' )):
					$page_logo = get_field('our_story_page_logo', 'option');
				endif;
			?>
			
			<div class="clearfix"></div>
			<div class="logo"><a class="navbar-brand" href="<?php bloginfo('url');?>"><img src="<?php echo $page_logo;?>" alt="logo"></a></div>
			<div class="clearfix"></div>
			
			<div class="footer-link">
				<?php
				wp_nav_menu(
					array(
						'theme_location' => 'menu-footer',
						'menu_class'        => 'navbar-nav',
						'container'=> false,
						//'container_class'        => 'footer-link',
						//'container_id'        => '',
					)
				);
				?>
				<div class="clearfix"></div>
				<img src="<?php echo get_field('footer_border_image', 'option');?>" class="border-line" alt="border"> 
			</div>
			<div class="clearfix"></div>
			<div class="contact-info">
				<?php echo get_field('footer_contact_information', 'option',false);?>
			</div>
		</div>
	</footer>
<?php if( is_front_page() || is_home() ) : ?>
</div>
<?php endif;?>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
<script src="assets/js/html5shiv.js"></script>
<script src="assets/js/respond.js"></script>
<![endif]--> 

<?php wp_footer(); ?>

<!--Custom-Js--> 
<script>
    jQuery(function(){
		var shrinkHeader = 5;
		jQuery(window).scroll(function() {
			var scroll = getCurrentScroll();
			  if ( scroll >= shrinkHeader ) {
				   jQuery('header').addClass('shrink');
				}
				else {
					jQuery('header').removeClass('shrink');
				}
		});
		function getCurrentScroll() {
			return window.pageYOffset || document.documentElement.scrollTop;
		}
	});
	//TopScroll
	jQuery('html, body').animate({scrollTop: '0px'}, 300);
</script>


<script>
	jQuery(document).ready(function(){
		jQuery('.splace-screen-top').addClass('opecity');
		jQuery('.splace-logo').addClass('opecity');
		jQuery('.splace-screen-bottom').addClass('opecity');
		setTimeout(function() {
		   jQuery('.splace-screen').addClass('opecity-none');
		   jQuery('#hide-time').show();
		}, 3500);


        // Select all links with hashes
        jQuery('a[href*="#"]')
            // Remove links that don't actually link to anything
            .not('[href="#"]')
            .not('[href="#0"]')
            .click(function(event) {
                // On-page links
                if (
                    location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '')
                    &&
                    location.hostname == this.hostname
                ) {
                    // Figure out element to scroll to
                    var target = jQuery(this.hash);
                    target = target.length ? target : jQuery('[name=' + this.hash.slice(1) + ']');
                    // Does a scroll target exist?
                    if (target.length) {
                        // Only prevent default if animation is actually gonna happen
                        event.preventDefault();
                        jQuery('html, body').animate({
                            scrollTop: target.offset().top
                        }, 1000, function() {
                            // Callback after animation
                            // Must change focus!
                            var $target = jQuery(target);
                            $target.focus();
                            if ($target.is(":focus")) { // Checking if the target was focused
                                return false;
                            } else {
                                $target.attr('tabindex','-1'); // Adding tabindex for elements not focusable
                                $target.focus(); // Set focus again
                            };
                        });
                    }
                }
            });


	});
</script>

</body>
</html>
