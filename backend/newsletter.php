<?php
    include_once('../component/header1.php');
?>


<?php
require('connection.php');
if (isset($_POST['subscribe'])) {
        //List of input we would be collecting from email subscription and news letter form
        //All input must be required and their names must match with the html forms
        $first_name = $con->real_escape_string($_POST['firstname']);
        $last_name = $con->real_escape_string($_POST['lastname']);
        $email = $con->real_escape_string($_POST['email']);

        if (!empty($first_name) && !empty($last_name) && !empty($email)) {
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                //SQL code to insert all our values into the table names signup
                $sql = "INSERT INTO `email` (`firstname`, `lastname`, `email`) VALUES ('$first_name','$last_name','$email')";
                //query our SQL code
                $subscribe = mysqli_query($con, $sql);
                    if($subscribe){
                        $message = 'You have sucessfully subscribed to our mail box.';
                    }
              } 
              else {
                    $message = 'Invalid Email Address';
              }
        }
        else {
             header("Location:../index.php");
        };
    } 
else {
     header("Location:../index.php");
};
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Newsletter</title>
</head>
<body>
    <style>
        body{
            justify-content: center;
            align-items: center;
        }
        .box{
            height: 270px;
            width: 430px;
            box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
            background-color: #f3f3f336;
            border-radius: 10px;
            margin: 150px auto 50px;
            display: flex;
            justify-content: space-evenly;
            flex-direction: column;
            text-align: center;
            align-items: center;
        }
        .box a{
            background-color: #09099d;
            border-radius: 7px;
            color: #fff;
            font-size: 14px;
            font-weight: 600;
            padding:.8rem 2rem;
            transition: .4s ease-in-out;
        }
        .box a:hover{
           box-shadow: 0 0 10px -10px #09099d;
           transform: scale(1.01);
        }
        @media all (min-width: 426px){
            .box {
                height: 250px;
                width: 300px;
                box-shadow: 3px 0 20px -10px #aaa;
                margin: 120px auto 0px;
            }
            .box a{
                border-radius: 2rem;
            }
            .box a:hover{
                transform: scale(1.02);
            }
        }
        @media all and (max-width: 425px){
            .box {
                height: 230px;
                width: 260px;
                box-shadow: rgba(50, 50, 93, 0.25) 0px 2px 5px -1px, rgba(0, 0, 0, 0.3) 0px 1px 3px -1px;
                border-radius: 7px;
                margin: 100px auto;
            }
            .box a{
                font-size: 12px;
                border-radius: 2rem;
            }
            .box a:hover{
                box-shadow: 0 0 50px -10px #09099d;
                transform: scale(1.01);
            }
        }
    </style>
        <div class="row col-12 justify-content-center align-items-end" style="height:
        450px">
            <div class="box">
                <div class="">
                    <p><?php echo $message;?></p>
                </div>
                <a href="#" class="btn" onclick="window.history.back();">Back to previous page</a>
            </div>
        </div>
</body>
</html>

<?php
    include_once('../component/footer1.php');
?>
