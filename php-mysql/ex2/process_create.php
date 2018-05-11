<?php
$conn = mysqli_connect(
    'localhost',
    'root',
    '111111',
    'opentutorials'
);

$sql = "INSERT INTO topic
    (title, description, created)
    VALUES(
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
    )
";
$result = mysqli_query($conn, $sql);

if($result === false){
    echo 'error occurred during store data. please email to adminstartor';
    error_log(mysql_query($conn));
} else{
    echo 'success to store data. <a href="index.php">Go Back</a>';
}
?>
