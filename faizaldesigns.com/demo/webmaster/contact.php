<?php include('head.php');?>

<?php $allvalues=$obj->contact('tbl_contact','id','DESC',1,1);  ?> 

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
                                <?php if($_SESSION['msg']!=''){?>
                                        <div class="alert alert-success alert-dismissable">
    <a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
   <?=$_SESSION['msg']?>
  </div>
  <?php $_SESSION['msg']=''; } ?>


   <div class="col-md-12 m-b-20">
                                        <h4 class="m-b-20 header-title"><b>FILTER YOUR ENQUIRY</b></h4>
                                       

                           <form role="form" name="form1" action="contact.php" method="get"  >
                                        
                                     
                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">FROM DATE</label>
                                                <input type="date" class="form-control" id="exampleInputEmail1" name="f_date"  value="<?=$_GET['f_date']?>"  >
                                            </div>

                                             <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">TO</label>
                                                <input type="date" class="form-control" id="exampleInputEmail1" name="t_date"  value="<?=$_GET['t_date']?>"  >
                                            </div>


                                            <div class="form-group col-md-3">
                                                <label for="exampleInputEmail1">STATUS</label>
                                          <select class="form-control" id="exampleInputEmail1" name="status"   >
                                            
                                         <option value="">Choose</option>
                                          <option value="0">Waiting </option>
                                           <option value="1">Success</option>

                                          </select>
                                            </div>

                          <script type="text/javascript">document.form1.status.value="<?=$_GET['status']?>"</script>                  

                                             <div class="col-md-2" style="margin-top: 27px;">
                                             <label for="exampleInputEmail1">&nbsp;</label>
                                            <button type="submit" class="btn btn-primary">Search</button>
                                            </div>
                                            
                                             </form>
                                    </div>
   
              </div>

                        <div class="row p-t-50">
                            <div class="col-sm-12">
              
              
                                <div class="m-b-20 table-responsive">

                                    <h5>List of your Enquiry</h5>
                                    <p class="text-muted font-13 m-b-30">
                                       This list show your all Titles
                                    </p>
                  
                  

                                    <table 
                                           class="table table-striped table-bordered  nowrap" cellspacing="0"
                                           width="100%">
                                        <thead>
                                        <tr>
                                            <th>Sno</th>
                                            <th  width="7%">Date</th>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Mobile</th>
                                            <th>Message</th>
                                             <th>Training</th>
                                            <th>Status</th>
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
                                        <td><?=date("d-m-Y", strtotime($title['date']));?></td>
                                       <td><?=$title['name']?></td>
                                        <td><?=$title['email']?></td>
                                       <td><?=$title['mobile']?></td>
                                      
                                       <td><?=$title['msg']?></td>
                                       <td><?=$title['training']?></td>

                                       <?php if($title['status']==0){?>

                                       <td><a href="contact.php?mode=statusact&id=<?=$title['id']?>&status=1" style="background: #c14a4a;
    color: #fff;
    padding: 4px;
    border-radius: 3px;">Waiting</a></td>

    <?php } else {?>

       <td><a href="contact.php?mode=statusact&id=<?=$title['id']?>&status=0" style="background: #23b195;
    color: #fff;
    padding: 4px;
    border-radius: 3px;">Success</a></td>

    <?php } ?>
                                      
                                      <td>

  <a href="contact.php?mode=delete&id=<?=$title['id']?>&table=tbl_contact&re=contact.php"><button class="btn btn-primary"><i class="fa fa-trash-o" aria-hidden="true"></i></button></a></td>
                                                    
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
                            <strong>Tamil Puzhavan</strong> - Copyright &copy; 2018
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