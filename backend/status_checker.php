<?php
  require('../backend/connection.php');
  $sql = "SELECT * FROM signup where 1 ";
  $date = time();
  $query = mysqli_query($con,$sql);
  if($query){
    if(mysqli_num_rows($query) > 0){
      while($row = mysqli_fetch_assoc($query)){
          $email = $row['email'];
          if ($date > $row['date_expiry']){
            $sql = "UPDATE `signup` SET `payment_status`='notpaid' where email ='$email' ";
            $update = mysqli_query($con, $sql);
            if ($update){
                echo 'changed';
            }
          }
      }
    }
  }


?>