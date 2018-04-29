<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
<!-- url input
    http://localhost/webtuto/phptuto/parameter.php?name=asdf&user-id=bbkim 
-->
        안녕!! <?php echo $_GET['name'];?>님!! <p>
        USER ID is <?php echo $_GET['user-id'];?> !!!
    </body>
</html>