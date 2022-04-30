<?php   
    include_once '../backend/connection.php';



?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>transactions</title>
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
    <link rel="stylesheet" href="../assets/datatables.min.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="preload" href="../assets/fonts/OpenSans-Regular.ttf" as='font' crossorigin='anonymous'>
    <link rel="preload" href="../assets/fonts/OpenSans-SemiBold.ttf" as='font' crossorigin='anonymous'>
    <link rel="preload" href="../assets/fonts/OpenSans-Bold.ttf" as='font' crossorigin='anonymous'>
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
</style>
<body>
    <i class="icon-bars"></i>
    <nav>
        <br>
        <br>
        <div class="profiler" style="text-align: center;margin-top: 10px;line-height: 1.2;font-size: 14.5;font-weight: 600;">
            <img src="assets/image/talemia-logo.png" style="width: 100px;height: 100px;display: block;margin: auto;">
            
        </div>
        <br>
        <ul>
            <li ><a href="dashboard.php"><i class="icon-dashboard"></i><span> Dashboard</span> </a></li>
            <li><a href="newsletter.php"> <i class="icon-globe"></i> <span> Newsletter</span> </a></li>
            <li><a href="members.php"> <i class="icon-hdd-o"></i> <span> Members </span> </a></li>
            <li ><a href="blog.php"> <i class="icon-child"></i> <span> Blogs </span> </a></li>
            <li class="active"><a href="transactions.php"> <i class="icon-square"> </i><span> Transactions </span> </a></li>
        </ul>
        <br>
    </nav>
    <main style="margin-right:5px;">
        <div class="intro-div">
            <b>Dashboard</b>
            <span id="time" class="time"></span>
        </div>
        <br>
        <section class="content-main">
            <div style="display:flex;justify-content:space-between;flex-wrap:wrap;">
                <div class="content-header" style="margin-bottom:0">
                    <h4> Transactions</h4>
                </div>
            </div>
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive">
                        <table id="example" class="display" style="width:100%">
                            <?php
                
                require('../backend/connection.php');
                $sql = "SELECT * FROM transaction INNER JOIN signup ON transaction.user_id = signup.id";
                $query = mysqli_query($con,$sql);
                 if($query){
                     if(mysqli_num_rows($query) > 0){
                         
                         $output = "<thead>
                         <tr>
                             <th>Name</th>
                             <th>Title</th>
                             <th>Price</th>
                         </tr>
                     </thead><tbody>";
                     while($row = mysqli_fetch_assoc($query)){
                         $output .="<tr>
                         <td>".strtoupper($row['name'])."</td>
                         <td>".strtoupper($row['title'])."</td>
                         <td>".number_format($row['price'])."</td>
                          
                   </tr>";
                     }
                 }else{
                     $output = '<b>You do not have any Transactions Yet</b>';
                 }
                 echo $output."</tbody>";
                 }
                
                ?>
                        </table>
                    </div> <!-- table-responsive end// -->
                </div> <!-- card-body end// -->
            </div> <!-- card end// -->


        </section> <!-- content-main end// -->
            
        
    </main>

</div>
</body>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
<script type="text/javascript" src="../assets/datatables.min.js"></script>
<script>
        $(document).ready(function () {
            $('#example').DataTable();
        });
    </script>
<script>
    var d = new Date();
    document.getElementById("time").innerHTML = d.toDateString();
</script>
</html>
