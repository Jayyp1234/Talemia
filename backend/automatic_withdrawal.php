<?php
  require('../backend/connection.php');
  $fees = "SELECT `price` FROM `fee` WHERE 1";
  $fees_query = mysqli_query($con, $fees);
  while($row = mysqli_fetch_array($fees_query)){
      $price = $row['price']*100;
    }
  $sql = "SELECT * FROM signup where `payment_status` ='paid' ";
  $query = mysqli_query($con,$sql);
  if($query){
    if(mysqli_num_rows($query) > 0){
      while($row = mysqli_fetch_assoc($query)){
        $url = "https://api.paystack.co/transaction/charge_authorization";
        $fields = [
          'authorization_code' => $row['authorization'],
          'email' => $row['email'],
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
          "Authorization: Bearer SECRET_KEY",
          "Cache-Control: no-cache",
        ));
        
        //So that curl_exec returns the contents of the cURL; rather than echoing it
        curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 
        
        //execute post
        $result = curl_exec($ch);
        echo $result;
      }
    }
  }


?>