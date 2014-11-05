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
}
?>