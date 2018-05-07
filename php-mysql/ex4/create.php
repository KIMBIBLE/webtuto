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
        <form action="./process_create.php" method="post">
            <input type="text" name="title" placeholder="input title here">
            <p><textarea name="description"
                placeholder="input description here"></textarea></p>
            <input type="submit">
        </form>

    </body>

</html>
