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
  ?><br><h1 style="margin-left:100px">Your Attendance</h1><?php
$sql = "SELECT `name`,`courses`.`course_id`,`attended_classes`,`total_classes`,`attendane_percentage`,`status`FROM `courses`,`attendance` WHERE `attendance`.`student_id` = '$_SESSION[stroll]' AND `attendance`.`course_id`=`courses`.`course_id`";      
       $result = mysqli_query($conn , $sql);
        
        echo "<table class='table table-bordered'>";
        echo "<tr>"; 
        echo "<th>"; echo "Course Name"; echo "</th>";
        
        echo "<th>"; echo "Course_id"; echo "</th>";
        echo "<th>"; echo "total class"; echo "</th>";
        echo "<th>"; echo "attended class"; echo "</th>";
        echo "<th>"; echo "attendance"; echo "</th>";
        echo "<th>"; echo "status"; echo "</th>";
        echo "</tr>";


       while($row = mysqli_fetch_array($result))
       {
           echo "<tr>";
              echo "<td>"; echo $row["name"]; echo "</td>";
             
              echo "<td>"; echo $row["course_id"]; echo "</td>";
              echo "<td>"; echo $row["total_classes"]; echo "</td>";
              echo "<td>"; echo $row["attended_classes"]; echo "</td>";
              echo "<td>"; echo $row["attendane_percentage"]; echo "</td>";
              echo "<td>"; echo $row["status"]; echo "</th>";
           echo "</tr>";
       }
                  echo "</table>";

	   
     ?>
      



<?php
include "footer.php";
?>