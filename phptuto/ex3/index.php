<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB-PHP</title>
    </head>
    <body>
        <h1>WEB</h1>
        <ol>
            <li><a href="index.php?id=HTML">HTML</a></li>
            <li><a href="index.php?id=CSS">CSS</a></li>
            <li><a href="index.php?id=Javascript">Javascript</a></li>
            <li><a href="index.php?id=PHP">PHP</a></li>    
        </ol>
        <h2>
            <?php
                echo $_GET['id'];
            ?>
        </h2>
        <?php
            echo file_get_contents("data/".$_GET['id']);
            echo file_get_contents("test");
        ?>

    </body>
</html>