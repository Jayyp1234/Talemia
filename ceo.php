<?php
require('backend/connection.php');

if (!isset($_GET['txnref']) || !isset($_GET['reference'])){
    header('Location:https://talemia.com/');
}
else{
    $start = time();
    $finish = $start + (intval(1) * 30 * 3600);
    $status = 'paid';
    $email = $_SESSION['email'];
    //update database
    $sql = "UPDATE `signup` SET `date_paid`='$start',`date_expiry`='$finish',`payment_status`='$status' WHERE `email` = '$email'";
     //query our SQL code
     $update = mysqli_query($con, $sql);
     //done
}   
?>
<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="https://talemia.com/xmlrpc.php">

    <!-- Search Engine Optimization by Rank Math PRO - https://s.rankmath.com/home -->
    <title>Talemia - Welcome </title>
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

    <link rel="https://api.w.org/" href="https://talemia.com/wp-json/">
    <link rel="alternate" type="application/json" href="https://talemia.com/wp-json/wp/v2/pages/8236">
    <link rel="shortlink" href="https://talemia.com/">
    <link rel="alternate" type="application/json+oembed"
        href="https://talemia.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftalemia.com%2F">
    <link rel="alternate" type="text/xml+oembed"
        href="https://talemia.com/wp-json/oembed/1.0/embed?url=https%3A%2F%2Ftalemia.com%2F&amp;format=xml">
    <link rel="icon" href="https://talemia.com/wp-content/uploads/2021/12/cropped-favicon-new-32x32.png" sizes="32x32">
    <link rel="icon" href="https://talemia.com/wp-content/uploads/2021/12/cropped-favicon-new-192x192.png"
        sizes="192x192">
    <link rel="apple-touch-icon" href="https://talemia.com/wp-content/uploads/2021/12/cropped-favicon-new-180x180.png">
    <meta name="msapplication-TileImage"
        content="https://talemia.com/wp-content/uploads/2021/12/cropped-favicon-new-270x270.png">

    <!-- Style Sheet -->
    <link rel="icon" href="assets/image/icon-fav.png" type="type/png">
    <!--icons link-->
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/coming.css">
    <link rel="stylesheet" href="assets/css/animate/animate.min.css" type="text/css">
    <link rel="preload" href="assets/fonts/OpenSans-Regular.ttf" as='font' crossorigin='anonymous'>
    <link href="assets/css/style.css" rel="stylesheet">
    <link href="assets/css/ui.css?v=1.1" rel="stylesheet" type="text/css" />
    <link href="assets/css/responsive.css?v=1.1" rel="stylesheet" />
    <!-- iconfont -->
    <link rel="stylesheet" href="assets/fonts/material-icon/css/round.css" />
    </head>
    <body>
    <style>
    .btn-primary {
        color: #fff;
        background-color: #2d2da4;
        border-color: #2d2da4;
    }
    </style>
    
    <main class="main-wraper">
		<!-- Header -->
		<header class="header">
			<div class="container">
				<div class="row" style="align-items:center;">
					<div class="col-6">
						<div class="logo">
							<h2><a href="/"><img src="assets/image/logo.svg" width="150px"></a></h2>
						</div>
					</div>
					<div class="col-6">
						<div class="header-btn">
							<a href="mailto:talemiahq@gmail.com" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Contact <i class="icon-envelope"></i></a>
						</div>
					</div>
				</div>
			</div>
		</header>
        <br><br>
        <div class="container col-12 row align-items-center row position-relative">
        <div class="col-12 col-md-5 position-relative image-holder">
            <div class="background">
                <div class="circle"></div>
                <img src="assets/image/talemia-logo.jpg" class="img-fluid" alt="">
                <i class="icon-bubble_chart"></i>
            </div>
            <img src="assets/image/talemia-iamge-768x728.jpeg" alt="" class="img-fluid">            
        </div>
        

        <div class="col-12 col-md-6 letter row">
            <img src="assets/image/Talemia-header-illustration.svg"  class="img-fluid" alt="">
            <b>Dear Builder,</b>
            <p class="col-12">This is Victor.<br> I thought to personally send you this congratulatory note myself. You have made an incredible decision getting into Buildr. I personally think that you’re on the <strong>‘’Guinness World Records of Courageous People’’</strong>. I am not flattering you in any way. One of the most challenging things anyone could do is <strong> launch their own startup</strong>. It takes courage to decide that you’re going to find a problem and build  something that solves that problem<br><br>

One of the reasons I started Talemia is to make this challenging journey easier, seamless and faster. I believe if there’s a way to do something, there’s even a faster way to do it. I have personally found out that ‘’Knowledge’’ isn’t what’s stopping people. Execution is our biggest stopper. You can almost google anything right now. What Talemia is doing through our community product - ‘Buildr’ is to simplify knowledge so that execution can happen seamlessly<br><br>

Our biggest promise to you is getting you to move from <strong>0 to 1</strong>. Our product is built around the model of <strong>‘’Micro-Execution’’</strong>. It is 0 to 1 before 10, 100, 1000, 10,000, 100,000 and then 1 million. <br><br>

I feel this note isn’t enough to capture the message in my heart to you. I made a very special video for you. But first, let’s get you into the <strong> Buildr Community</strong>. It’s <strong>super important</strong> to watch this video after you get into the community</p>
            <div>
                <div class="row col-12 text-start align-items-center">
                    <h5> - <span>CEO, Talemia.</span></h5>
                </div>
                <span><h5></h5></span>
            </div>
            <div class="text-start m-0">
                <a href="https://chat.whatsapp.com/HgAmC9DEe3MFG1JY3hIWlL" class="col-10 col-md-2 text-start">
                    <div class=""><h5>Get in here</h5></div>
                    <i class="icon-trending_flat"></i>
                </a>
            </div>
        </div>
        

        
    </div>
