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
<form >
<button type="submit" class="btn btn-primary" style="margin-left: 50px " name="submit"><a href="add_new_student.php" style="color: white">Add new student</a></button>
<button type="submit" class="btn btn-primary" name="submit"><a href="del_student.php" style="color: white"> Delete existing student</a></button>
<button type="submit" class="btn btn-primary" name="submit"><a href="update_student.php" style="color: white">Update student information</a></button>
<br><br><br>
<button type="submit" class="btn btn-primary" style="margin-left: 50px " name="submit"><a href="add_new_course.php" style="color: white">Add new course</a></button>
<button type="submit" class="btn btn-primary" name="submit"><a href="delete_course.php" style="color: white">Delete existing scourse</a></button>
<button type="submit" class="btn btn-primary" name="submit"><a href="update_course.php" style="color: white">Update course details</a></button>
</form>
<br>


<?php
include "footer.php";
?>
