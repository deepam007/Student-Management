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
<hr>

<div class="x_content">
    <form name="form1" action="" method="post">
       <table >
       <tr class="d-inline p-3">
                <td>
                <label for="exampleFormControlSelect1" style="margin-left: 20px">\\ Branch-: \\</label>
                <select class="btn btn-danger dropdown-toggle" name="branch" id="exampleFormControlSelect1">
                 <?php    
                         $sql = "SELECT DISTINCT branch FROM `courses` ORDER BY `courses`.`branch` ASC";
                         $result = mysqli_query($conn, $sql);
                         while($row = mysqli_fetch_array($result))
                         {
                           echo "<option>";
                           echo $row['branch'];
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
</form>

 

<!-- Example single danger button -->
<form name="form1" action="" method="post">
            <table class="table">
                <tr>
             <td> <input type="text" name="t1" placeholder="Enter course_id" class="form-control" required></td>
             <td> <input type="submit" name="search" value="Search By course_id" class="form-control btn btn-default"></td>
                </tr>
              </table>
        </form> 
<?php
    if(isset($_POST['search']))
    {  
       
       $sql = "SELECT * FROM `courses` WHERE `course_id` LIKE '%$_POST[t1]%'";
       $result = mysqli_query($conn, $sql);
       echo "<table class='table table-bordered'>";
       echo "<tr>";       
       echo "<th>"; echo "Name"; echo "</th>";
       echo "<th>"; echo "Course_id"; echo "</th>";
       echo "<th>"; echo "branch"; echo "</th>";
       echo "<th>"; echo "teacher"; echo "</th>";
       echo "<th>"; echo "total student"; echo "</th>";
       echo "<th>"; echo "view students"; echo "</th>";
       echo "</tr>";
        while($row = mysqli_fetch_array($result))
        {
           echo "<tr>";         
           echo "<td>"; echo $row["name"]; echo "</td>";
           echo "<td>"; echo $row["course_id"]; echo "</td>";
           echo "<td>"; echo $row["branch"]; echo "</td>";
           echo "<td>"; echo $row["teacher"]; echo "</td>";
           echo "<td>"; echo $row["total_student"]; echo "</td>";
           echo "<td>"; ?><a href="course_student.php?course_id=<?php echo $row["course_id"] ?>">Veiw Detail</a> <?php echo "</td>";
           echo "</tr>";
  
        }
        echo "</table>";

    }
    else
    {
      
     if(isset($_POST['submit2']))
    {  
       
       $sql = "SELECT * FROM `courses` WHERE `branch` LIKE '%$_POST[branch]%'";
       $result = mysqli_query($conn, $sql);
       echo "<table class='table table-bordered'>";
       echo "<tr>";       
       echo "<th>"; echo "Name"; echo "</th>";
       echo "<th>"; echo "Course_id"; echo "</th>";
       echo "<th>"; echo "branch"; echo "</th>";
       echo "<th>"; echo "teacher"; echo "</th>";
       echo "<th>"; echo "total student"; echo "</th>";
       echo "<th>"; echo "view students"; echo "</th>";
       echo "</tr>";
        while($row = mysqli_fetch_array($result))
        {
           echo "<tr>";         
           echo "<td>"; echo $row["name"]; echo "</td>";
           echo "<td>"; echo $row["course_id"]; echo "</td>";
           echo "<td>"; echo $row["branch"]; echo "</td>";
           echo "<td>"; echo $row["teacher"]; echo "</td>";
           echo "<td>"; echo $row["total_student"]; echo "</td>";
           echo "<td>"; ?><a href="course_student.php?course_id=<?php echo $row["course_id"] ?>">Veiw Detail</a> <?php echo "</td>";
           echo "</tr>";
  
        }
      }
      else
      {

         $sql = "SELECT * FROM `courses`";
     $result = mysqli_query($conn, $sql);

     echo "<table class='table table-bordered'>";
       echo "<tr>"; 
       echo "<th>"; echo "Name"; echo "</th>";
       echo "<th>"; echo "Course_id"; echo "</th>";
       echo "<th>"; echo "branch"; echo "</th>";
       echo "<th>"; echo "teacher"; echo "</th>"; 
       echo "<th>"; echo "total student"; echo "</th>";
       echo "<th>"; echo "view students"; echo "</th>";
     echo "</tr>";
      while($row = mysqli_fetch_array($result))
      {
         echo "<tr>";
           echo "<td>"; echo $row["name"]; echo "</td>";
           echo "<td>"; echo $row["course_id"]; echo "</td>";
           echo "<td>"; echo $row["branch"]; echo "</td>";
           echo "<td>"; echo $row["teacher"]; echo "</td>";
           echo "<td>"; echo $row["total_student"]; echo "</td>";
           echo "<td>"; ?><a href="course_student.php?course_id=<?php echo $row["course_id"] ?>">Veiw Detail</a> <?php echo "</td>";

         echo "</tr>";

      }
      echo "</table>";
    }

        echo "</table>";
      }

?>
<?php
include "footer.php";
?>