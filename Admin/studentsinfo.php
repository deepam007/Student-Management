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

<!-- Example single danger button -->


<!-- Example single danger button -->

<hr>
<form name="form1" action="" method="post">
            <table class="table">
                <tr>
             <td> <input type="text" name="t1" placeholder="Enter Rollno" class="form-control" required></td>
             <td> <input type="submit" name="search" value="Search By Rollno" class="form-control btn btn-default"></td>
                </tr>
              </table>
        </form> 
<?php
    if(isset($_POST['search']))
    {  
       
       $sql = "SELECT * FROM `student_registration` WHERE `student_id` LIKE '%$_POST[t1]%'";
       $result = mysqli_query($conn, $sql);
       echo "<table class='table table-bordered'>";
       echo "<tr>";       
       echo "<th>"; echo "Name"; echo "</th>";
       echo "<th>"; echo "Rollno"; echo "</th>";
       echo "<th>"; echo "Semester"; echo "</th>";
       echo "<th>"; echo "Email"; echo "</th>";
       echo "<th>"; echo "Contact"; echo "</th>";
       echo "<th>"; echo "view"; echo "</th>";
       echo "</tr>";
        while($row = mysqli_fetch_array($result))
        {
           echo "<tr>";         
           echo "<td>"; echo $row["name"]; echo "</td>";
           echo "<td>"; echo $row["student_id"]; echo "</td>";
           echo "<td>"; echo $row["sem"]; echo "</td>";
           echo "<td>"; echo $row["email"]; echo "</td>";
           echo "<td>"; echo $row["mobile_num"]; echo "</td>";
           echo "<td>"; ?><a href="additionaldetail.php?id=<?php echo $row["student_id"] ?>">Veiw Detail</a> <?php echo "</td>";
           echo "</tr>";
  
        }
        echo "</table>";

    }
    else
    {
       $sql = "SELECT * FROM `student_registration`";
     $result = mysqli_query($conn, $sql);

     echo "<table class='table table-bordered'>";
     echo "<tr>"; 
     echo "<th>"; echo "Name"; echo "</th>";
     echo "<th>"; echo "Rollno"; echo "</th>";
     echo "<th>"; echo "Semester"; echo "</th>";
     echo "<th>"; echo "Email"; echo "</th>";
     echo "<th>"; echo "Contact"; echo "</th>";
     echo "<th>"; echo "view"; echo "</th>";
     echo "</tr>";
      while($row = mysqli_fetch_array($result))
      {
         echo "<tr>";
         echo "<td>"; echo $row["name"]; echo "</td>";
         echo "<td>"; echo $row["student_id"]; echo "</td>";
         echo "<td>"; echo $row["sem"]; echo "</td>";
         echo "<td>"; echo $row["email"]; echo "</td>";
         echo "<td>"; echo $row["mobile_num"]; echo "</td>";
         echo "<td>"; ?><a href="additionaldetail.php?id=<?php echo $row["student_id"] ?>">Veiw Detail</a> <?php echo "</td>";
         echo "</tr>";

      }
      echo "</table>";
   }
?>
<?php
include "footer.php";
?>