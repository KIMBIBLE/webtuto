<?php
$mysqli = mysqli_connect("localhost", "root", "111111", "opentutorials");
mysqli_query($mysqli, "
    INSERT INTO topic
        (title, description, created)
        VALUE(
            'MySQL',
            'MySQL is ...',
            NOW()
            )
");
?>
