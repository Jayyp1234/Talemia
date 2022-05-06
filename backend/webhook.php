<?php
include "connection.php";

header('Access-Control-Allow-Origin: *');

$body = @file_get_contents("php://input");

$reqBody = json_decode($body, true);
$time = time();

if(isset($reqBody['data'])){
    $status = $reqBody['data']['status'];
    $email = $reqBody['data']['customer']['email'];
    $auth = $reqBody['data']['authorization']['authorization_code'];
    if ($status == 'success' || $status == true){
        $start = time();
        $finish = $start + (intval(1) * 30 * 3600);
        $status = 'paid';
        $fees = "SELECT * FROM `fee` WHERE `id` = '1'";
        $fees_query = mysqli_query($con, $fees);
        while($row = mysqli_fetch_array($fees_query)){
            $title = $row['title'];
            $price = $row['price'];
        }
        $sql = "UPDATE `signup` SET `date_paid`= '$start',`date_expiry`= '$finish',`payment_status`='$status', `authorization` = '$auth' WHERE `email` = '$email'";
        $sql2 = "INSERT INTO `transaction`(`name`, `title`, `amount`, `time_stamp`) VALUES ('$name','$title','$price','$start')";
        //      query our SQL code
        $update = mysqli_query($con, $sql);
        $insert = mysqli_query($con, $sql2);
        echo 'success';
    }
} 
else {
    echo 'could not upload';
}

    

































    


