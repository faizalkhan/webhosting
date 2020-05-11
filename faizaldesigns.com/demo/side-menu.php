	<!--Sidebar-->	
					<div class="col-md-4 col-sm-6 col-xs-12">
					<div class="jjhdsd wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
						<div class="sidebar-title">
									<h4 style="    margin-bottom: 20px;">QUICK ENQUIRY</h4>
								</div>
 <form action="mail.php" method="post">
 	<input type="hidden" name="date" value="<?=date('Y-m-d')?>">
    <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
      <input id="email" type="text" class="form-control" name="name" placeholder="Name *" required="">
    </div>
     <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
      <input id="email" type="text" class="form-control" name="mobile" placeholder="Phone No *" required="">
    </div>
	
	 <div class="input-group">
      <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
      <input id="email" type="text" class="form-control" name="email" placeholder="Email Address *" required="" >
    </div>
	
	<div style="margin-bottom:15px">
	<select class="selectpicker" name="training">
 <option value="Python Training">Python Training</option>
  <option value="AWS Training">AWS Training</option>
  <option value="Core JAVA And J2EE Training">Core JAVA And J2EE Training</option>
 
</select>
</div>
	
	<div class="form-group">
 
  <textarea class="form-control" rows="5" id="comment" name="msg"  placeholder="Enter your text here"></textarea>
</div>
	<button type="submit" class="thm-btn inverse" style="    width: 100%;
    text-align: center;">Send Now</button>
    
  </form>

  
					</div>	
					  <aside class="sidebar" style="    padding-left: 0;
    margin-top: 40px;"> 
  <!-- Popular Categories -->
							<div class="widget popular-categories wow fadeInUp" data-wow-delay="0ms" data-wow-duration="1500ms">
								<div class="sidebar-title">
									<h3>Training </h3>
								</div>

								<ul class="list">
									<li><a href="python-training"><span class="icon-left fa fa-chevron-right"></span>Python Training</a></li>
									<li><a href="net-training"><span class="icon-left fa fa-chevron-right"></span>.Net Training</a></li>
									
								</ul>
							</div>
							</aside>  
					
					
					</div>
					<!--Sidebar-->    