<?php
/**
 * Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo bloginfo('template_url');  ?>/assets/img/favicon.png" type="image/x-icon" />
<title>
<?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
if ( $site_description && ( is_home() || is_front_page() ) ) {
	echo " | $site_description";
}

	// Add a page number if necessary:
if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() ) {
	echo esc_html( ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) ) );
}

	?>
	</title>
<link rel="profile" href="http://gmpg.org/xfn/11" />

	<link rel="stylesheet" href="<?php echo bloginfo('template_url');  ?>/assets/css/style.css">
    <link rel="stylesheet" href="<?php echo bloginfo('template_url');  ?>/assets/css/responsive.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url');  ?>/assets/css/all.css">
	<link rel="stylesheet" href="<?php echo bloginfo('template_url');  ?>/assets/css/widget.css">
<?php
	/*
	 * We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
if ( is_singular() && get_option( 'thread_comments' ) ) {
	wp_enqueue_script( 'comment-reply' );
}

	/*
	 * Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
</head>

<body>




    <div class="preloader">
        <div class="loader">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>

    <section id="header-top" class="hidden-xs">
        <div class="container">
            
            <div class="row">
                <div class="col-lg-9 col-md-12 text-lg-left mb-2 mb-lg-0">
                    <ul class="header-info d-inline-block">
                        <li><i class="fas fa-phone"></i><?php echo get_option('phone'); ?></li>
                        <li><i class="fas fa-envelope"></i><?php echo get_option('email'); ?></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-12 text-center text-lg-right mb-lg-0 mb-1">
                    <ul class="header-social d-inline-block">
                        <li><a href="<?php echo get_option('facebook_url'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="<?php echo get_option('twitter_url'); ?>"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="<?php echo get_option('instragram_url'); ?>"><i class="fab fa-google-plus-g"></i></a></li>
                    </ul>                    
                </div>
            </div>
        </div>
    </section>


    
    <section class="navbar-wrapper">
        <div class="navbar-area sticky-nav">
            <div class="container">
                <div class="row">
                    <div class="col-lg-2 col-6">
                        <div class="logo main">
                            <a href="<?php echo get_home_url(); ?>"><img class="responsive" src="<?php echo bloginfo('template_url');  ?>/assets/logo.jpg" alt="Sanjay Sharma Herbal Company" style="max-width: 150px;"></a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-md-10 d-none d-lg-block text-right">
                        <nav class="main-menu">
                            <ul>
                                <li class="active"><a href="<?php echo get_home_url(); ?>">Home</a></li>
                                <li class="c-dropdowns"><a href="<?php echo get_home_url(); ?>/about-us/">About Us</a>
									<ul class="cr-dropdown-menu mymegamenu">
                                        <li><a href="<?php echo get_home_url(); ?>/company-profile/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Company Profile</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/manufacturing/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Manufacturing</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/quality-control/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Quality Control</a></li>
                                    </ul>
								</li>
                                <li class="c-dropdowns">
                                    <a href="<?php echo get_home_url(); ?>/product-services/">Product & Services</a>
                                    <ul class="cr-dropdown-menu mymegamenu">
                                                                              
                                        <li><a href="<?php echo get_home_url(); ?>/hot-products/"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Hot Products</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/herbal-extracts/"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Herbal Extracts</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/essential-oils/"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Essential oils</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/oleoresins/"><i class="fa fa-angle-double-right" aria-hidden="true"></i>Oleoresins</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/phytochemicals/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Phytochemicals</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/production-facility/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Production Facilities</a></li>
                                    </ul>
                                </li>
								
								
                               

                                <li><a href="<?php echo get_home_url(); ?>/contact-us/">Contact Us</a></li>
                            </ul>
                        </nav>
                        <ul class="header-right-bar d-lg-inline-block d-none">
                            
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
			
			
            <div class="mobile-menu-area d-lg-none">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mobile-menu">
                                <nav class="mobile-menu-active">
                                    <ul>
                                        <li>
                                            <a href="<?php echo get_home_url(); ?>/">Home</a>
                                        </li>
                                        <li class="c-dropdowns"><a href="<?php echo get_home_url(); ?>/about-us/">About Us</a>
                                            <ul class="cr-dropdown-menu mymegamenu">
                                                <li><a href="<?php echo get_home_url(); ?>/profile/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Company Profile</a></li>
                                                <li><a href="<?php echo get_home_url(); ?>/manufacturing/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Manufacturing</a></li>
                                                <li><a href="<?php echo get_home_url(); ?>/quality-control/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Quality Control</a></li>
                                            </ul>
                                        </li>
                                        <li class="c-dropdowns">
                                            <a href="<?php echo get_home_url(); ?>/product-services/">Product & Services</a>
                                            <ul class="cr-dropdown-menu">
                                                <li><a href="<?php echo get_home_url(); ?>/hot-products/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Hot Products</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/herbal-extracts/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Herbal Extracts</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/essential-oils/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Essential oils</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/oleoresins/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Oleoresins</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/phytochemicals/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Phytochemicals</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/production-facility/"><i class="fa fa-angle-double-right" aria-hidden="true"></i> Production Facility</a></li>
                                            </ul>
                                        </li>
										
										<li><a href="<?php echo get_home_url(); ?>/certificate/">Certificate</a></li>
                                        <li><a href="<?php echo get_home_url(); ?>/contact-us/">Contact</a></li>
                                    </ul>
                                </nav>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>        
    </section>
    
    

	
	
	
	
	
	
