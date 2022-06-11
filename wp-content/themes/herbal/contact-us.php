 
 
 <?php
/**
 * Template Name: Contact Page
 *
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

   
    
    <section id="contact-info" class="section-padding-100">
        <div class="container">
            <div class="row">
               <!-- <div class="col-lg-4 col-md-4 col-sm-6 mb-md-0 mb-5 single-box text-center">
                    <img src="<?php echo bloginfo('template_url');  ?>/assets/img/green_locationl.png" alt="">
                    <h3>Address</h3>
                    <p><?php echo get_option('address'); ?></p>
                    
                   
                </div>-->
                <div class="col-lg-4 col-md-4 col-sm-6 mb-md-0 mb-5 single-box text-center">
                    <img src="<?php echo bloginfo('template_url');  ?>/assets/img/green_email.png" alt="">
                    <h3>E-mail</h3>
                    <p><?php echo get_option('email'); ?></p>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6 single-box text-center">
                    <img src="<?php echo bloginfo('template_url');  ?>/assets/img/green_phone.png" alt="">
                    <h3>Phone</h3>
                    <p><?php echo get_option('phone'); ?></p>
                </div>
            </div>
        </div>
    </section>

    
    <section id="send-message">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 order-2 order-md-2">
                   <div style="width: 100%"><iframe width="100%" height="300" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=100%25&amp;height=300&amp;hl=en&amp;q=Megha%20Plaza,%20GS%20Rd,%20Christian%20Basti,%20Guwahati,%20Assam%20781006+(Sanjay%20Sharma%20Herbal%20Company)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.gps.ie/marine-gps/">marine gps</a></iframe></div>
                </div>
                <div class="col-lg-6 col-md-6 order-md-2 order-sm-1 contact-us-form">
                    <h3>Send Us a Message</h3>
					
					
					<?php
							if(isset($_POST['submit']))
							{
													
								$subject="Contact Mail";    
								$headers="MIME-Version: 1.0\n"; 
								$headers.="Content-type: text/html; charset=iso-8859-1 \n"; 

													   
								$headers.="from:Contact<".$_POST['email'].">"; 
								$mail_body="<table cellpadding='0' cellspacing='0' border='0'><tr><td>Fullname:".$_POST['fullname']."</td></tr>";
								$mail_body.="<tr><td>E-mail:".$_POST['email']."</td></tr>";
								$mail_body.="<tr><td>Phone:".$_POST['phone']."</td></tr>";
								$mail_body.="<tr><td>Product Name:".$_POST['product']."</td></tr>";
								$mail_body.="<tr><td>Message:".$_POST['message']."</td></tr></table>";   
														
								$mail_to="rkumar@advancedbytez.net";

							if(@wp-mail($mail_to, $subject, $mail_body, $headers)) 
														
							{
								?>
								<script type="text/javascript">
									alert("Thank You! Your Message Has Been Sent Successfully");
								</script>
								<?php 
							} 
							else
							{
								print("<h1><font color=\"#880000\">Sorry! An Error Occurred While Sending Message. Please Try Again</font></h1>"); 
							}
						}

					?>
					
					
                    <form id="frmContact" method="POST" action="">
						<div class="row">
							<div class="col-lg-6 form-group">
								<input type="text" class="form-control" name="fullname" id="col1" placeholder="Your Name" required>
							</div>
							<div class="col-lg-6 form-group">
								<input type="email" class="form-control" name="email" id="col2" placeholder="Your Email" required>
							</div>
							<div class="col-lg-6 form-group">
								<input type="text" class="form-control" name="phone" id="col3" placeholder="Phone" required>
							</div>
							<div class="col-lg-6 form-group">
								<input type="text" class="form-control" name="product" id="col4" placeholder="Product Name" required>
							</div>
							<div class="col-sm-12 form-group">
								<textarea class="form-control" rows="3" name="message" id="col5" placeholder="Your Mesage" required></textarea>
							</div>
							<input type="submit" class="boxed-btn" style="height: 50px;" name="submit" value="Send Us a Message" />
						</div>
					</form>
					
					
					
                </div>
            </div>
        </div>
    </section>	
		
		
		
		
		

<?php get_footer(); ?>

