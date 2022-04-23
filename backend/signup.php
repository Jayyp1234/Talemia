<?php
require('connection.php');
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }

if (isset($_POST['signup'])) {
    //List of input we would be collecting from signup form
    //All input must be required and their names must match with the html forms
    $first_name = $con->test_input($_POST['firstname']);
    $last_name = $con->test_input($_POST['lastname']);
    $phone_number = $con->test_input($_POST['phone']);
    $country = $con->test_input($_POST['country']);
    $startup = $con->test_input($_POST['startup']);
    $gender = $con->test_input($_POST['gender']);
    $age = $con->test_input($_POST['age']);
    $category = $con->test_input($_POST['category']);
    $industry = $con->test_input($_POST['industry']);
    $stage = $con->test_input($_POST['stage']);
    $team = $con->test_input($_POST['team']);
    $startup_idea = $con->test_input($_POST['idea']);


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