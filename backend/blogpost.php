<?php
    require('connection.php');

        //blog past with article
        $title = $con->real_escape_string($_GET['title']);
        $sql = "SELECT * FROM `blog` WHERE `title` = '$title'";
        $store = mysqli_query($con, $sql);


        //fetch sql data
        //display blog post
        while ($row = mysqli_fetch_array($store)) {
            echo "
                //add raw html codes here (".$row['column name here'].") 
            ";
        }
?>