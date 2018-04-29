<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>function</title>
    </head>
    <body>
        <h1>function</h1>
        <?php
        $str="asdfasfdqwreqwrwrewrqwrqwreaasdfasf
        dqwreqwrwrewrqwrqwreasdfasdfasfasf
        
        afzxcasdfasfdqwreqwrwrewrqwrqwr
        easdfasdfasfasfafzxcvxvxvzxvweqrqwr
        wqevxvxvzxvweqrqwrwqesdfasdfasfasfafz
        xcvxvxvzxvweqrqwrwqe";
        
        echo "string : ".$str."<br><br>";
        nl2br($str);
        echo "len is : ".strlen($str);
        ?>
    </body>
</html>