<?php
require('connection.php');

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }
if (isset($_POST['subscribe'])) {
    //List of input we would be collecting from email subscription and news letter form
    //All input must be required and their names must match with the html forms
    $first_name = $con->real_escape_string($_POST['firstname']);
    $last_name = $con->real_escape_string($_POST['lastname']);
    $email = $con->real_escape_string($_POST['email']);

    if (!empty($first_name) && !empty($last_name) && !empty($email)) {
        if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
            //SQL code to insert all our values into the table names signup
    $sql = "INSERT INTO `email` (`firstname`, `lastname`, `email`) VALUES ('$first_name','$last_name','$email')";
    //query our SQL code
    $subscribe = mysqli_query($con, $sql);
            
          } else {
              //error page if email is not valid
          }
    }

    
    } 
else {
    header("Location:../index.php");
};
?>