<?php
/**
 * Template for displaying the footer
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	
	
	
	
	
	
	
	
	
    <footer id="footer-widgets">
        <div class="container">

            <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-12 mb-lg-0 mb-4">
                    <aside class="widget widget_about">
                        <div class="footer-logo"><img src="<?php echo bloginfo('template_url');  ?>/assets/logo.jpg" alt=""></div>
                        <p><?php echo get_option('footerabout'); ?></p>
                        <ul class="widget-social">
                            <li><a href="<?php echo get_option('facebook_url'); ?>"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="<?php echo get_option('twitter_url'); ?>"><i class="fab fa-twitter"></i></a></li>
                            <li><a href="<?php echo get_option('instragram_url'); ?>"><i class="fab fa-google-plus-g"></i></a></li>
                        </ul>
                        
                    </aside>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-12 mb-lg-0 mb-4 hidden-xs">
                    <aside class="widget widget_links">
                        <h4 class="widget-title">Usefull Links</h4>
                        <ul>
                            <li><a href="<?php echo get_home_url(); ?>/"><i class="fas fa-angle-right"></i> Home</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/about-us/"><i class="fas fa-angle-right"></i> About Us</a></li>
                            <li><a href="<?php echo get_home_url(); ?>/product-services/"><i class="fas fa-angle-right"></i> Product & Services</a></li>
                            
							
                            <li><a href="<?php echo get_home_url(); ?>/contact-us/"><i class="fas fa-angle-right"></i> Contact Us</a></li>
                        </ul>
                    </aside>
                </div>
                
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <aside class="widget widget_contact">
                        <h4 class="widget-title">Contact information</h4>
                        <ul>
                          <!-- <li><i class="fas fa-map-marker"></i>
                            <p><?php echo get_option('address'); ?></p>
                            
                            
                            </li>-->
                            <li><i class="fas fa-envelope"></i><?php echo get_option('email'); ?></li>
                            <li><i class="fas fa-phone"></i><?php echo get_option('phone'); ?><br /></li>
                        </ul>
                        
                    </aside>
                </div>
            </div>

        </div>
    </footer>
 

    <section id="footer-copyright">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12 text-lg-left text-center mb-lg-0 mb-3 copyright-text"><p>Copyrights &copy; 2022 All Rights Reserved, Powered by Adavnced Bytez.</p></div>
                <div class="col-lg-6 col-12">
                    <ul class="text-lg-right text-center payment-method">
                        <li><a href="<?php echo get_home_url(); ?>/privacy/">Privacy</a></li>
                        <li><a href="<?php echo get_home_url(); ?>/term-conditions/">Terms & Conditions</a></li>
                    </ul>
                    <a href="#" class="scrollup boxed-btn"><i class="fas fa-arrow-up"></i></a>
                </div>
            </div>
        </div>
    </section>
    <!-- End: Footer Copyright
    ============================= -->
    
    <!-- Scripts -->
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/jquery-3.2.1.min.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/popper.min.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/bootstrap.min.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/jquery.sticky.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/owl.carousel.min.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/jquery.shuffle.min.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/jquery.counterup.min.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/wow.min.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/jquery.meanmenu.min.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/jquery.hoverdir.js"></script>

    <!-- Smooth Scroll -->
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/TweenMax.min.js"></script>
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/ScrollToPlugin.min.js"></script>
    
    <!-- Custom Script -->
    <script src="<?php echo bloginfo('template_url');  ?>/assets/js/custom.js"></script>
	
	<script>
		$(".main-menu").on('click','li',function(){
			// remove classname 'active' from all li who already has classname 'active'
			$(".main-menu li.active").removeClass("active"); 
			// adding classname 'active' to current click li 
			$(this).addClass("active"); 
		});
	</script>

<?php
	/*
	 * Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</body>
</html>
