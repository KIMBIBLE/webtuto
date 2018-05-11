<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '111111',
    'opentutorials'
);
echo '<h1>Single Row</h1>';
$sql = "SELECT * FROM topic WHERE id = 1";
$result = mysqli_query($conn, $sql);
//var_dump($result);
$row = mysqli_fetch_array($result);
//var_dump($row);
echo '<h2>'.$row['1'].'</h2>';
echo $row['description'];
echo '<br></br>';

echo '<h1>Multi Row</h1>';
$sql = "SELECT * FROM topic";
$result = mysqli_query($conn, $sql);
//var_dump($result);
while($row = mysqli_fetch_array($result)){
    //var_dump($row);
    echo '<h2>'.$row['title'].'</h2>';
    echo $row['description'];
}
?>
