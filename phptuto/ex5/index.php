<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB-PHP</title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?php
                $base_dir = "./data/"
                $list = scandir("base_dir");
                var_dump($list);
            ?>
        </ol>
        <h2>
            <?php
                if(isset($_GET['id']))
                    echo $_GET['id'];
                else
                    echo "Welcome";
            ?>
        </h2>
        <?php
            if(isset($_GET['id']))
                echo file_get_contents("data/".$_GET['id']);
            else
                echo "Hello, PHP";
        ?>

    </body>
</html>