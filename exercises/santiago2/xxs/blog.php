<?php

$title = 'Title a'; //$_POST["title"]
$comment = "<script>alert()</script>"; // textarea $_POST['comment']


//Connect to db
//INSERT command => bind values
//A text file functions as a column in the db


file_put_contents('comment.txt', $comment);