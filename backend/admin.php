<?php
require('connection.php');

//Login for admin

if (isset($_POST['update'])) {

    //List of input we would be collecting from signup form
    //All input must be required and their names must match with the html forms
    $title = $con->real_escape_string($_POST['title']);
    $price = $con->real_escape_string($_POST['price']);

    //SQL code to update table
    $sql = "UPDATE `fee` SET`title`='$title',`price`='$price' WHERE `title` = '$title'";
    //query our SQL code
    $add = mysqli_query($con, $sql);
    if ($add) {
        //redirect admin to success page here !!!
        header("Location: ../admin/index.php");
    };
}
?>