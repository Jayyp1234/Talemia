<?php
   //$servername = "server266.web-hosting.com";
   //$username = "talecmqj_johnpaul";
   //$password = "+4lI9VBxd2lf";
   //$database = "talecmqj_talemia";

   $servername = "localhost";
   $username = "root";
   $password = "";
   $database = "talemia";
    
    // Create connection to database
    $con = mysqli_connect($servername, $username, $password, $database);
    
    // Check connection
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }

?>