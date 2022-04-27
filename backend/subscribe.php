<?php
require('connection.php');


if (isset($_POST['subscribe'])) {
    //Captcha verification
    $recap = $con->real_escape_string($_POST['reCaptcha']);
    $cap = $con->real_escape_string($_POST['cap']);
    if (!empty($cap) and $recap == $cap) {

    

    //List of input we would be collecting from signup form
    //All input must be required and their names must match with the html forms
    $first_name = $con->real_escape_string($_POST['firstname']);
    $email = $con->real_escape_string($_POST['email']);
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
('$first_name','$last_name','$phone_number','$country','$startup','$gender','$age','$category','$industry','$stage','$team','$startup_idea')";
     //query our SQL code
     $signup = mysqli_query($con, $sql);
}
else {
    header("Location: form.html");
}
}
 else {
    // include error 404 page here (page not found) here !!!
};
    if ($signup) {
        $email = $con->real_escape_string($_POST['email']);
        $price = 5000*100;
      $url = "https://api.paystack.co/transaction/initialize";
      $fields = [
        'email' => $email,
        'amount' => $price
      ];
      $fields_string = http_build_query($fields);
      //open connection
      $ch = curl_init();
      
      //set the url, number of POST vars, POST data
      curl_setopt($ch,CURLOPT_URL, $url);
      curl_setopt($ch,CURLOPT_POST, true);
      curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer sk_test_ac4d89634a3d332fa722a805cff6ccce5dfb158a",
        "Cache-Control: no-cache",
      ));
      
      //So that curl_exec returns the contents of the cURL; rather than echoing it
      curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
      
      //execute post
      $result = curl_exec($ch);
      $myarray = json_decode($result);
      $result2 = ($myarray->data->authorization_url);
      // echo $result;
      header("Location: $result2");
    } else {
        //include error 500 or 200 (Server error) here !!!
    }
    
?>