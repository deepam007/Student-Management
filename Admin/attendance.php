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

<div class="x_content">
    <form name="form1" action="" method="post">
        <table>
            <tr>
                <td class="col-lg-1">
                    <select name="enr" class="form-control selectpicker">
                       <?php
                         $sql = "SELECT * FROM `student_registration` ORDER BY `student_registration`.`student_id` ASC";
                         $result = mysqli_query($conn, $sql);
                         while($row = mysqli_fetch_array($result))
                         {
                           echo "<option>";
                           echo $row["student_id"];
                           echo "</option>";
                         }
                       ?>    
                   </select>
               </td>
               <td>
                   <input type="submit" name="submit1" value="search" class="form-control btn btn-default" style="margin-top: 0px; margin-right: 105px">
               </td>
           </tr>
       </table><br>

    
       <table >
       <tr class="d-inline p-3">
                <td>
                <label for="exampleFormControlSelect1" style="margin-left: 20px"><!-- \\ course-: \\ --></label>
                <select class="btn btn-danger dropdown-toggle" name="course_id" id="exampleFormControlSelect1">
                 <?php    
                         $sql = "SELECT * FROM `courses` ORDER BY `courses`.`course_id` ASC";
                         $result = mysqli_query($conn, $sql);
                         while($row = mysqli_fetch_array($result))
                         {
                           echo "<option>";
                           echo $row['course_id'];
                           echo "</option>";
                         } 
				         ?>
                </select>
               </td>
               <td>
                   <input type="submit" name="submit2" value="search" class="form-control btn btn-default" style="margin-top: 0px; margin-left: 15px">
               </td>
        </tr>
       </table><br>
	   
	   <?php
	   if(isset($_POST['submit2']))
	   {
		  $sql = "SELECT * FROM `attendance` WHERE `course_id` = '$_POST[course_id]'; 
      ";
       $result = mysqli_query($conn , $sql);
        
        echo "<table class='table table-bordered'>";
        echo "<tr>"; 
        echo "<th>"; echo "Student_id"; echo "</th>";
        echo "<th>"; echo "Branch"; echo "</th>";
        echo "<th>"; echo "Course_id"; echo "</th>";
        echo "<th>"; echo "total class"; echo "</th>";
        echo "<th>"; echo "attended class"; echo "</th>";
        echo "<th>"; echo "attendance"; echo "</th>";
        echo "<th>"; echo "status"; echo "</th>";
        echo "</tr>";


       while($row = mysqli_fetch_array($result))
       {
           echo "<tr>";
              echo "<td>"; echo $row["student_id"]; echo "</td>";
              echo "<td>"; echo $row["branch"]; echo "</td>";
              echo "<td>"; echo $row["course_id"]; echo "</td>";
              echo "<td>"; echo $row["total_classes"]; echo "</td>";
              echo "<td>"; echo $row["attended_classes"]; echo "</td>";
              echo "<td>"; echo $row["attendane_percentage"]; echo "</td>";
              echo "<td>"; echo $row["status"]; echo "</th>";
           echo "</tr>";
       }
                  echo "</table>";

	   }
	   
	   
	   ?>
      <?php
     if(isset($_POST['submit1']))
     {
      $sql = "SELECT * FROM `attendance` WHERE `student_id` = '$_POST[enr]'";
       $result = mysqli_query($conn , $sql);
        
        echo "<table class='table table-bordered'>";
        echo "<tr>"; 
        echo "<th>"; echo "Student_id"; echo "</th>";
        echo "<th>"; echo "Branch"; echo "</th>";
        echo "<th>"; echo "Course_id"; echo "</th>";
        echo "<th>"; echo "total class"; echo "</th>";
        echo "<th>"; echo "attended class"; echo "</th>";
        echo "<th>"; echo "attendance"; echo "</th>";
        echo "<th>"; echo "status"; echo "</th>";
        echo "</tr>";


       while($row = mysqli_fetch_array($result))
       {
           echo "<tr>";
              echo "<td>"; echo $row["student_id"]; echo "</td>";
              echo "<td>"; echo $row["branch"]; echo "</td>";
              echo "<td>"; echo $row["course_id"]; echo "</td>";
              echo "<td>"; echo $row["total_classes"]; echo "</td>";
              echo "<td>"; echo $row["attended_classes"]; echo "</td>";
              echo "<td>"; echo $row["attendane_percentage"]; echo "</td>";
              echo "<td>"; echo $row["status"]; echo "</th>";
           echo "</tr>";
       }
                  echo "</table>";
     } 
     ?>

  </form>

<?php
include "footer.php";
?>