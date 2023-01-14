<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="shortcut icon" href="img/favicon.png">

  <title>Register || Al_Sada </title>

  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <!-- bootstrap theme -->
  <link href="css/bootstrap-theme.css" rel="stylesheet">
  <!--external css-->
  <!-- font icon -->
  <link href="css/elegant-icons-style.css" rel="stylesheet" />
  <link href="css/font-awesome.css" rel="stylesheet" />
  <!-- Custom styles -->
  <link href="css/style.css" rel="stylesheet">
  <link href="css/style-responsive.css" rel="stylesheet" />


    <!-- =======================================================
  
      Author: Muhammad Zubair
      
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" action="register.php" method="post">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="name" placeholder="Enter Name" autofocus required="">
        </div>
         <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" class="form-control" name="email" placeholder="Enter email" autofocus required="">
        </div>
         <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="text" class="form-control" name="cnic" placeholder="CNIC" autofocus>
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" name="pass" placeholder="Password">
        </div>
       
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="signup">SignUp</button>
       
      </div>
    </form>
    <div class="text-right">
      <div style="padding-top:50px;" class="credits">
        <center>
          <h5>Designed By <a href="#">Muhammad Zubair</a></h5>
        </center>
         
        </div>
    </div>
  </div>


</body>

</html>
<?php
include "config.php";
?>
<?php 

if (isset($_POST['signup'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $cnic = $_POST['cnic'];
  $pass = $_POST['pass'];
  if ($name=="") {
    echo"<script> alert('Please enter name first!') </script>";
  }
  else if ($email=="") {
    echo"<script> alert('Please enter email first!') </script>";
  }
  else if ($cnic=="") {
    echo"<script> alert('Please enter cnic first!') </script>";
  }
  else if ($pass=="") {
    echo"<script> alert('Please enter Password first!') </script>";
  }

   else
   {
     $check_user = "SELECT * FROM admin WHERE cnic='$cnic'";
        $run_query1=mysqli_query($con,$check_user); 


     $sql1= "SELECT * FROM admin WHERE email='$email'";
      $run_query=mysqli_query($con,$sql1);  
  
         if(mysqli_num_rows($run_query)>0 )  
         {  
        echo "<script>alert('Email $email is already exist, Please try another one!')</script>";  
          exit(); 
      
       } 
        
         else if(mysqli_num_rows($run_query1)>0)  
         {  
        echo "<script>alert('CNIC $cnic is already exist, Please try another one!')</script>";  
          exit(); 
       } 

      else
      {
        $sql= "INSERT INTO admin(name,email,cnic,pass)VALUES('$name','$email','$cnic','$pass')";
      if (mysqli_query($con,$sql)) {
        ?>
       <center style="padding-top: 100px;">
        <?php  
       header( "refresh:2;url=login.php" );
        ?>
           <p>Your Data Is inserted Succesfully</p>
       </center>
        <?php
      }
      else
      {
        ?>
       <center style="padding-top: 100px;">
          <?php  
       header( "refresh:2;url=login.php" );
        ?>
           <p>Your Data Is Not Inserted</p>
       </center>
        <?php
      }

      }


      
   }
}

?>