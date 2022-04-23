<?php
require('connection.php');


if (isset($_POST['signup'])) {
    //List of input we would be collecting from signup form
    //All input must be required and their names must match with the html forms
    $first_name = $con->real_escape_string($_POST['firstname']);
    $last_name = $con->real_escape_string($_POST['lastname']);
    $phone_number = $con->real_escape_string($_POST['phone']);
    $country = $con->real_escape_string($_POST['country']);
    $startup = $con->real_escape_string($_POST['startup']);
    $gender = $con->real_escape_string($_POST['gender']);
    $age = $con->real_escape_string($_POST['age']);
    $category = $con->real_escape_string($_POST['category']);
    $industry = $con->real_escape_string($_POST['industry']);
    $stage = $con->real_escape_string($_POST['stage']);
    $team = $con->real_escape_string($_POST['team']);
    $startup_idea = $con->real_escape_string($_POST['idea']);


    //SQL code to insert all our values into the table names signup
    $sql = "INSERT INTO `signup`(`firstname`, `lastname`, `phone`, `country`, `startup`, `gender`, `age`, `category`, `industry`, `stage`, `team`, `idea`) VALUES
     ('$first_name','$last_name','$phone_number','$country',$startup','$gender','$age','$category','$industry','$stage','$team','$startup_idea')";
     //query our SQL code
     $signup = mysqli_query($con, $sql);
} else {
    // include error 404 page here (page not found) here !!!
};
    if ($signup) {
        //redirect users to subscription page here !!!
    } else {
        //include error 500 or 200 (Server error) here !!!
    }
?>