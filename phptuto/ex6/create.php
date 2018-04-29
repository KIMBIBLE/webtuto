<?php
function print_title(){
    if(isset($_GET['id']))
        echo $_GET['id'];
    else
        echo "Welcome";
}

function print_list(){
    $base_dir = "./data";
    $list = scandir("$base_dir");
    //var_dump($list);

    $cnt=count($list);
    for($i=2; $i<$cnt; $i++){
        echo "<li><a href=\"index.php?id=$list[$i]\">$list[$i]</a></li>\n";
    }
}

function print_description(){
    if(isset($_GET['id']))
        echo file_get_contents("data/".$_GET['id']);
    else
        echo "Hello, PHP";
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>
            <?php
            print_title();
            ?>
        </title>
    </head>
    <body>
        <h1><a href="index.php">WEB</a></h1>
        <ol>
            <?php
            print_list();
            ?>
        </ol>
        <p><a href="create.php">create</a></p>
        <form action="create_process.php" method="post">
            <p>
                <input type="text" name="title" placeholder="INPUT TITLE HERE">
            </p>
            <p>
                <textarea name="description" placeholder="INPUT DESCRIPTION HERE"></textarea>
            </p>
            <p>
                <input type="submit">
            </p>
        </form>
    </body>
</html>