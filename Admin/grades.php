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
    <br>
        <table>
            <tr>
                <td class="col-lg-1">
                <input type="text" class="form-control" placeholder="Enter rollno" name="rollno">
               </td>
               <td>
                   <input type="submit" name="submit1" value="search" class="form-control btn btn-default" style="margin-top: 0px; margin-right: 105px">
               </td>
           </tr>
       </table>
       <br>

     
       <table >
       <tr class="d-inline p-3">
                <td>
                <label for="exampleFormControlSelect1" style="margin-left: 20px">\\ Semester-: \\</label>
                <select class="btn btn-danger dropdown-toggle" name="sem" id="exampleFormControlSelect1">
                  <?php
                   $sql = "SELECT DISTINCT sem FROM `grade_course`";
                   $result = mysqli_query($conn, $sql);
                   while($row = mysqli_fetch_array($result))
                   {
                     echo "<option>";
                     echo $row["sem"];
                     echo "</option>";
                   }
               ?>  
                </select>
                </td>
                <td>
                   <input type="submit" name="submit2" value="search" class="form-control btn btn-default" style="margin-top: 0px; margin-left: 15px">
               </td>
                <td>
                <label for="exampleFormControlSelect1" style="margin-left: 20px">\\ course-: \\</label>
                <select class="btn btn-danger dropdown-toggle" name="course_id" id="exampleFormControlSelect1">
                <?php
                   $sql = "SELECT * FROM `courses`";
                   $result = mysqli_query($conn, $sql);
                   while($row = mysqli_fetch_array($result))
                   {
                     echo "<option>";
                     echo $row["course_id"];
                     echo "</option>";
                   }
               ?>  
                </select>
               </td>
               <td>
                   <input type="submit" name="submit3" value="search" class="form-control btn btn-default" style="margin-top: 0px; margin-left: 15px">
               </td>
        </tr>
       </table><br>


       <?php

       //select from rollno
     if(isset($_POST['submit1']))
     {
      $sql = "SELECT * FROM `grade_course`,`courses` WHERE `grade_course`.`student_id` = '$_POST[rollno]' AND `grade_course`.`course_id` = `courses`.`course_id`";
       $result = mysqli_query($conn , $sql);
        
        echo "<table class='table table-bordered'>";
        echo "<tr>"; 
        echo "<th>"; echo "Student_id"; echo "</th>";
        echo "<th>"; echo "course name"; echo "</th>";
        echo "<th>"; echo "Course_id"; echo "</th>";
        echo "<th>"; echo "Branch"; echo "</th>";
        echo "<th>"; echo "sem"; echo "</th>";
        echo "<th>"; echo "marks"; echo "</th>";
        echo "<th>"; echo "max_marks"; echo "</th>";
        echo "</tr>";


       while($row = mysqli_fetch_array($result))
       {
           echo "<tr>";
              echo "<td>"; echo $row["student_id"]; echo "</td>";
              echo "<td>"; echo $row["name"]; echo "</td>";
              echo "<td>"; echo $row["course_id"]; echo "</td>";
              echo "<td>"; echo $row["branch"]; echo "</td>"; 
              echo "<td>"; echo $row["sem"]; echo "</td>";
              echo "<td>"; echo $row["marks"]; echo "</td>";
              echo "<td>"; echo $row["max_marks"]; echo "</td>";
           echo "</tr>";
       }
              echo "</table>";

     }



// select from sem
     if(isset($_POST['submit2']))
     {
      $sql = "SELECT * FROM `grade_course`,`courses` WHERE `grade_course`.`sem` = '$_POST[sem]' AND `grade_course`.`course_id` = `courses`.`course_id`";
       $result = mysqli_query($conn , $sql);
        
        echo "<table class='table table-bordered'>";
        echo "<tr>"; 
        echo "<th>"; echo "Student_id"; echo "</th>";
        echo "<th>"; echo "course name"; echo "</th>";
        echo "<th>"; echo "Course_id"; echo "</th>";
        echo "<th>"; echo "Branch"; echo "</th>";
        echo "<th>"; echo "sem"; echo "</th>";
        echo "<th>"; echo "marks"; echo "</th>";
        echo "<th>"; echo "max_marks"; echo "</th>";
        echo "</tr>";


       while($row = mysqli_fetch_array($result))
       {
           echo "<tr>";
              echo "<td>"; echo $row["student_id"]; echo "</td>";
              echo "<td>"; echo $row["name"]; echo "</td>";
              echo "<td>"; echo $row["course_id"]; echo "</td>";
              echo "<td>"; echo $row["branch"]; echo "</td>"; 
              echo "<td>"; echo $row["sem"]; echo "</td>";
              echo "<td>"; echo $row["marks"]; echo "</td>";
              echo "<td>"; echo $row["max_marks"]; echo "</td>";
           echo "</tr>";
       }
              echo "</table>";

     }

//select from course_id
     if(isset($_POST['submit3']))
     {
      $sql = "SELECT * FROM `grade_course`,`courses` WHERE `grade_course`.`course_id` = '$_POST[course_id]' AND `grade_course`.`course_id` = `courses`.`course_id`";
       $result = mysqli_query($conn , $sql);
        
        echo "<table class='table table-bordered'>";
        echo "<tr>"; 
        echo "<th>"; echo "Student_id"; echo "</th>";
        echo "<th>"; echo "course name"; echo "</th>";
        echo "<th>"; echo "Course_id"; echo "</th>";
        echo "<th>"; echo "Branch"; echo "</th>";
        echo "<th>"; echo "sem"; echo "</th>";
        echo "<th>"; echo "marks"; echo "</th>";
        echo "<th>"; echo "max_marks"; echo "</th>";
        echo "</tr>";


       while($row = mysqli_fetch_array($result))
       {
           echo "<tr>";
              echo "<td>"; echo $row["student_id"]; echo "</td>";
              echo "<td>"; echo $row["name"]; echo "</td>";
              echo "<td>"; echo $row["course_id"]; echo "</td>";
              echo "<td>"; echo $row["branch"]; echo "</td>"; 
              echo "<td>"; echo $row["sem"]; echo "</td>";
              echo "<td>"; echo $row["marks"]; echo "</td>";
              echo "<td>"; echo $row["max_marks"]; echo "</td>";
           echo "</tr>";
       }
              echo "</table>";

     }
      ?> 

<?php
include "footer.php";
?>