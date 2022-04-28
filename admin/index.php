
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Login-Page</title>
	<meta content=" Web Developer with a focus on Front-end and Mobile application." name="description">
  	<meta content="Okeke , Okeke Johnpaul , john's Biography , Johnpaul's Portfolio" name="keywords">
  	<!--icons link-->
  	<link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
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
            <img src="assets/images/pngkey.com-linea-punteada-png-4149828.png" style="width: 100px;height: 100px;display: block;margin: auto;">
            
        </div>
        <br>
        <ul>
            
            <li class="active" ><a href="dashboard.php"><i class="icon-dashboard"></i><span> Dashboard</span> </a></li>
            <li><a href="course.php"> <i class="icon-globe"></i> <span> Newsletter</span> </a></li>
            <li><a href="resources.php"> <i class="icon-hdd-o"></i> <span> Members </span> </a></li>
            <li><a href="challenge.php"> <i class="icon-child"></i> <span> Blogs </span> </a></li>
            <li><a href="Q&A.php"> <i class="icon-square"> </i><span> Transactions </span> </a></li>
        </ul>
        <ul class="logout">
            <li><a href="backend_data/logout.php"> <i class="icon-power-off"> </i> <span> Log out </span> </a></li>
        </ul>
        <br>
    </nav>
    <main style="margin-right:5px;">
        <div class="intro-div">
            <b>Dashboard</b>
            <span id="time" class="time"></span>
        </div>
        <br>
   
            
        
    </main>

</div>
</body>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>

<script>
    var d = new Date();
    document.getElementById("time").innerHTML = d.toDateString();
</script>
</html>
