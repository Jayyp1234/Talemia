<?php
require('connection.php');

//Login for admin

if (isset($_POST['update'])) {

    //List of input we would be collecting from signup form
    //All input must be required and their names must match with the html forms
    $title = $con->real_escape_string($_POST['title']);
    $price = $con->real_escape_string($_POST['price']);
    $id = $con->real_escape_string($_POST['id']);

    //SQL code to update table
    $sql = "UPDATE `fee` SET `title`='$title',`price`='$price' WHERE id = '$id' ";
    //query our SQL code
    $add = mysqli_query($con, $sql);
    if ($add) {
        //redirect admin to success page here !!!
    } else {
        //include error 500 or 200 (Server error) here !!!
    }
}
else {
    // include error 404 page here (page not found) here !!!
};    
?>