</main>
    <style>
        @font-face {
    font-family:OpenSans;
    src:url('assets/fonts/OpenSans-Regular.ttf');
}
:root{
    --blue: #09099d;
    --smokewhite: rgba(247,248,253);
    --lightdark: #2d2a38;
    --fontcolor: #7b8397;
    --white: #fff;
    --black: #151221;
    --font1: 'Poppins', OpenSans;
}
*{
    padding: 0;
    margin: 0;
    font-family: var(--font1);
}
* i{
    font-weight: normal;
}
a{
    text-decoration: none !important;
}
h1, h2, h3, h4, h5, h6, p{
    font-weight: normal;
    margin: unset;
}
ul, li{
    list-style-type: none;
    list-style: none;
    margin: unset;
}
header {
    padding: .8pc 5pc 0;
    width: 100%;
}
header .img-fluid {
    width: 15%;
}
body{
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}
.container{
    padding: 0;
    justify-content: space-between;
    column-gap: 20px;
}
.container .image-holder .background{
    position: absolute;
    width: 300px;
    height: 90vh;
    top: -43vh;
    overflow: hidden;
    border-radius: 10px;
    z-index: -1;
    background-color: var(--blue);
}
.container .image-holder .background .circle{
    border-radius: 100%;
    top: -3%;
    position: absolute;
    left: -10%;
    width: 100px;
    height: 100px;
    border: 4px solid white;
}
.container .image-holder .background > img{
    top: 0;
    left: 75%;
    position: relative;
    border-radius: 100%;
    width: 20%;
}
.container .image-holder .background > i{
    transform: rotateY(180deg);
    color: #fff;
    font-size: 8pc;
    position: absolute;
    bottom: 6%;
    left: -5px;
}
.container .image-holder img{
    border-radius: 1.2rem;
    width: 90%;
    position: absolute;
    top: -32vh;
    left: 20%;
}
.letter {
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    position: relative;
    padding: 0;
}
.letter img{
    position: absolute;
    opacity: .13;
    width: 55%;
}
.letter b{
    font-weight: bolder;
    font-size: 2.4rem;
    text-transform: capitalize;
    padding: 0;
}
.letter a{
    display: flex;
    background-color: var(--blue);
    color: var(--white);
    align-items: center;
    padding: 0.8rem 5em;
    text-transform: capitalize;
    border-radius: 5px;
    justify-content: center;
    margin-top: 2pc;
}
.letter p{
    padding: 0;
    margin-top: .8pc;
}
.letter > div span, .letter > div h5{ 
    font-size: 1rem;
}
.letter > div {
    padding: 0;
    margin-top: 1.2pc;
}
.letter a > div h5{
    white-space: nowrap;
    font-size: 16px;
}
.letter a > i{
    font-size: 1.2rem;
    transition: all 0.3s ease-in-out;
    opacity: 0;
    visibility: hidden;
}
.letter a:hover > i{
    margin-left: 7px;
    opacity: 1;
    visibility: visible;
}


@media (min-width: 767.5px) and (max-width: 991px){
    header {
        padding: 0.5pc 2.3rem 0;
    }
    header .img-fluid {
        width: 16%;
    }
    .container .image-holder .background {
        width: 230px;
    }
    .container .image-holder img {
        border-radius: .8rem;
        top: -20vh;
        left: 30%;
    }
    .container .image-holder .background > i {
        font-size: 7pc;
        left: -10px;
    }
    .letter p {
        margin-top: 0.5pc;
        font-size: 14px;
    }
    .letter b {
        font-size: 1.9rem;
    }
    .letter img {
        width: 60%;
        padding: 0;
    }
    :is(.letter p, .letter > div h5, .letter > div span){
      font-size: .9rem;
    }
    .letter a > div h5 {
        font-size: 14px;
    }
}


@media (min-width: 320px) and (max-width: 575.98px){
    header {
        padding: 0.2pc 12px 0;
    }
    header .img-fluid {
        width: 30%;
    }
    .container{
        all: unset;
    }
    .container .image-holder .background{
        position: relative;
        width: 200px;
        height: 70vh;
        top: 10px;
        border-radius: 0.5rem;
    }
    .container .image-holder .background .circle {
        top: -3%;
        left: -10%;
        width: 70px;
        height: 70px;
        border: 3px solid white;
    }
    .container .image-holder > img{
        border-radius: 0.8rem;
        width: 75%;
        top: 18%;
        height: 47vh;
        left: 20%;
    }
    .container .image-holder .background > i {
        font-size: 5pc;
    }
    .letter {
        justify-content: center;
        align-items: center;
        position: relative;
        margin: 3pc auto 0;
        padding: 0 1pc;
    }
    .letter img{
        display: none;
    }
    .letter b{
        font-size: 1.2rem;
        text-align: center;
    }
    .letter p{
        font-size: 12px;
        text-align: justify;
    }
    .letter a {
        margin: 2pc auto;
    }
    .letter > div {
        margin-top: 1pc;
    }
    .letter > div span, .letter > div h5{ 
        font-size: 12px;
    }
    .letter a > div h5{
        font-size: 12px;
    }
    .letter a > i{
        font-size: 1rem;
    }
    .letter a:hover > i{
        margin-left: 7px;
    }



}

    </style>
    


















    <script src="js/bootstrap.min.js"></script>
    
</body>
</html>