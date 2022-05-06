<?php

require('connection.php');
$title =  $con->real_escape_string($_POST['title']);
$name =  $con->real_escape_string($_POST['name']);
$comment =  $con->real_escape_string($_POST['comment']);
$time = date("l jS \of F Y h:i:s A");

$comment = "INSERT INTO `comment`(`comment`, `name`, `title`, `date`) VALUES ('$comment','$name','$title','$time')";
$add_comment = mysqli_query($con, $comment);
// header("Location: blog.php")


?>