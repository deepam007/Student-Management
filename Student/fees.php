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
  <br><h1 style="margin-left:100px">Your Fee Status</h1>      
<?php
      $sql = "SELECT * FROM `fees` WHERE `student_id`= '$_SESSION[stroll]' ";
                            $result = mysqli_query($conn, $sql);
                            
                            echo "<table class='table table-bordered'>";
                            echo "<tr>"; 
                            echo "<th>"; echo "Name"; echo "</th>";
                            echo "<th>"; echo "student_id"; echo "</th>";
                            echo "<th>"; echo "category"; echo "</th>";
                            echo "<th>"; echo "total_fees"; echo "</th>";
                            echo "<th>"; echo "paid_fee"; echo "</th>";
                            echo "<th>"; echo "Due"; echo "</th>";
                            echo "</tr>";

                            while($row = mysqli_fetch_array($result))
                          {
                             echo "<tr>";
                             echo "<td>"; echo $row["name"]; echo "</td>";
                             echo "<td>"; echo $row["student_id"]; echo "</td>";
                             echo "<td>"; echo $row["category"]; echo "</td>";
                             echo "<td>"; echo $row["fees"]; echo "</td>";
                             echo "<td>"; echo $row["paid"]; echo "</td>";
                             echo "<th>"; echo $row["due"]; echo "</th>";
                             echo "</tr>";

                          }
                            echo "</table>";
?>                                          

<?php
include "footer.php";
?>
