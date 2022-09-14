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


<?php

$course_id = $_GET["course_id"];
 $sql1 = "SELECT student_id FROM `grade_course` WHERE `course_id`= $course_id";
 $res = mysqli_query($conn , $sql1);


       echo "<table class='table table-bordered'>";
       echo "<tr>";       
       echo "<th>"; echo "Name"; echo "</th>";
       echo "<th>"; echo "student_id"; echo "</th>";
       echo "<th>"; echo "branch"; echo "</th>";
       echo "<th>"; echo "sem"; echo "</th>";
       echo "<th>"; echo "email"; echo "</th>";
       echo "</tr>";

 while($row = mysqli_fetch_array($res))
 {
       $sql = "SELECT * FROM `student_info` WHERE `student_info`.`student_id` = $row[student_id]" ;
       $result = mysqli_query($conn, $sql);
       
        while($row = mysqli_fetch_array($result))
        {
           echo "<tr>";         
           echo "<td>"; echo $row["name"]; echo "</td>";
           echo "<td>"; echo $row["student_id"]; echo "</td>";
           echo "<td>"; echo $row["branch"]; echo "</td>";
           echo "<td>"; echo $row["sem"]; echo "</td>";
           echo "<td>"; echo $row["email"]; echo "</td>";
           echo "</tr>";
        }

   }
   echo "</table>";
?>



<?php
include "footer.php";
?>