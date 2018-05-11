<?php
// 1. connect to database
// 2. make sql query
// 3. send a query to a connected database (using mysqli_query)
// 4. error handling with mysqli_query()'s result
$conn = mysqli_connect(
    'localhost',
    'root',
    '111111',
    'opentutorials'
);

$sql = "INSERT INTO topic
    (title, description, created)
    VALUES (
        '{$_POST['title']}',
        '{$_POST['description']}',
        NOW()
    )
";

$result = mysqli_query($conn, $sql);
if($result === false){
    echo 'error occurred during store data. please email to adminstartor';
    error_log(mysqli_error($conn));
} else {
    echo 'success to store data. <a href="index.php">Go Back</a>';
}

?>
