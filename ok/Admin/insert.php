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
   	 $check_user = "SELECT * FROM coursea WHERE cnic=='$cnic'";
        $run_query1=mysqli_query($con,$check_user); 


     $sql1= "SELECT * FROM coursea WHERE email='$email'";
      $run_query=mysqli_query($con,$sql1);  
  
         if(mysqli_num_rows($run_query)>0)  
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
      	$sql= "INSERT INTO coursea(name,email,cnic,pass)VALUES('$name','$email','$cnic','$pass')";
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
       header( "refresh:2;url=register.php" );
       	?>
       	   <p>Your Data Is Not Inserted</p>
       </center>
   	  	<?php
   	  }

      }


   	  
   }//else
}

$statusMsg = '';

// File upload path
$targetDir = "uploads/";
$fileName= $_FILES['file']['name'];  
$tmp_name= $_FILES['file']['tmp_name']; 
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);


if(isset($_POST["post"]) && !empty($_FILES["file"]["name"])){
    $title = $_POST['title'];
    $category =$_POST['category'];
    $content =$_POST['content'];
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $con->query("INSERT into data (title, category, content,image) VALUES ('$title','$category','$content','".$fileName."')");
            if($insert){
                 $statusMsg = "The file Image ".$fileName. "
             has been uploaded successfully.";
                      
            }else{
                $statusMsg = "  File upload failed, please try again.";
            } 
        }
        else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }
    else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}
else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message

?>
 <?php  ?>



 
<!DOCTYPE html>
<html class="no-js">

<head>
    <meta charset='UTF-8'>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    
    <title>Hanyu International study and Exam Center </title>
    


<body>
<style>
.loaders{
display: block;
 position: absolute;
  left: 500px;
  right: 130px; 
  top: 0;
padding-top: 250px ;
 width: 70%;
  height: 150%;
    z-index: 9999;
}
</style>

    

    <!-- Paste this code after body tag -->
    <div class="loaders">
    <div class="spinner-grow text-primary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-secondary" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-success" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-danger" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-warning" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-info" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-light" role="status">
  <span class="visually-hidden">Loading...</span>
</div>
<div class="spinner-grow text-dark" role="status">
  <span class="visually-hidden">Loading...</span>
</div> 
</div>
       <?php 
     header( "refresh:3;url= web_post.php" );
       
        ?> 
    </head>  
<body>
    <!-- Paste this code after body tag -->
    <div class="se-pre-con"></div>
    <!-- Ends -->
    
    <div class="content">
    <img src="http://smallenvelop.com/wp-content/uploads/2014/08/simple-pre-loader.jpg
" style="visibility: hidden; width:100%; height: auto;">
    <center style="padding-top: 100px;">
    <h3 style="color:blueviolet;">
       <?php
        header( "refresh:2;url= web_post.php" );
        echo $statusMsg;
         
        ?> 
      
    </h3>
</center>
    </div>
    <style>
    .content {
   background: url(http://smallenvelop.com/wp-content/uploads/2014/08/simple-pre-loader.jpg) center no-repeat;
            background-size: 100%;
            width: 100%;
        }
    </style>
</body>

   

</html>
