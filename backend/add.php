<?php
require('connection.php');


if (isset($_POST['add'])) {

    

    //List of input we would be collecting from signup form
    //All input must be required and their names must match with the html forms
    $category = $con->real_escape_string($_POST['category']);
    $title = $con->real_escape_string($_POST['title']);
    $author = $con->real_escape_string($_POST['author']);
    $date = $con->real_escape_string($_POST['date']);
    $duration = $con->real_escape_string($_POST['duration']);
    $facebook = $con->real_escape_string($_POST['facebook']);
    $twitter = $con->real_escape_string($_POST['twitter']);
    $linkedin = $con->real_escape_string($_POST['linkedin']);
    $whatsapp = $con->real_escape_string($_POST['whatsapp']);
    $email = $con->real_escape_string($_POST['email']);
    $content = $con->real_escape_string($_POST['content']);
    $image = $_FILES['image']['name'];
    $folder = "media/";
    move_uploaded_file($_FILES["image"]["tmp_name"], "$folder".$_FILES["image"]["name"]);

    


    //SQL code to insert all our values into the table names signup
    $sql = "INSERT INTO `blog`(`category`, `title`, `author`, `date`, `duration`, `facebook`, `twitter`, `linkedin`, `whatsapp`, `email`, `image`, `body`) VALUES
     ('$category','$title','$author','$date',$duration','$facebook','$age','$category','$whatsapp','$email','$email','$content')";
     //query our SQL code
     $signup = mysqli_query($con, $sql);

     //upload image
     if (move_uploaded_file($_FILES['image']['tmp_name'], $folder)) {
        $msg = "Image uploaded successfully";
        
    }else{
        $msg = "Failed to upload image";
        
    }
}
 else {
    // include error 404 page here (page not found) here !!!
};
    if ($signup) {
        //redirect admin to blog page here !!!
    } else {
        //include error 500 or 200 (Server error) here !!!
    }
    
?>