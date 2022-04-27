<?php
require('connection.php');

//Login for admin
if (isset($_POST['login'])) {
    $password = //admin password;
    $admin = $con->real_escape_string($_POST['user']);
    $pass = $con->real_escape_string($_POST['password']);
    if ($pass == $password) {


if (isset($_POST['update'])) {

    

    //List of input we would be collecting from signup form
    //All input must be required and their names must match with the html forms
    $title = $con->real_escape_string($_POST['title']);
    $price = $con->real_escape_string($_POST['price']);


    //SQL code to update table
    $sql = "UPDATE `fee` SET `id`='[value-1]',`title`='[value-2]',`price`='[value-3]' WHERE 1";
     //query our SQL code
     $add = mysqli_query($con, $sql);
}
 else {
    // include error 404 page here (page not found) here !!!
};
    if ($add) {
        //redirect admin to success page here !!!
    } else {
        //include error 500 or 200 (Server error) here !!!
    }
}
    
?>