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

?>
  
    <form class="form-group" style="margin-left: 20px" action=""  method="POST">
  
    <label for="exampleInputEmail1">Student's Name</label>
    <input type="text" class="form-control" name="student_name"  >
    <label >Student_id*</label>
    <input type="text" class="form-control" name="student_id" required >
    <label for="exampleInputEmail1">Father's name</label>
    <input type="text" class="form-control" name="father_name"  >
    <label >sem</label>
     <input type="text" name="sem"  class="form-control" >
    <label for="exampleInputEmail1">branch</label>
    <input type="text" class="form-control" name="branch" >
    <label for="exampleInputEmail1">dob</label>
    <input type="text" class="form-control" name="dob"  >
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" >
    <label for="exampleInputEmail1">email</label>
    <input type="email" class="form-control" name ="email"  >
    <label for="exampleInputEmail1">contact</label>
    <input type="text" class="form-control" name="mobile_num" >
    <label for="exampleInputEmail1">address</label>
    <input type="text" class="form-control" name="address" >
    <label for="exampleInputEmail1">category</label>
    <input type="text" class="form-control" name="category"  >
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>



 <?php

       if(isset($_POST['submit']))
       {

             if($_POST['father_name']){
              $q="UPDATE `student_registration` SET `father_name`=`$_POST[father_name]` WHERE `student_id` = '$_POST[student_id]' ";
             mysqli_query($conn,$q);
}
         
       }

   ?>
   <br>
   <hr>
   </form>

<?php
include "footer.php";
?>
   
