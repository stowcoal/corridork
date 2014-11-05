<?php
include 'config.php';
$con=mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()) {
   echo "Failed to connect to MySQL: " . mysqli_connect_error();
}

$result = mysqli_query($con, "select * from bars");
while($row = mysqli_fetch_array($result)) {
  echo $row['name'] . " " . $row['address'];
  echo "<br>";
  $specials = mysqli_query($con, "select * from specials");
?>
<table>
	<tbody>
<?php
  while($special_row = mysqli_fetch_array($specials)) 
  {
?>
<tr>
	<td><?php echo($special_row['name']);?></td>
	<td><?php echo($special_row['price']);?></td>
	<td><?php echo($special_row['item']);?></td>
</tr>
<?php
  } 
?>
</tbody>
</table>
<?php
}
?>