<?php include('head.php');?>

<?php $allvalues=$obj->allvalues('gallery_title','id','DESC',1,1);  ?> 

<?php $form=$obj->forms('gallery_title','id',$_GET['id']);?>

<style>
.ra
{
	width:120px;
	height:100px;
}

@media only screen and (max-width: 700px) {
    .ra {
       width: 89px;
    height: 77px;
    }
}

</style>

<script type="text/javascript">
var _validFileExtensions = [".jpg", ".jpeg", ".png", ".PNG"];    
function ValidateSingleInput(oInput) {
    if (oInput.type == "file") {
        var sFileName = oInput.value;
         if (sFileName.length > 0) {
            var blnValid = false;
            for (var j = 0; j < _validFileExtensions.length; j++) {
                var sCurExtension = _validFileExtensions[j];
                if (sFileName.substr(sFileName.length - sCurExtension.length, sCurExtension.length).toLowerCase() == sCurExtension.toLowerCase()) {
                    blnValid = true;
                    break;
                }
            }
             
            if (!blnValid) {
                alert("Sorry, " + sFileName + " is invalid, allowed extensions are: " + _validFileExtensions.join(", "));
                oInput.value = "";
                return false;
            }
        }
    }
    return true;
}
</script>
            <!-- Top Bar End -->


            <!-- Page content start -->
            <div class="page-contentbar">

                <!--left navigation start-->
                <?php include('menu.php');?>
                <!--left navigation end-->

                <!-- START PAGE CONTENT -->
                <div id="page-right-content">

                    <div class="container">

                          <?php if($_SESSION['msg']!=''){?>
                         <div class="alert alert-success alert-dismissible">
                       
    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
    <?=$_SESSION['msg']?>
  </div>
  <?php $_SESSION['msg']=''; } ?>
                        
                             <div class="row p-t-50">
                                    <div class="col-md-12 m-b-20">
                                        <h4 class="m-b-20 header-title"><b>Add Your Gallery title</b></h4>
                                       

                                        <form role="form" action="gallery_title.php" method="post"  enctype="multipart/form-data">
                                        
                                         <input type="hidden" name="mode" value="gallery_title">
                                        <?php if($_REQUEST['id']!='') {?>
                                       
                                        <input type="hidden" name="txthid" value="<?=$_REQUEST['id']?>">
                                       
                                         <?php }?>
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Title</label>
                                                <input type="text" class="form-control" id="exampleInputEmail1" name="title" placeholder="Title" value="<?=$form['title']?>" required autofocus>
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                <label for="exampleInputEmail1">Title image</label>
                                                <input type="file" class="form-control" id="exampleInputEmail1" name="image" onchange="ValidateSingleInput(this);" >
                                            </div>
                                            
                                            
                                             <div class="col-md-6">
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            </div>
                                            
                                            
                                          
                                        </form>
                                    </div>
									</div>

                        <div class="row p-t-50">
                            <div class="col-sm-12">
							
							
                                <div class="m-b-20 table-responsive">

                                    <h5>List of your title</h5>
                                    <p class="text-muted font-13 m-b-30">
                                       This list show your all Titles
                                    </p>
									
									

                                    <table id="datatable-responsive"
                                           class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th>Title</th>
                                            <th>Image</th>
                                            <th>Action</th>
                                            
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <?php 
										$i=0;
										foreach($allvalues as $title){
											$i++;  ?>
                                       <tr>
                                       <td><?=$i?></td>
                                       <td><?=$title['title']?></td>
                                       <td><img src="<?=$title['image']?>" class="ra"></td>
                                     
                                       <td><a href="gallery_title.php?id=<?=$title['id']?>"><button class="btn btn-primary"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
	
	<a href="gallery_title.php?mode=delete&id=<?=$title['id']?>&table=gallery_title&re=gallery_title.php"><button class="btn btn-primary"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a></td>
                                       
                                       </tr>
                                       
                                       <?php }?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>


                        
                        <!-- end row -->

                    </div>
                    <!-- end container -->

                    <div class="footer">
                        <div class="pull-right hidden-xs">
                            
                        </div>
                        <div align="center">
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