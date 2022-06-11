<?php
/**
 * Template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

	

	
	
	
    <section id="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1><?php the_title(); ?></h1>
                    <ul class="breadcrumb-nav list-inline">
                        <li><a href="<?php echo get_home_url(); ?>">Home</a></li>
                        <li class="active"><?php the_title(); ?></li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- End: Breadcrumb Area
    ============================= -->

    <!-- Start: About US
    ============================= -->
        <section id="about-us" class="my_section-padding-top">
        <div class="container">
            <div class="row">
            <?php
			/*
			 * Run the loop to output the page.
			 * If you want to overload this in a child theme then include a file
			 * called loop-page.php and that will be used instead.
			 */
			get_template_part( 'loop', 'page' );
			?>
            </div>
        </div>
    </section>
    
    <section id="what-we-do" class="section-padding">
        <div class="container">

            
        </div>
    </section>
   
   
	

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
