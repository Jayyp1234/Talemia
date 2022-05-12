<?php

function likes($id){
    require('backend/connection.php');
    $sql = "SELECT COUNT(*) AS count FROM `likes` WHERE blog_id = '$id'";
    $query = mysqli_query($con, $sql);
    //fetch sql data
    if($query){
        $data = 0;
        if(mysqli_num_rows($query) > 0){
            while ($row = mysqli_fetch_array($query)) {
                $data = $row['count'];
            }
        }
    }
    return $data;
}
function comments($id){
    require('backend/connection.php');
    $sql = "SELECT COUNT(*) AS count FROM `comments` WHERE blog_id = '$id'";
    $query = mysqli_query($con, $sql);
    //fetch sql data
    if($query){
        $data = 0;
        if(mysqli_num_rows($query) > 0){
            while ($row = mysqli_fetch_array($query)) {
                $data = $row['count'];
            }
        }
    }
    return $data;
}

?>