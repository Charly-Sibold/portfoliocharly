<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Big_Bob
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php
function bb_noShowBGImage() {
	if ( (has_post_thumbnail() && ((is_page() || is_single()) && !is_home() && !is_front_page()) )
		|| (has_custom_header() && is_front_page() && !is_paged()) 
		|| ( ((!is_front_page() && is_page() && !has_post_thumbnail()) || (is_front_page() && is_page()))
			&& (((get_theme_mod('big_bob_wide_when_centered', 'Off') == 'On') 
				&& !((get_theme_mod( 'big_bob_background_header_space', 'Off' ) == 'On') && is_front_page() 
					&& !(get_theme_mod( 'big_bob_title_below_nav', 'Off' ) == 'Off') ) )
			&& !( (is_active_sidebar( 'sidebar-3' ) || has_nav_menu('menu-4')) &&
			(!is_page_template('page-no-sidebar.php') &&
				((get_theme_mod( 'big_bob_blog_sidebar_only', 'Off' ) == 'Off') 
					|| ((get_theme_mod( 'big_bob_blog_sidebar_only', 'Off' ) == 'Home Only') && !is_front_page()) 
					|| ((get_theme_mod( 'big_bob_blog_sidebar_only', 'Off' ) == 'Except Home') && is_front_page()) ) ) ) ) ) ) {
		//The page has header or featured media or it is a big page, so don't show the backgorund image
		return true;
	} else {
		return false;
	}
}
function bb_hasPageSidebar() {
	if ( ((!is_active_sidebar( 'sidebar-3' ) && !has_nav_menu('menu-4')) && is_page())
		|| (is_page_template('page-no-sidebar.php') ||
			((is_active_sidebar( 'sidebar-3' ) || has_nav_menu('menu-4')) && is_page() &&
				( ((get_theme_mod( 'big_bob_blog_sidebar_only', 'Off' ) == 'Home Only') && is_front_page()) 
					|| ((get_theme_mod( 'big_bob_blog_sidebar_only', 'Off' ) == 'Except Home') && !is_front_page()) )  ) ) ) {
						return false;
	} else {
		return true;
	}
}
function bb_hasPostSidebar(){
	if ((is_active_sidebar( 'sidebar-1' ) || has_nav_menu('menu-2')) 
	&& (is_home() || is_archive() || is_search() || is_404() || is_single()) ) {
		return true;
	} else {
		return false;
	}
}
$bb_backImg = get_theme_mod('big_bob_background_image_media');
//only preload media that needs to be fit at runtime.
if ( (get_theme_mod( 'big_bob_preloader', 'On' ) == 'On' ) 
	&& ( ((wp_get_attachment_url($bb_backImg) && !bb_noShowBGImage())
		|| (has_post_thumbnail() && ((is_page() || is_single()) && !is_home() && !is_front_page()) ) 
		|| (has_custom_header() && is_front_page())) ) ) {
?>
<div id="bb-preloader"></div>
<?php } ?>
<?php wp_body_open();?>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#primary"><?php esc_html_e( 'Skip to content', 'big-chill' ); ?></a>
	<?php 
		$bb_backVid = get_theme_mod('big_bob_background_video_media');
		if ( bb_noShowBGImage() ) {
		//The page has header or featured media, so don't show the backgorund image
		} else if (wp_get_attachment_url($bb_backVid)) {
			$bb_attr = array(
				'src' => wp_get_attachment_url($bb_backVid),
				'width' => 'auto',
				'height' => 'auto',
			);
			?>
			<div class="bb-backVid">
				<video src="<?php echo esc_url(wp_get_attachment_url($bb_backVid))?>" preload="auto" autoplay muted alt="<?php esc_attr_e( 'Backgroound Video', 'big-chill' ); ?>" />
				</div>
			<?php
		}
		?>
	<?php 
	if ( bb_noShowBGImage() ) {
	//The page has header or featured media or it is a big page, so don't show the backgorund image
	} else if (wp_get_attachment_url($bb_backImg) ) {
        if (get_theme_mod('big_bob_big_background_copy', 'On') == 'On') {
            ?>
			<div id="bb-back-image" class="bb-bigBG">
		<?php
        } else {
            ?>
			<div id="bb-back-image">
		<?php
        }
		if (wp_get_attachment_url($bb_backImg)) {
			$bb_attr_img = array(
				'src' => wp_get_attachment_url($bb_backImg),
				'width' => 'auto',
				'height' => 'auto',
			); 
            ?>
				<img src="<?php echo esc_url(wp_get_attachment_url($bb_backImg))?>" alt="<?php esc_attr_e( 'Backgroound Image', 'big-chill' ); ?>" />
			<?php
        	}?>
		</div>
	<?php
	}
	if (get_theme_mod('big_bob_borders', 'Off') == 'On') {
		?>
		<header id="masthead" class="site-header bb-has-borders">
		<?php
	} else {
    ?>
		<header id="masthead" class="site-header">
	<?php
}
	if (get_theme_mod('big_bob_center_nav', "On") == "On") {
		?>
		<div class="custom-header bb-center-nav">
		<?php
	} else {
        ?>
		<div class="custom-header">
		<?php
    }
	if (((!is_front_page() && has_post_thumbnail()) && (is_page() || is_single() || is_page_template()) && !is_home() && !is_paged() )
		|| (is_front_page() && (!(get_theme_mod( 'big_bob_title_below_nav', 'Off' ) == 'Off') && !is_paged()) || (is_front_page() && has_custom_header() && !is_paged())) ) {
		?>
		<nav id="site-navigation" class="main-navigation bb-fixed-top bb-wide-nav">
		<?php
	} else {
		if ((!bb_hasPageSidebar() && (get_theme_mod('big_bob_wide_when_centered', 'Off') == 'Off'))
			|| (!is_page() && !bb_hasPostSidebar() )) {
				if ((get_theme_mod( 'big_bob_background_header_space', 'Off' ) == 'On') 
					&& is_front_page() && !is_paged() && !has_custom_header()
                	&& (wp_get_attachment_url($bb_backVid)  || wp_get_attachment_url($bb_backImg))) {
					?>
					<nav id="site-navigation" class="main-navigation bb-reduce-nav-max-width bb-fixed-top">
					<?php
				} else {
					?>
					<nav id="site-navigation" class="main-navigation bb-reduce-nav-max-width bb-fixed-top bb-top-nav-margin">
					<?php
				}
		} else {
			if ((get_theme_mod( 'big_bob_background_header_space', 'Off' ) == 'On') 
				&& is_front_page() && !is_paged() && !has_custom_header()
				&& (wp_get_attachment_url($bb_backVid)  || wp_get_attachment_url($bb_backImg))) {
				?>
				<nav id="site-navigation" class="main-navigation bb-fixed-top">
				<?php
			} else {
				?>
				<nav id="site-navigation" class="main-navigation bb-fixed-top bb-top-nav-margin">
				<?php
			}
		}	
    }
	?>
			<div class="bb-navSqueeze">
			<?php
			$custom_logo_id = get_theme_mod( 'custom_logo' );
			$logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
            $hasLogo = true;//also refers to the absence of a title and tagline
			if ( has_custom_logo() ) {
				if (get_theme_mod( 'big_bob_title_below_nav', 'Off' ) != 'Logo Below Nav') {
					the_custom_logo();
				} else {
					//the logo will be written down below
				}
			} else if (display_header_text() && (get_theme_mod( 'big_bob_title_below_nav', 'Off' ) == 'Off')) {
				$hasLogo = false;//there is not a logo or there is a title and tagline
				?>
				<div class="custom-logo-link">
					<h1 id="bb-site-title-top" class="bb-site-title-top"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
					<?php
					$big_bob_description = get_bloginfo( 'description', 'display' );
					if ($big_bob_description && (get_theme_mod( 'big_bob_center_nav_with_tagline', 'Off' ) == 'On')) :
						?>
						<p id="bb-site-description-top" class="bb-site-description-top"><?php echo esc_html($big_bob_description); ?></p>
				</div>
				<?php endif;
				if (!$big_bob_description || (get_theme_mod( 'big_bob_center_nav_with_tagline', 'Off' ) == 'Off')) :  
					?>
				</div>
				<?php endif;
			}
			$big_bob_description = get_bloginfo( 'description', 'display' );
			if ((!$big_bob_description || (get_theme_mod( 'big_bob_center_nav_with_tagline', 'Off' ) == 'Off')) && !has_custom_logo()) :  
				?>
			<div id="bb-toggle" class="bb-toggle-no-descrip-no-logo">
			<?php
			else :
			?>
			<div id="bb-toggle">
			<?php
			endif;
			?>
				<img id="bb-menu-icon" src="<?php echo esc_url(get_template_directory_uri())?>/image/menu-24px.svg" alt="Menu" />
				<img id="bb-close-icon" src="<?php echo esc_url(get_template_directory_uri())?>/image/close-24px.svg" alt="Close" />
			</div>
			<a id="bb-in" href="#"></a>
			<div id="bb-popout">
				<?php 
					$big_bob_description = get_bloginfo( 'description', 'display' );
					if ((!$big_bob_description || (get_theme_mod( 'big_bob_center_nav_with_tagline', 'Off' ) == 'Off')) && !has_custom_logo()):
						wp_nav_menu( 
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class' => 'nav-menu bb-no-descrip-no-logo' 
								) 
							); 
					else:
						wp_nav_menu( 
							array(
								'theme_location' => 'menu-1',
								'menu_id'        => 'primary-menu',
								'menu_class' => 'nav-menu' 
								) 
							); 
					endif;
					?>
			</div>
			<a id="bb-out" href="#"></a>
			</div><!--bb-navSqueeze-->
		</nav><!-- #site-navigation -->
		<?php
		if (get_theme_mod( 'big_bob_big_header_image', 'On' ) == 'On') {
            ?>
			<div id="custom-header-markup" class="bb-bigHeaderImage">
		<?php
		} else {
            ?>
			<div id="custom-header-markup">
		<?php
        }
		if (is_front_page() && !is_paged()) :
			if (has_custom_header() && !has_header_video() && (get_theme_mod( 'big_bob_media_to_background', 'On' ) == 'Off') && (get_theme_mod( 'big_bob_big_header_image', 'Off' ) == 'On') ):
				?>
				<div class="wp-custom-header" style="background-image: url('<?php echo esc_url( get_header_image() ); ?>'); background-position: center center; background-size: cover;"></div>
				<?php
			else :
			the_custom_header_markup();
			endif;
		endif;	
			$custom_header = get_custom_header_markup();
				if ( empty( $custom_header ) && display_header_text() && is_front_page() && !is_paged() && !$hasLogo ) :
				?>
					<div class="wp-custom-header"></div>
					<div class="top-padding bb-top-padding"></div>
				<?php
				endif;
				if ( empty( $custom_header ) && display_header_text() && is_front_page() && !is_paged() && $hasLogo ) :
					?>
						<div class="wp-custom-header"></div>
					<?php
				endif;
				if ( empty( $custom_header ) && !display_header_text() && is_front_page() && !is_paged() ) :
					?>
						<div class="wp-custom-header"></div>
						<div class="top-padding bb-top-padding"></div>
					<?php
				endif;
				if (( (has_post_thumbnail() && (get_theme_mod( 'big_bob_highlight_feature_image', 'Featured Images Only' ) == 'Featured Images Only')) || (get_theme_mod( 'big_bob_highlight_feature_image', 'Featured Images Only' ) == 'On')) && (!is_front_page() && (is_page() || is_single()) )) :
					?>
					<div class="wp-custom-header bb-highlight-featured-image"></div>
					<?php
				endif;
		?>
		</div><!--custom-header-markup-->
		<?php
		if (!is_front_page() || is_paged() || (is_front_page() && display_header_text()) ) :
		?>
		<div class="site-branding">
			<?php
			if ($hasLogo && is_front_page() && display_header_text() && !is_paged()) :
				if ((get_theme_mod( 'big_bob_title_below_nav', 'Off' ) == 'Logo Below Nav') && has_custom_logo()) :
                    the_custom_logo();
				else :
				?>
				<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
				<?php
				endif;
			elseif ((get_theme_mod( 'big_bob_highlight_feature_image', 'Featured Images Only' ) == 'Off') || !(( (has_post_thumbnail() && (get_theme_mod( 'big_bob_highlight_feature_image', 'Featured Images Only' ) == 'Featured Images Only')) || (get_theme_mod( 'big_bob_highlight_feature_image', 'Featured Images Only' ) == 'On')) && !is_front_page() && (is_page() || is_single()) )) :
				?>
				<div class="top-padding bb-top-padding"></div>
				<?php
			endif;
			$big_bob_description = get_bloginfo( 'description', 'display' );
			if ($hasLogo && is_front_page() && display_header_text() && !is_paged() && $big_bob_description ) :
				if (get_theme_mod( 'big_bob_title_below_nav', 'Off' ) == 'Small Tagline Only') :
				?>
				<p class="site-description bb-big_descrip_small_text"><?php echo esc_html($big_bob_description); ?></p>
				<?php 
				else :
				?>
				<p class="site-description"><?php echo esc_html($big_bob_description); ?></p>
				<?php endif;
			endif;
			if (((get_theme_mod('big_bob_page_titles', 'Featured Images Only') == 'On') || (has_post_thumbnail() && (get_theme_mod('big_bob_page_titles', 'Featured Images Only') == 'Featured Images Only')) || is_single()) && ( (has_post_thumbnail() && (get_theme_mod( 'big_bob_highlight_feature_image', 'Featured Images Only' ) == 'Featured Images Only')) || (get_theme_mod( 'big_bob_highlight_feature_image', 'Featured Images Only' ) == 'On')) && !is_front_page() && (is_page() || is_single()) ) :
				?>
				<h1 class="bb-page-or-post-title"><?php echo esc_html(get_the_title()); ?></h1>
			<?php endif; ?>
		</div><!-- .site-branding -->
		<?php
		endif;
		if ((is_front_page() && !is_paged()) || (( (has_post_thumbnail() && (get_theme_mod( 'big_bob_highlight_feature_image', 'Featured Images Only' ) == 'Featured Images Only')) || (get_theme_mod( 'big_bob_highlight_feature_image', 'Featured Images Only' ) == 'On')) && !is_front_page() && (is_page() || is_single()) )) :
			?>
			<a id="bb-scroll-down" href="#bb-after-header" class="btn btn-light btn-lg bb-scroll-down" role="button"><i class="fas fa-chevron-down"></i></a>
		<?php endif; ?>
		</div><!--cutom-header-->
	</header><!-- #masthead -->
	<div id="bb-after-header"></div>
