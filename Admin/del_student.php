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
<br>
<br>
<form class="form-group" style="margin-left: 20px" action=""  method="POST">
	 <label for="exampleInputEmail1">Student's Name</label>
    <input type="text" class="form-control" name="student_name"  >
    <label >Student_id*</label>
    <input type="text" class="form-control" name="student_id" required >
    <br>
        <button type="submit" class="btn btn-primary" name="submit">Submit</button>

</form>
<?php
if(isset($_POST['submit']))
{
   $sql="DELETE FROM `student_registration`,`grade_course`,`fees`,`grade_sem`,`attendance` WHERE `student_id`= $_POST[student_id]";
   mysqli_querry($conn,$sql);

}
?>

<?php
include "footer.php";
?>
