<?php
include "connection.php";
include "upper.php";
if(!isset($_SESSION["admin_name"]))
{
    
  ?>
  <script type="text/javascript">
    window.location = "login.php";
  </script>
  <?php
}

$id = $_GET["id"];
$sql = "SELECT * FROM `student_registration`,`grade_sem`,`student_info` WHERE `student_registration`.`student_id` = $id AND `grade_sem`.`student_id` = $id AND `student_info`.`student_id` = $id" ;
$res = mysqli_query($conn, $sql);
$row = mysqli_fetch_array($res);

?>
       <div class="row">
                    <!-- Column -->
                    <div class="col-lg-4 col-xlg-3 col-md-5">
                        <!-- Column -->
                        <div class="card">
                            <img class="card-img-top" src="assets/images/background/profile-bg.jpg"
                                alt="Card image cap">
                            <div class="card-body little-profile text-center">
                                <div class="pro-img"><img src="assets/images/users/<?php echo $row["img"]; ?>" alt="user"></div>
                                <h3 class="mb-0"><?php echo $row["name"]; ?></h3>
                                <p>Web Designer &amp; Developer</p>
                                <a href="#"
                                    class="m-t-10 waves-effect waves-dark btn btn-primary btn-md btn-rounded"><?php echo $id; ?></a>
                                <div class="row text-center m-t-20">
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light"><?php echo $row["category"]; ?></h3><small>category</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light"><?php echo $row["branch"]; ?></h3><small>Branch</small>
                                    </div>
                                    <div class="col-lg-4 col-md-4 m-t-20">
                                        <h3 class="m-b-0 font-light"><?php echo $row["cpi"]; ?></h3><small>CPI</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Column -->
                        
                    </div>
                    <div class="col-lg-8 col-xlg-9 col-md-7">
                        <div class="card">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs profile-tab" role="tablist">
                               
                                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#profile"
                                        role="tab">Profile</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#settings"
                                        role="tab">Update profile</a>
                                </li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                
                                       
                                <!--second tab-->
                                <div class="tab-pane active" id="profile" role="tabpanel">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Full Name</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $row["name"]; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Mobile</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $row["mobile_num"]; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6 b-r"> <strong>Email</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $row["email"]; ?></p>
                                            </div>
                                            <div class="col-md-3 col-xs-6"> <strong>Address</strong>
                                                <br>
                                                <p class="text-muted"><?php echo $row["address"]; ?></p>
                                            </div>
                                        </div>
                                        <hr>
                                        
                                        <div class="form-group">
                                                <label class="col-md-12">Message</label>
                                                <div class="col-md-12">
                                                    <textarea rows="3"
                                                        class="form-control form-control-line pl-0"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success text-white">Send Message</button>
                                                </div>
                                            </div>
                                        
                                        
                                    </div>
                                </div>
                                <div class="tab-pane" id="settings" role="tabpanel">
                                    <div class="card-body">
                                        <form class="form-horizontal form-material" method="post">
                                            <div class="form-group">
                                                <label class="col-md-12">Full Name</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="name"placeholder="<?php echo $row["name"]; ?>"
                                                        class="form-control form-control-line pl-0">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label for="example-email" class="col-md-12">Email</label>
                                                <div class="col-md-12">
                                                    <input type="email" name="email" placeholder="<?php echo $row["email"]; ?>"
                                                        class="form-control form-control-line pl-0" name="example-email"
                                                        id="example-email">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Semester</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="sem" placeholder="<?php echo $row["sem"]; ?>" 
                                                        class="form-control form-control-line pl-0">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Contact</label>
                                                <div class="col-md-12">
                                                    <input type="text" name="mobile_num" placeholder="<?php echo $row["mobile_num"]; ?>"
                                                        class="form-control form-control-line pl-0">
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-md-12">Address</label>
                                                <div class="col-md-12">
                                                    <textarea rows="3" name="address"
                                                        class="form-control form-control-line pl-0"></textarea>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <label class="col-sm-12">Select Category</label>
                                                <div class="col-sm-12">
                                                    <select class="form-control form-control-line pl-0" name="category">
                                                        <option>Genral</option>
                                                        <option>Genral[EWS]</option>
                                                        <option>OBC</option>
                                                        <option>SC</option>
                                                        <option>ST</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-12">
                                                    <button class="btn btn-success text-white" name="submit">Update Profile</button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
        </div> 
       <?php
       if(isset($_POST['submit']))
       {
        $sql="UPDATE `student_registration` SET `name`=`$_POST[name]`,`email`=`$_POST[email]`,`sem`=`$_POST[sem]`,`mobile_num`=`$_POST[mobile_num]`,`address`=`$_POST[address]`,`category`=`$_POST[category]`, WHERE `student_id`=`$id`";
          mysqli_query($conn,$sql);
       }
       ?>



<?php
include "footer.php";
?>