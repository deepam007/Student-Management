<?php
include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
  <title>Student panel</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

  <style> 
.div2 {
  width: 300px;
  height: 550px;  
  padding: 5px;
  border: 2px solid black;
  border-radius: 20px;
}
</style>

</head>
<body class="text-center">
<br>
  <div align="center">
    <h1 style="text-decoration: underline;">Student Panel</h1><br>
    <div class="div2">
    <h3>Register</h3>
    <form class="col-lg-10" method="post" action="">
     <input type="text" name="name" placeholder="Name" class="form-control"><br>
     <input type="text" name="rollno" placeholder="Rollno" class="form-control"><br>
     <input type="password" name="password" placeholder="password" class="form-control"><br>
     <input type="text" name="sem" placeholder="Semester" class="form-control"><br>
     <input type="email" name="email" placeholder="Email" class="form-control"><br>
     <input type="phone" name="contact" placeholder="MobileNo" class="form-control"><br>
     <input type="submit" name="register"  value="Register" class="btn btn-lg btn-primary btn-block">
    </form>

 <?php

       if(isset($_POST['register']))
       {
              

              $sql = "INSERT INTO `student_registration` (`srn`, `name`, `rollno`, `password`, `contact`, `email`, `student_sem`) VALUES ('', '$_POST[name]', '$_POST[rollno]', '$_POST[password]', '$_POST[contact]', '$_POST[email]', '$_POST[sem]')";

            mysqli_query($conn, $sql);
           
           ?>
             <hr>
            <div class="alert alert-success col-lg-0 col-lg-push-0">
                Registration successfully u may login now. 
            </div>

           <?php

           mysqli_close($conn);

       }

   ?>
   <hr>
   <div class="separator">
       <p class="change_link">Already have account?
           <a href="login.php" style="text-decoration: underline;"> <b>Sign in</b> </a>
       </p>

   </div>

    
    </div>
  </div>

</body>
</html>
   
