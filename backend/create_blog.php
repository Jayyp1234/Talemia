<?php
include 'connection.php';
if (isset($_POST['body'])){
    $id = $_POST['id'];
    $text = $_POST['body'];
    $data = $_POST['html'];
    $publish = $_POST['publish'];
    $sql = "UPDATE `blog` SET `body`='$data',`text`='$text',`publish`='$publish' WHERE id = '$id'";
        $query = mysqli_query($con,$sql);
        if($query){
            echo '<div class="alert alert-primary" role="alert">
           <strong>Success</strong>
          </div>';
        }
        else{
            echo 'unseccsful';
        }
}

?>