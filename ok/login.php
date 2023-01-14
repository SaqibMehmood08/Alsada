<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Creative - Bootstrap 3 Responsive Admin Template">
  <meta name="author" content="GeeksLabs">
  <meta name="keyword" content="Creative, Dashboard, Admin, Template, Theme, Bootstrap, Responsive, Retina, Minimal">
  <link rel="icon" href="img/al-sada.jpeg" type="image/x-icon" />
  <link rel="shortcut icon" href="img/al-sada.jpeg">

  <title>Login || </title>

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
  
      Author: Muhammad Saqib
      
    ======================================================= -->
</head>

<body class="login-img3-body">

  <div class="container">

    <form class="login-form" method="post" action="login.php">
      <div class="login-wrap">
        <p class="login-img"><i class="icon_lock_alt"></i></p>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_profile"></i></span>
          <input type="email" class="form-control" placeholder="Email" name="email" autofocus required="">
        </div>
        <div class="input-group">
          <span class="input-group-addon"><i class="icon_key_alt"></i></span>
          <input type="password" class="form-control" placeholder="Password" name="pass" required="">
        </div>
      
        <button class="btn btn-primary btn-lg btn-block" type="submit" name="login">Login</button>
      </div>
      <center>
        <p>Create New Account <a href="register.php">Click Here</a></p>
      </center>
    </form>
    <div class="text-right">
      <div style="padding-top:50px;" class="credits">
        <center>
          <h5 >Designed By <a href="#" style="color:white;"> <strong>Muhammad Saqib</strong></a></h5>
        </center>
         
        </div>
    </div>
  </div>


</body>

</html>
<?php  

session_start();//session starts here  
include"config.php";
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $pass = $_POST['pass'];
  if ($email=="" || $pass=="") {
    echo"<script> alert('Please Fill all Field') </script>";
  }
  else
  {
    $sql = "SELECT * FROM coursea WHERE email='$email' AND pass='$pass'";
    $query = mysqli_query($con, $sql);
    if (mysqli_num_rows($query)>0) {
      echo '<script type="text/javascript">window.location="index.php"; </script>';
      $_SESSION['email']=$email;//here session is used and value of $user_email store in $_SESSION.  
    }
    else
    {
      echo "<script> alert('Email and Password not Matched')  </script>";
    }
  }

}


?>