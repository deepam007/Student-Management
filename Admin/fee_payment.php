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

       <br><table >
         <form name="form1" action="" method="post">
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
        </tr>
        </table> <br>      


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
                          <input type="submit" name="submit1" value="search" class="form-control btn btn-default" style="margin-top: 3px; margin-right: 15px">
                      </td>
                  </tr>
              </table><br>
   </form>
</div>
                <?php
                  if(isset($_POST['submit1']))
                    {
                                          $res = mysqli_query($conn, "SELECT * FROM student_registration WHERE student_id='$_POST[enr]'");
                                          while ($row = mysqli_fetch_array($res))
                                           {
                                               $name = $row["name"];
                                               $email = $row["email"];
                                               $contact = $row["mobile_num"];
                                               $sem = $row["sem"];
                                               $rollno = $row["student_id"];
                                               $_SESSION["rollno"] = $rollno;
                                           } 
                                        ?>
                                           <table class="table table-bordered">
                                            <tr>
                                                <td><input class="form-control" type="text" name="rollno" placeholder="Roll No" value="<?php echo $rollno; ?>" disabled></td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-control" type="text" name="student_name" placeholder="student_name" value="<?php echo $name; ?>"></td>
                                            </tr>
                                             <tr>
                                                <td><input class="form-control" type="text" name="student_sem" placeholder="SEMESTER" value="<?php echo $sem; ?>"></td>
                                            </tr>
                                             <tr>
                                                <td><input class="form-control" type="text" name="student_contact" placeholder="Contact" value="<?php echo $contact; ?>"></td>
                                            </tr>
                                             <tr>
                                                <td><input class="form-control" type="text" name="student_email" placeholder="Email" value="<?php echo $email; ?>"></td>
                                            </tr>
                                             <tr>
                                                <td>
                                                    <select name="books_name" class="form-control selectpicker">
                                                    <?php
                                                            echo "<option>"; echo "GEN";  echo "</option>";
                                                            echo "<option>"; echo "GEN[EWS]";  echo "</option>";
                                                            echo "<option>"; echo "OBC";  echo "</option>";
                                                            echo "<option>"; echo "SC";  echo "</option>";
                                                            echo "<option>"; echo "ST";  echo "</option>";
                                                    ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-control" type="date" name="payment_date" placeholder="payment Date" value="<?php echo date("d/M/Y"); ?>"></td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-control" type="text" name="fine" placeholder="Amount" ></td>
                                            </tr>
                                            <tr>
                                                <td><input class="form-control btn btn-default" type="submit" name="submit2" value="Pay Fee" style="border-radius: 12px; background: rgb(23,5,7); color: white; padding: 4px 11px"></td>
                                            </tr>
                                            </table>
                                        <?php
                    }
                   else
                    {
                      if(isset($_POST['submit2']))
                      {  
                        $sql = "SELECT * FROM `fees`,`student_info` WHERE `student_info`.`sem` = '$_POST[sem]' AND `student_info`.`student_id`= `fees`.`student_id` ORDER BY `fees`.`student_id` ASC";
                            $result = mysqli_query($conn, $sql);
                            
                            echo "<table class='table table-bordered'>";
                            echo "<tr>"; 
                            echo "<th>"; echo "Name"; echo "</th>";
                            echo "<th>"; echo "student_id"; echo "</th>";
                            echo "<th>"; echo "sem"; echo "</th>";
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
                             echo "<td>"; echo $row["sem"]; echo "</td>";
                             echo "<td>"; echo $row["category"]; echo "</td>";
                             echo "<td>"; echo $row["fees"]; echo "</td>";
                             echo "<td>"; echo $row["paid"]; echo "</td>";
                             echo "<th>"; echo $row["due"]; echo "</th>";
                             echo "</tr>";

                          }
                            echo "</table>";
                      }
                        else
                      {
                            $sql1 = "SELECT * FROM `fees` ORDER BY `fees`.`student_id` ASC";
                            $res1 = mysqli_query($conn, $sql1);
                            
                            echo "<table class='table table-bordered'>";
                            echo "<tr>"; 
                            echo "<th>"; echo "Name"; echo "</th>";
                            echo "<th>"; echo "student_id"; echo "</th>";
                            echo "<th>"; echo "category"; echo "</th>";
                            echo "<th>"; echo "total_fees"; echo "</th>";
                            echo "<th>"; echo "paid_fee"; echo "</th>";
                            echo "<th>"; echo "Due"; echo "</th>";
                            echo "</tr>";

                            while($row = mysqli_fetch_array($res1))
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
                          }
                      
                        }
                  ?>  
                                     
         

<?php
include "footer.php";
?>
