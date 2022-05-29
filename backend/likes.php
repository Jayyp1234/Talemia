 
<?php
require('connection.php');
 $ipaddress = getenv("REMOTE_ADDR");
 $postid = $_POST['postid'];
 $likes = "SELECT `user_ip` FROM `likes` WHERE `user_ip` = '$ipaddress'";
 $validate = mysqli_query($con, $likes);
 if (mysqli_num_rows($validate) != 0) {
	$new_likes = "SELECT * FROM `likes` WHERE `blog_id` = '$postid'";
	 $update_likes = mysqli_query($con, $new_likes);
	 $x = 0;
	 while ($row = mysqli_fetch_array($update_likes)) {
		 $x += 1;
	 }
	 $data = $x;
	 echo strval($data).' LIKES';
 } 
 else {
	 $new_likes = "SELECT * FROM `likes` WHERE `blog_id` = '$postid'";
	 $update_likes = mysqli_query($con, $new_likes);
	 $x = 0;
	 $add_ip = mysqli_query($con, "INSERT INTO `likes`(`blog_id`, `user_ip`) VALUES ('$postid','$ipaddress')");
	 while ($row = mysqli_fetch_array($update_likes)) {
		 $x += 1;
	 }
	 $data = $x+1;
	 echo strval($data).' LIKES';
 }

?>