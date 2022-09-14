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
    <br>
    <button type="submit" class="btn btn-primary" name="submit">Submit</button>
</form>


 <?php

       if(isset($_POST['submit']))
       {

  
             $sql="DELETE FROM `courses` WHERE `course_id`= $_POST[course_id]";
   

            mysqli_query($conn, $sql);
       }

   ?>
   <br>
   <hr>
   

<?php
include "footer.php";
?>
   
