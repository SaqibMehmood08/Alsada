<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "project");

$output = '';
if(isset($_POST["query"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["query"]);
 $query = "
  SELECT * FROM measure 
  WHERE phone LIKE '%".$search."%'
  OR customer_name LIKE '%".$search."%' 
  OR accept_date LIKE '%".$search."%' 
  OR id LIKE '%".$search."%' 
  
 ";
}
else
{
 $query = "
  SELECT * FROM measure ORDER BY id DESC limit 0,1
 ";
}
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
 $output .= '
  <div class="table-responsive">
   <table class="table table bordered">
    <tr>
     <th width="45%">customer_phone</th>
     <th width="10%"> Name</th>
     <th width="20%">Item Date</th>
     <th width="10%">Item Id</th>
     <th width="5%"></th>
    </tr>
 ';
 while($row = mysqli_fetch_array($result))
 {
  $output .= '
   <tr>
    <td>'.$row["phone"].'</td>
    <td>'.$row["customer_name"].'</td>
    <td>'.$row["accept_date"].'</td>
    <td>'.$row["id"].'</td>
    
   </tr>
  ';
 }
 echo $output;
}
else
{
 echo 'Data Not Found';
}

?>