<?php
// Start the session
session_start();
?>
<?php
require('connection.php');


if (isset($_POST['subscribe'])) { 
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
    $startup_idea = $con->real_escape_string($_POST['startup']);
    $startup_age = $con->real_escape_string($_POST['age1']);
    
    //SQL code to insert all our values into the table names signup
    $sql = "INSERT INTO `signup`(`firstname`, `lastname`, `email`,  `phone`, `country`, `startup`, `gender`, `age`, `category`, `industry`, `stage`, `team`, `startup_age`, `startup_name`, `date_paid`, `date_expiry`, `payment_status`) VALUES
     ('$first_name','$last_name','$email','$phone_number','$country','$startup','$gender','$age','$category','$industry','$stage','$team','$startup_age','$startup_idea','0','0','owing')";
     //query our SQL code
     $signup = mysqli_query($con, $sql);
     if ($signup) {
      $email = $con->real_escape_string($_POST['email']);
      //session
      $_SESSION["email"] = $email;
      $_SESSION["name"] = $first_name.''.$first_name;
      $fees = "SELECT `price` FROM `fee` WHERE `id` = '1'";
      $fees_query = mysqli_query($con, $fees);
      while($row = mysqli_fetch_array($fees_query)){
        $price = $row['price']*100;
      }
// >>>>>>> 939ba273db06a2b5d81baf426a9c05a979051734
      // $price = 5000*100;
      $url = "https://api.paystack.co/transaction/initialize";
      $fields = [
        'email' => $email,
        'amount' => "100",
        'plan' => "PLN_30vj76m3qjulq12"
      ];
      $fields_string = http_build_query($fields);
      //open connection
      $ch = curl_init();

      //set the url, number of POST vars, POST data
      curl_setopt($ch,CURLOPT_URL, $url);
      curl_setopt($ch,CURLOPT_POST, true);
      curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
      curl_setopt($ch, CURLOPT_HTTPHEADER, array(
        "Authorization: Bearer sk_live_715f799648cc103446bdcba18b145ae99e0787f8",
        "Cache-Control: no-cache",
      ));

      //So that curl_exec returns the contents of the cURL; rather than echoing it
      curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

      //execute post
      $result = curl_exec($ch);
      $myarray = json_decode($result);
      $result2 = ($myarray->data->authorization_url);
       echo $result;
       header("Location: https://paystack.com/pay/gbjpd4728-");
    } else {
        echo 'error';
    }
}
    
?>