<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>function</title>
    </head>
    <body>
        <h1>Fucntion</h1>
        <h2>Basic</h2>
        <?php
        function basic(){
            print("asdfasfasfsfasfasfasfasfasfasfasdfasfqwereqr<br>");
            print("qwerasfasdzgxyvzxkbjvg<br>");
        }
        basic();
        basic();
        ?>
        <h2>parameter &amp; argument</h2>
        <?php
        function sum($left, $right){
            print($left + $right);
            print("<br>");

            return $left+$right;
        }
        sum(2,4);
        sum(4,6);

        file_put_contents('result.txt', sum(2,4));
        ?>
    </body>
</html>
