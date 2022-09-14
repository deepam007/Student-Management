<?php
include "connection.php";
include "upper.php";

if(!isset($_SESSION["stname"]))
{
  ?>
  <script type="text/javascript">
    window.location = "login.php";
  </script>
  <?php
}
?>
<?php
$id = $_GET["id1"];
$sql = "SELECT * FROM `student_registration`,`grade_sem`,`student_info` WHERE `student_registration`.`student_id` = $id AND `grade_sem`.`student_id` = $id AND `student_info`.`student_id` = $id" ;
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);
?>
    <!-- ============================================================== -->
    <!-- Preloader - style you can find in spinners.css -->
    <!-- ============================================================== -->
    
                <!-- Sidebar navigation-->
               
            <!-- End Sidebar scroll-->
            
            <!-- ============================================================== -->
            <!-- End Bread crumb and right sidebar toggle -->
            <!-- ============================================================== -->
            <!-- ============================================================== -->
            <!-- Container fluid  -->
            <!-- ============================================================== -->
            
                <!-- ============================================================== -->
                <!-- Start Page Content -->
                <!-- ============================================================== -->
                <!-- Row -->
                <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <div class="card">
                            <div class="card-body profile-card">
                                <center class="m-t-30"> <img src="assets/images/users/<?php echo $row["img"];
                                      ?> " class="rounded-circle" width="150" />
                                    <h4 class="card-title m-t-10"><?php echo $row["name"]; ?> </h4>
                                    <h6 class="card-subtitle">Web Designer &amp; Developer</h6>
                                    <a href="#" style="color: white"
                                    class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded"><?php echo $row["student_id"]; ?></a>

                                    <div class="row text-center m-t-20">
                                    
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light"><?php echo $row["branch"]; ?></h3><small>Branch</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 m-t-20" style="margin-left: 100px">
                                        <h3 class="m-b-0 font-light"><?php echo $row["cpi"]; ?></h3><small>CPI</small>
                                    </div>
                                </div>
                                </center>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                    <!-- Column -->
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <div class="card-body">
                                <form class="form-horizontal form-material">
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Full Name</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="<?php echo $row["name"]; ?>"
                                                class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="example-email" class="col-md-12">Email</label>
                                        <div class="col-md-12">
                                            <input type="email" placeholder="<?php echo $row["email"]; ?>"
                                                class="form-control pl-0 form-control-line" name="example-email"
                                                id="example-email">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Password</label>
                                        <div class="col-md-12">
                                            <input type="password" value="<?php echo $row["password"]; ?>"
                                                class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Phone No</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="<?php echo $row["mobile_num"]; ?>"
                                                class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Address</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="<?php echo $row["address"]; ?>"
                                                class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-md-12 mb-0">Category</label>
                                        <div class="col-md-12">
                                            <input type="text" placeholder="<?php echo $row["category"]; ?>"
                                                class="form-control pl-0 form-control-line">
                                        </div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                       
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <!-- Column -->
                </div>
                <!-- Row -->
                <!-- ============================================================== -->
                <!-- End PAge Content -->
                <!-- ============================================================== -->
                <!-- ============================================================== -->
                <!-- Right sidebar -->
                <!-- ============================================================== -->
                <!-- .right-sidebar -->
                <!-- ============================================================== -->
                <!-- End Right sidebar -->
                <!-- ============================================================== -->
            
    <!-- ============================================================== -->
    <!-- End Wrapper -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- All Jquery -->
    <!-- ============================================================== -->
    
<?php
include "footer.php";
?>
