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
     $sql = "SELECT * FROM `student_registration`";
     $result = mysqli_query($conn, $sql);

     echo "<table class='table table-bordered'>";
     echo "<tr>";
   //  echo "<th>"; echo "srn"; echo "</th>";
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
    //     echo "<td>"; echo $row["srn"]; echo "</td>";
         echo "<td>"; echo $row["name"]; echo "</td>";
         echo "<td>"; echo $row["student_id"]; echo "</td>";
         echo "<td>"; echo $row["sem"]; echo "</td>";
         echo "<td>"; echo $row["email"]; echo "</td>";
         echo "<td>"; echo $row["mobile_num"]; echo "</td>";
        echo "<td>"; ?><a href="main_page.php?id=<?php echo $row["student_id"] ?>">Veiw Detail</a> <?php echo "</td>";
         echo "</tr>";

      }
      echo "</table>";
?>
<?php
include "footer.php";
?>