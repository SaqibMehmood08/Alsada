<?php 

include"config.php";

$id=$_GET['id'];
$query="DELETE FROM measure where id='$id'";
$data=mysqli_query($con,$query);
if ($data) {
	echo "<script> alert('Deleted Successfuly 😄😄😄')  </script>";
	 header( "refresh:1;url=Catagory.php" );
	
}
else
{
echo "<script> alert('Something wrong 😢')  </script>";
   header( "refresh:2;url=Catagory.php" );
} 
?>

