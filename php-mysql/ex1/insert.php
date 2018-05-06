<?php
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
