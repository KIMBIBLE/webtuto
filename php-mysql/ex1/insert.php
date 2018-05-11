<?php
// $mysqli = mysqli_connect("example.com", "user", "password", "database");
// $res = mysqli_query($mysqli, "SELECT 'Please, do not use ' AS _msg FROM DUAL");
// $row = mysqli_fetch_assoc($res);
// echo $row['_msg'];

$mysqli = mysqli_connect("localhost", "root", "", "opentutorials");
=======
$mysqli = mysqli_connect("localhost", "root", "111111", "opentutorials");

$sql = "
    INSERT INTO topic
        (title, description, created)
        VALUE(
            'MySQL',
            'MySQL is ...',
            NOW()
            )
");
$result = mysqli_query($mysqli, $sql);

// Do not use this kind of statement in live server.
if($result === false){
    echo mysqli_error($conn);
}
?>
