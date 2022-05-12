<?php
  require('../backend/connection.php');
  $sql = "SELECT * FROM signup where 1 ";
  $query = mysqli_query($con,$sql);
  if($query){
    if(mysqli_num_rows($query) > 0){
      while($row = mysqli_fetch_assoc($query)){
        
      }
    }
  }


?>