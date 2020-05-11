<?php include('header.php'); ?>
        <!--Start page-banner-->
        <section class="page-banner" style="background-image:url(images/resources/banner.jpg); background-size: cover;">
            <div class="container">
                <div class="content">
                    <h2>Contact us</h2>
                   
                </div>
                <ul class="breadcumb">
                    <li><a href="index">Home</a><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                    <li><a  class="active" href="javascript:void(0);">Contact us</a></li>
                </ul>
            </div>
        </section>
        <!--End page-banner-->


		
		
		 <section class="feature-style-three">
            <div class="container">         
                <div class="item-list">
                    <div class="row">
                       
                        
                        <div class="item">
                            <div class="column col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon fa fa-mobile"></span></div>
                                    <h3>Phone Number</h3>
                                    <div class="text"><p>+91 96885 79670, +91 86376 76192</p></div>
                                </div>
                            </div>
                        </div>
						
						 <div class="item">
                            <div class="column col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon fa fa-map-marker"></span></div>
                                    <h3>Location</h3>
                                    <div class="text"><p> No.19/13A, 7th Cross Street, Rajalakshmi Nagar, 
Velachery (100ft Road Near Erikkarai Bus Stop), Chennai-600 0426</p></div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="item">
                            <div class="column col-md-4 col-sm-6 col-xs-12">
                                <div class="inner-box">
                                    <div class="icon-box"><span class="icon fa fa-envelope-o"></span></div>
                                    <h3>E-Mail Us</h3>
                                    <div class="text"><p>marimuthuinchennai@gmail.com
</p></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

		<section class="contact_us">
			<div class="container">   
                <div class="sec-title text-center">
                    <h2>Contact  <span>Us</span></h2>
                </div>
                <div class="default-form-area col-sm-6">
					<form  class="default-form" action="mail2.php" method="post">
						<div class="row clearfix">
							<div class="col-md-6 col-sm-6 col-xs-12">

                                <input type="hidden" name="date" value="<?=date('Y-m-d')?>">
												
								<div class="form-group style-two">
									<input type="text" name="name" class="form-control" value="" placeholder="Name" required="">
								</div>
							</div>
							<div class="col-md-6 col-sm-6 col-xs-12">
								<div class="form-group style-two">
									<input type="email" name="email" class="form-control required email" value="" placeholder="Email" required="">
								</div>
							</div>
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<input type="text" name="mobile" class="form-control" value="" placeholder="Phone">
								</div>
							</div>	
							<div class="col-md-12 col-sm-12 col-xs-12">
								<div class="form-group style-two">
									<textarea name="msg" class="form-control textarea required" placeholder="Your Message"></textarea>
								</div>
							</div>   											  
						</div>
						<div class="contact-section-btn text-center">
							<div class="form-group style-two">
							
								<button class="thm-btn thm-color" type="submit" data-loading-text="Please wait...">send message</button>
							</div>
						</div> 
					</form>
				</div>  

<div class="col-sm-6">
<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15551.134233572864!2d80.218891!3d12.985691!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xac29b72529ac7829!2sZerobug+academy%3A+AWS+Training+%7C+Python+%7C+JAVA+%7C+PHP!5e0!3m2!1sen!2sin!4v1529195662100" width="100%" height="370" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>				
			</div>
		</section>

	

<?php include('footer.php'); ?>

