<?php 

include"config.php";
error_reporting(0);
$id=$_GET['id'];
$query="DELETE FROM coursea where id='$id'";
$data=mysqli_query($con,$query);
if ($data) {
  echo "<script> alert('Deleted Successfuly 😄😄😄')  </script>";
  header( "refresh:2;url=login.php" );
  if(mysqli_num_rows($data)<0)
     header( "refresh:2;url=register.php" );
}
else
{
echo "<script> alert('Something wrong 😢')  </script>";
   header( "refresh:2;url=login.php" );
} 
?>