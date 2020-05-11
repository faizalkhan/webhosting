<?php include('header.php'); ?>
        <!--Start page-banner-->
        <section class="page-banner" style="background-image:url(images/resources/banner.jpg); background-size: cover;">
            <div class="container">
                <div class="content">
                    <h2>Blog</h2>
                   
                </div>
                <ul class="breadcumb">
                    <li><a href="index">Home</a><i class="fa fa-chevron-right" aria-hidden="true"></i></li>
                    <li><a  class="active" href="javascript:void(0);">Blog</a></li>
                </ul>
            </div>
        </section>
        <!--End page-banner-->

		<?php $form=$obj->forms('tbl_blog','id',$_GET['id']);?>

<div class="sidebar-page">
			<div class="container">
				<div class="row clearfix">            	
					<!--Content Side-->	
					<div class="col-md-8 col-sm-12 col-xs-12">
						                                             
							<!--Blog Post-->
							<article class="single-blog-post style-two">
								<div class="post-inner">
									<div class="image-box">
										<figure><a href="javascript:void(0);""><?php if($allval['b_image']!=''){?><img src="webmaster/<?=$form['b_image']?>" alt=""><?php } else {?><img src="myimage.jpg"><?php } ?></a></figure>
									</div>
									<div class="post-header">
										<h2><a href="#"><?=$form['b_name']?></a></h2>
										<ul class="post-info">
											<li><span class="fa fa-user"></span>&ensp; by Admin</li>
											<li><span class="fa fa-calendar-check-o"></span>&ensp; <?=date("d / m / Y", strtotime($form['b_date']));?>  </li>
										
										</ul>
									</div>
									<div class="post-desc">


										<div class="text"><p><?=$form['b_content']?></p></div>
										
									
									 
									</div>
									
								</div>
							</article>
				                                                 
						
					</div>
			               
					<!--Content Side-->
					<?php include('side-manu2.php'); ?>                          
				</div>
			</div>
		</div>
    		
	

<?php include('footer.php'); ?>

