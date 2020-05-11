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

                 <?php $allvalues=$obj->allvalues('tbl_blog','id','DESC',1,1);  ?> 

<div class="sidebar-page">
			<div class="container">
				<div class="row clearfix">            	
					<!--Content Side-->	
					<div class="blog-post style-2 col-md-8 col-sm-12 col-xs-12">
						<div class="blog-grid style-2">	
							<div class="item-list">
								<div class="row">


							<?php foreach ($allvalues as $allval) { ?>
									
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="item hvr-float-shadow">
											<figure class="image-box">
												<a href="blog-in?id=<?=$allval['id']?>"><?php if($allval['b_image']!=''){?><img src="webmaster/<?=$allval['b_image']?>"><?php } else {?><img src="myimage.jpg"><?php } ?></a>
											</figure>
											<div class="content-box">
												<div class="date">
													<h5><?=date("d", strtotime($allval['b_date']));?></h5>
													<p><?=date("M", strtotime($allval['b_date']));?></p>
												</div>
												<ul class="admin-comments">
													<li><i class="fa fa-user"></i>by Admin</li>
													<li><i class="fa fa-calendar-check-o"></i><?=date("d / m / Y", strtotime($allval['b_date']));?></li>
												</ul>						
												<h4><a href="blog-in?id=<?=$allval['id']?>"><?=$allval['b_name']?></a></h4>
												
												<p><?=substr($allval['b_content'],0,130)?>....</p>
												
											</div>						
																	
										</div>
									</div>	

								<?php } ?>
	


									
									
								</div>
							</div>
						</div>	
			
						<!--<ul class="page_pagination">
		                    <li><a href="#" class="tran3s"><i class="fa fa-angle-left" aria-hidden="true"></i></a></li>
		                    <li><a href="#" class="active tran3s">1</a></li>
		                    <li><a href="#" class="tran3s">2</a></li>
		                    <li><a href="#" class="tran3s">3</a></li>
		                    <li><a href="#" class="tran3s"><i class="fa fa-angle-right" aria-hidden="true"></i></a></li>
		                </ul>-->

					</div>
					<!--Content Side-->
					<?php include('side-manu2.php'); ?>                           
				</div>
			</div>
		</div>
    		
	

<?php include('footer.php'); ?>

