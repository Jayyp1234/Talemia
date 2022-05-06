<?php
require('connection.php');
$title =  $con->real_escape_string($_POST['title']);
$name =  $con->real_escape_string($_POST['name']);
$blog_id =  $con->real_escape_string($_POST['blog_id']);
$email =  $con->real_escape_string($_POST['email']);
$comment =  $con->real_escape_string($_POST['comment']);
$comment_id = $con->real_escape_string('');
if (isset($_POST['comment_id'])){
    $comment_id = $con->real_escape_string($_POST['comment_id']);
}
$time = date("l jS \of F Y h:i:s A");
$comment = "INSERT INTO `comments`(`blog_id`,`comment_id`,`name`, `email`,`description`, `date`) VALUES ('$blog_id','$comment_id','$name','$email','$comment','$time')";
$add_comment = mysqli_query($con, $comment);
header("Location: ../blog.php?title=".$title);


?>