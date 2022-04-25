<?php
    require('connection.php');

        //select top 3 latest blog from blog table
        $sql = "SELECT * FROM `blog` ORDER  BY `date` LIMIT 3";
        $store = mysqli_query($con, $sql);


        //fetch sql data
        while ($row = mysqli_fetch_array($store)) {
            echo "
                //add raw html codes here (".$row['column name here'].") 
            ";
        }
?>