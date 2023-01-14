<?php  
 $con = mysqli_connect("localhost","root","","project");
 if (!$con) {
 	echo "Connection Error";
 }

?>
<?php

$connect = new PDO('mysql:host=localhost;dbname=project', 'root', '');
?>
