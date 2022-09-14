<?php
include "connection.php";
session_start();

?>
<!DOCTYPE html>
<html>
<head>
  <title>student login</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <style> 
.div2 {
  width: 300px;
  height: 350px;  
  padding: 5px;
  border: 2px solid black;
  border-radius: 20px;
}
</style>

</head>
<body class="text-center">
  <br><br>
  <div align="center">
    <h1 style="text-decoration: underline;">Student Panel</h1><br>
    <div class="div2">
    <h3>Sign In</h3>
    <form class="col-lg-10" method="post" action="">
     <input type="text" name="rollno" placeholder="Rollno" class="form-control"><br>
     <input type="password" name="password" placeholder="password" class="form-control"><br>
     <input type="submit" name="login"  value="Login" class="btn btn-lg btn-primary btn-block">
    </form>
    <?php
       if(isset($_POST['login']))
        {
          $count = 0;

          $sql = "SELECT * FROM `student_registration` WHERE `student_id` LIKE '$_POST[rollno]' AND `password` LIKE '$_POST[password]'";

          $result = mysqli_query($conn, $sql);

          // Mysql_num_row is counting table row
          $count = mysqli_num_rows($result);

          if($count == 0)
          {
          ?>
          <hr>
          <div class="alert alert-danger col-lg-0 col-lg-push-0">
           <strong style="color:red">Invalid</strong> Username Or Password.
          </div>
          <?php
          }
          else
          {
            $row = mysqli_fetch_array($result);
            $_SESSION["stname"] = $row["name"];
            $_SESSION["stroll"] = $_POST["rollno"];
        
           $sql1 = "SELECT img FROM student_info WHERE student_id = $_POST[rollno]";
           $res = mysqli_query($conn, $sql1);
           $row1 = mysqli_fetch_array($res);

           $_SESSION["img"] = $row1["img"];

          ?>
          <script type="text/javascript">
                window.location="profile.php";
          </script>
          <?php
          }

         }
    ?>
    <hr>
				<div class="separator">
					<p class="change_link">New to site?
						<a href="registration.php" style="text-decoration: underline;"> <b>Create Account</b> </a>
					</p>

				</div>
    </div>
  </div>

</body>
</html>
   
