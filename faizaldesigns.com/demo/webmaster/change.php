<?php include('head.php');?>


            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <?php include('menu.php');?>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">
                        
                             <div class="row p-t-50">
                             
                             
                                    <div class="col-md-6 m-b-20">
                                    <?php if($_REQUEST['res']!=''){ ?>
                                    <div class="alert alert-success alert-dismissible fade in" role="alert">
                                                <button type="button" class="close" data-dismiss="alert"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                                <?=$_REQUEST['res']?>
                                                
                                            </div>
                                            <?php }?>
                                        <h4 class="m-b-20 header-title"><b>Change password</b></h4>
                                       

                                        <form role="form" action="change.php" method="post"  enctype="multipart/form-data">
                                              <input type="hidden" name="change" value="pass">
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">Old password</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="opass" placeholder="Old password"  required >
                                            </div>
                                            <div class="form-group">
                                                <label for="exampleInputEmail1">New password</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="npass" placeholder="New password"  required >
                                            </div>
                                            
                                            
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                        </form>
                                    </div>
									</div>

                        


                        
                        <!-- end row -->

                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            Project Completed <strong class="text-custom">39%</strong>.
                        </div>
                        <div>
                            <strong>Webbitech</strong> - Copyright &copy; 2017
                        </div>
                    </div> <!-- end footer -->

                </div>
                <!-- End #page-right-content -->

            </div>
            <!-- end .page-contentbar -->
        </div>
        <!-- End #page-wrapper -->



        <!-- js placed at the end of the document so the pages load faster -->
        <?php include('tail.php');?>