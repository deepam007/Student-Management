<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html>
<head>
  <title>Admin login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <style> 
.div2 {
  width: 300px;
  height: 300px;  
  padding: 5px;
  border: 2px solid black;
  border-radius: 20px;
}
</style>

</head>
<body class="text-center">
  <br><br>
  <div align="center">
    <h1 style="text-decoration: underline;">Admin Panel</h1><br>
    <div class="div2">
    <h3>Sign In</h3>
    <form class="col-lg-10" method="post" action="">
     <input type="text" name="username" placeholder="username" class="form-control" required><br>
     <input type="password" name="password" placeholder="password" class="form-control" required><br>
     <input type="submit" name="submit"  value="Login" class="btn btn-lg btn-primary btn-block">
    </form>
    
    <?php
       if(isset($_POST['submit']))
        { 
    
    
          $count = 0;
          $sql = "SELECT * FROM `admin` WHERE `username` LIKE '%$_POST[username]%' AND `password` LIKE '%$_POST[password]%'";

          $result = mysqli_query($conn, $sql);
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
            $_SESSION["admin_name"] = $row["admin_name"];

          ?>
          <script type="text/javascript">
                window.location="studentsinfo.php";
          </script>
          <?php
          }
         }
    ?>
  
    </div>
  </div>

</body>
</html>
   
