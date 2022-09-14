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
  
    <label for="exampleInputEmail1">Course Name</label>
    <input type="text" class="form-control" name="name"  >
    <label >Course_id*</label>
    <input type="text" class="form-control" name="course_id" required >
    <label >branch</label>
    <input type="text" class="form-control" name="branch" >
    <label >teacher</label>
     <input type="text" name="teacher"  class="form-control" >
    <label for="exampleInputEmail1">total Student</label>
     <input type="text" class="form-control" name="total_student" >
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


 <?php

       if(isset($_POST['submit']))
       {

  
             $sql="UPDATE `courses` SET `name`=`$_POST[name]`,`branch`=`$_POST[branch]`,`teacher`=`$_POST[teacher]`,`total_student`=`$_POST[total_student]`WHERE `course_id`=`$_POST[course_id]`";

            mysqli_query($conn, $sql);
       }

   ?>
   <br>
   <hr>
   

<?php
include "footer.php";
?>
   
