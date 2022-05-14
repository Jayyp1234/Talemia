<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Price Update - Admin</title>
	<meta name="description"
        content="Talemia is an Edtech platform supporting early stage African founders to launch their startups faster than than they can do their own">
    <meta name="robots" content="index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large">
    <link rel="canonical" href="https://talemia.com/">
    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:title" content="Talemia - Launch Your Startup Faster">
    <meta property="og:description"
        content="Talemia is an Edtech platform supporting early stage African founders to launch their startups faster than than they can do their own">
    <meta property="og:url" content="https://talemia.com/">
    <meta property="og:site_name" content="Talemia">
    <meta property="og:updated_time" content="2022-04-09T10:51:25+01:00">
    <meta property="article:published_time" content="2018-10-14T12:21:59+01:00">
    <meta property="article:modified_time" content="2022-04-09T10:51:25+01:00">
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="Talemia - Launch Your Startup Faster">
    <meta name="twitter:description"
        content="Talemia is an Edtech platform supporting early stage African founders to launch their startups faster than than they can do their own">
    <meta name="twitter:label1" content="Written by">
    <meta name="twitter:data1" content="isaacdev">
    <meta name="twitter:label2" content="Time to read">
    <meta name="twitter:data2" content="10 minutes">
  	<!--icons link-->
  	<link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/css/css?family=Open+Sans:400,600">
    <link rel="stylesheet" href="../assets/css/css/css?family=Poppins:100,100i,200,200i,300,300i,400,…,600,600i,700,700i,800,800i,900,900i&display=swap">
    <link rel="stylesheet" href="../assets/css/css/css?family=Montserrat%3A100%2C100italic%2C200%2C20…talic%2C900%2C900italic&subset=cyrillic&ver=5.9.3">
    <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>
<style type="text/css">
   form input, form textarea{
     width:100%;
     display: block;
     border:1px solid #d4d4d4;
     margin-bottom:7px;
     border-radius:7px;
   }
   body{
    font-family:'Montserrat',Arial,Helvetica,sans-serif !important; 
}
.main-bg {
    background-color: #09099d !important;
    border-color: #09099d !important;
}.cond{
    max-width: 300px;
    margin: auto !important;
    background-color: white;
    height: 170px;
    display: block;
    border-radius: 15px;
    padding: 20px;
    box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    position: relative;
}.cond button{
    position: absolute;
    top:40%;
    right:20px;
    left:20px;
    width:calc(100% - 40px);
    
}

</style>
<?php
require('../backend/connection.php');
$sql = "SELECT * FROM fee WHERE 1";
$resulte = $con->query($sql);
if ($resulte->num_rows > 0) {
// output data of each row
    while($row = $resulte->fetch_assoc()) {
        $title = $row['title'];
        $price = $row['price'];
    }
}
?>
<body>
    <i class="icon-bars"></i>
    <nav>
        <br>
        <br>
        <div class="profiler" style="text-align: center;margin-top: 10px;line-height: 1.2;font-size: 14.5;font-weight: 600;">
            <img src="assets/images/pngkey.com-linea-punteada-png-4149828.png" style="width: 100px;height: 100px;display: block;margin: auto;">
            
        </div>
        <br>
        <ul>
            
            <li class="active" ><a href="dashboard.php"><i class="icon-dashboard"></i><span> Price Update</span> </a></li>
            <li><a href="newsletter.php"> <i class="icon-globe"></i> <span> Newsletter</span> </a></li>
            <li><a href="members.php"> <i class="icon-hdd-o"></i> <span> Members </span> </a></li>
            <li><a href="blog.php"> <i class="icon-child"></i> <span> Blogs </span> </a></li>
            <li><a href="transactions.php"> <i class="icon-square"> </i><span> Transactions </span> </a></li>
        </ul>
        <br>
    </nav>
    <main style="margin-right:0px;height:100vh;">
        <div style="box-shadow: rgb(0 0 0 / 24%) 0px 3px 8px;
    border-radius: 0px 0px 40px 40px;height: 50%; width: 100%; background: #09099d; text-align: center; position: relative;">
            <h1 style="color:white;font-size:50px;position:absolute;top:50%;left:50%;transform:translate(-50%,-50%)">₦ <?php echo number_format($price) ?></h1>
        </div>
        <br>
        <br>
        <div class="row cond" >
            <button type="button" class="btn main-bg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Update Price
            </button>
            <!-- Button trigger modal -->
            <?php
            require('../backend/connection.php');
            if (isset($_POST['submit'])) {
                    $title = $con->real_escape_string($_POST['title']);
                    $price = $con->real_escape_string($_POST['price']);
                    $sql = "UPDATE `fee` SET `title`='$title',`price`='$price' WHERE 1";
                    //query our SQL code
                    $add = mysqli_query($con, $sql);
                    if ($add) {
                        header("Location:dashboard.php");
                        ob_end_flush();
                    };
                }
            ?>
        </div>
        
    </main>

</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Update Price</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST">
      <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="title" class="form-control" id="exampleFormControlInput1">
            </div>
                <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Price</label>
            <input type="text" name="price" class="form-control" id="exampleFormControlInput1">
            </div>
            <div class="col-auto">
                <button type="submit" name="submit" class="btn main-bg btn-primary mb-3">Update</button>
            </div>
      </form>
      </div>
    </div>
  </div>
</div>
</body>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

<script>
    var d = new Date();
    document.getElementById("time").innerHTML = d.toDateString();
</script>
</html>
