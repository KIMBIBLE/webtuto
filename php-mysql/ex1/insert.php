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
mysqli_query($mysqli, $sql);
?>
