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
    ?><br><h1 style="margin-left:100px">Your Grades</h1><?php
		  $sql = "SELECT `name`,`grade_course`.`course_id`,`sem`,`grade_course`.`branch`,`marks`,`max_marks` FROM `courses`,`grade_course` WHERE `grade_course`.`student_id` = '$_SESSION[stroll]' AND `grade_course`.`course_id`=`courses`.`course_id`"; 
      
       $result = mysqli_query($conn , $sql);
        
        echo "<table class='table table-bordered'>";
        echo "<tr>"; 
        echo "<th>"; echo "SCourse Name"; echo "</th>";
        echo "<th>"; echo "Course_id"; echo "</th>";
        echo "<th>"; echo "sem"; echo "</th>";
        echo "<th>"; echo "branch"; echo "</th>";
        echo "<th>"; echo "marks"; echo "</th>";
        echo "<th>"; echo "max_marks"; echo "</th>";
     //   echo "<th>"; echo "status"; echo "</th>";
        echo "</tr>";

       while($row = mysqli_fetch_array($result))
       {
           echo "<tr>";
              echo "<td>"; echo $row["name"]; echo "</td>";
              echo "<td>"; echo $row["course_id"]; echo "</td>";
              echo "<td>"; echo $row["sem"]; echo "</td>";
              echo "<td>"; echo $row["branch"]; echo "</td>";
              echo "<td>"; echo $row["marks"]; echo "</td>";
              echo "<td>"; echo $row["max_marks"]; echo "</td>";
         //     echo "<td>"; echo $row["status"]; echo "</th>";
           echo "</tr>";
       }
                  echo "</table>";

	   
     ?>
      



<?php
include "footer.php";
?>