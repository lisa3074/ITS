<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible"
        content="IE=edge">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0">
    <title>Blogs</title>
</head>

<body>
    <div id="blogs">
        <!-- foreach to get all blog posts -->
        <?php 
        //require_once(__DIR__.'/globals.php');  //The out is already delared in router.php
        //Pretend to connect to db
        //$comment = file_get_contents('comment.txt');

        //$comment = htmlspecialchars(file_get_contents('comment.txt'));
       
        $comment = out(file_get_contents('comment.txt'));
        echo $comment;
        ?>
    </div>
</body>

</html>