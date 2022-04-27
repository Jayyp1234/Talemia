<?php
require('connection.php');


if (isset($_POST['subscribe'])) {
    //List of input we would be collecting from email subscription and news letter form
    //All input must be required and their names must match with the html forms
    $first_name = $con->real_escape_string($_POST['firstname']);
    $last_name = $con->real_escape_string($_POST['lastname']);
    $email = $con->real_escape_string($_POST['email']);


    //SQL code to insert all our values into the table names signup
    $sql = "INSERT INTO `email` (`firstname`, `lastname`, `email`) VALUES
     ('$first_name','$last_name','$email')";
     //query our SQL code
     $subscribe = mysqli_query($con, $sql);
} else {
    // include error 404 page here (page not found) here !!!
};
    if ($subscribe) {
        //redirect users to success page here !!!
    } else {
        //include error 500 or 200 (Server error) here !!!
    }
?>