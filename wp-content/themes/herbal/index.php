<?php
 /* Template name:  Home */

get_header(); ?>

		
		
		
		
	<header>
        <div class="row">
            <div class="col-md-12">
                <div class="header-slider">
					
					<?php
							$args = array( 
															  
							'post_type' => 'slider', 
							'post_status' => 'publish',                // - post is in trashbin (available with Version 2.9).
							'order' => 'ASC',                      //(string) - Designates the ascending or descending order of the 'orderby' parameter. Defaultto 'DESC'.
							'orderby' => 'date',                    //(string) - Sort retrieved posts by parameter. Defaults to 'date'.
							);
																
							$the_query = new WP_Query( $args );
							// The Loop
							if ( $the_query->have_posts() ) :
							while ( $the_query->have_posts() ) : $the_query->the_post();
						?>
					<div class="header-single-slider">
                        <figure style="margin-bottom: 0;">
                            <img src="<?php the_post_thumbnail_url(array(1349*241)); ?>" alt="Advanced Bytez">
                            <figcaption>
                                <div class="content">
                                    <div class="container inner-content text-left">
                                         <h1><span><?php the_title(); ?></span></h1>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </figcaption>
                        </figure>
                    </div>
					<?php
							endwhile;
							endif;
						?>
                  
                    
                    
                </div>
            </div>
        </div>
    </header>

    
	

    <!-- Start: About US
    ============================= -->
    <section id="about-us" class="mysection-padding-top" style="padding: 38px 0 45px; background: #f5f9ec;">
        <div class="container">
            
			<?php $the_query = new WP_Query( 'page_id=6' ); ?>
				<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
				<?php the_content(); ?>
				 <?php endwhile;?>
			
        </div>
    </section>
   
        <section id="ourfeatures" class="section-padding" style="background: #c3e096;">
        <div class="container">            
            <div class="row">
                <div class="col-lg-12 col-md-12 col-12">                    
                    <div class="section-title" style="margin-bottom: 14px;">
                        <h2 style="color: #355406; text-shadow: 0px 1px 1px #1b1a1a;"><img src="<?php echo bloginfo('template_url');  ?>/assets/img/leaf-5.png" width="50">Our Features </h2>
                        
                    </div>
                </div>
            </div>

            <div class="row">
				
				
              <?php echo get_option('features'); ?>


            </div>
        </div>
    </section>
    

    <section id="latest-projects" class="section-padding project-masonary" style="padding-bottom: 30px; background: #f5f9ec;">
        <div class="container">
            
			<?php echo get_option('herbal'); ?>
			
           <div class="col-12 more-load">
                    <a class="load-btn boxed-btn" href="product_services.html"><span id="feature-ti-port-load" class="ti-port-load-hide"></span>Load More <i class="fas fa-angle-down"></i></a>
                </div> 
        </div>
    </section>

   

    <section id="projects-fututre" class="section-padding">
        <div class="container">
            <div class="row">
          
				<?php echo get_option('homeremotesensing'); ?>
		  
                <div class="col-md-6 col-sm-12">
                    <div class="projects-mockup">
                        <img src="<?php echo bloginfo('template_url');  ?>/assets/img/f.png" alt="Sanjay Sharma Herbal Company" style="width: 357px;">
                    </div>
                </div>
            </div>
            
        </div>
    </section>


        <section id="" style="padding: 40px 0; background: #f5f9ec">
        <div class="container">
		<div class="row">
                <div class="col-lg-12 col-md-12 col-12">                    
                    <div class="section-title">
                        <h2 style="color: #355406; text-shadow: 0px 1px 1px #1b1a1a;"><img src="<?php echo bloginfo('template_url');  ?>/assets/img/leaf-5.png" width="50"> Our Clients</h2>
                        <p><p><?php echo get_option('hour'); ?></p>
</p>
                    </div>
                </div>
            </div>
           

        </div>
    </section>
    
	
	
	
	
	
	

<?php get_footer(); ?>
