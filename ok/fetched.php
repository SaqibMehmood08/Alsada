<?php
//fetch.php
$connect = mysqli_connect("localhost", "root", "", "project");

$output = '';
$query = "SELECT * FROM sellings ORDER BY item_code DESC LIMIT 0,5" ;
$result = mysqli_query($connect,$query);
$output = '
<br />
<h3 align="center">Recieved Money</h3>
<table class="table table-bordered table-striped">
 <tr>
  <th width="35%">Phone</th>
  <th width="25%">Customer Name</th>
  <th width="10%">Discount</th>
  <th width="10%">Price</th>

 </tr>
';
while($row = mysqli_fetch_array($result))
{
 $output .= '
 <tr>
  <td>'.$row["item_name"].'</td>
  <td>'.$row["item_code"].'</td>
  <td>'.$row["item_description"].'</td>
  <td>'.$row["item_price"].'</td>

 </tr>
 ';
}
$output .= '</table>';
echo $output;
?>

