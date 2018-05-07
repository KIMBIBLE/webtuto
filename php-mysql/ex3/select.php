<?php
$conn = mysqli_connect(
  'localhost',
  'root',
  '111111',
  'opentutorials');
if(!$conn){
    echo "Error Failed to connect database";
}

$sql = "SELECT * FROM topic";
// If success it return mysqli_result class.
// If query failed, It returns false value
$result = mysqli_query($conn, $sql);
var_dump($result->num_rows);
?>
