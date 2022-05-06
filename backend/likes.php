
<?php
 $ipaddress = getenv("REMOTE_ADDR") ;
 $postid = $_POST['postid'];
 $likes = "SELECT `user_ip` FROM `likes` WHERE `user_ip` = '$ipaddress'";
 $validate = mysqli_query($con, $likes);
 if ($validate) {
	die(mysql_error());
 } else {
	 $new_likes = "SELECT * FROM `likes` WHERE `blog_id` = '$postid'";
	 $update_likes = mysqli_query($con, $new_likes);
	 $x = 0;
	 while ($row = mysqli_fetch_array($update_likes)) {
		 $x += 1;
		 $add_ip = mysqli_query($con, "INSERT INTO `likes`(`blog_id`, `user_ip`) VALUES ('$postid','$ipaddress')");
	 }
	 return $x;
 }

?>