<?php
// 1. connect to mysql database.
// 2. make a select query.
// 3. send a query to connected database using mysqli_query.
// 4. parse query result using mysqli_fetch_array.
// 5. make html using result.
$conn = mysqli_connect(
    'localhost',
    'root',
    '111111',
    'opentutorials'
);

$sql = "SELECT * FROM topic LIMIT 10";
$result = mysqli_query($conn, $sql);
$list = '';
while($row = mysqli_fetch_array($result)){
    //<li><a herf="./index.php?id=1">MYSQL</a></li>
    $list=$list."<li><a href=\"./index.php?id={$row['id']}\">{$row['title']}</a></li>";
}

$article = array(
    'title'=>'Welcome',
    'description'=>'Hello Web'
);

if(isset($_GET['id'])){
    // To show different index.php page according to id value
    $sql = "SELECT * FROM topic WHERE id={$_GET['id']}";
    //echo $sql;

    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result);
    $article['title']=$row['title'];
    $article['description']=$row['description'];
    //print_r($article);
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>WEB</title>
    </head>
    <body>
        <h1><a href="./index.php">WEB</a></h1>
        <ol>
            <li>HTML</li>
            <li>----</li>
            <?=$list?>
        </ol>
        <a href="./create.php">CREATE</a>
        <h2><?=$article['title']?></h2>
        <p><?=$article['description']?></p>
    </body>

</html>
