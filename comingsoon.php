<html>
    <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="profile" href="http://gmpg.org/xfn/11">
    <link rel="pingback" href="https://talemia.com/xmlrpc.php">

    <!-- Search Engine Optimization by Rank Math PRO - https://s.rankmath.com/home -->
    <title>Talemia - Coming Soon </title>
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
    }@media all and (max-width:600px){
        .heartbeat, .heartbeat1{
            display: none;
        }.hero-caption h2 {
            font-size: 33px;
        }.hero-caption p {
            font-size: 15px;
            line-height: 25px;
        }
    }
    </style>
    
    <main class="main-wraper">
		<div class="shap heartbeat1"></div>
		<div class="shap1 heartbeat"></div>
		<div class="shap2 heartbeat"></div>
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
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Contact <i class="icon-envelope"></i></a>
						</div>
					</div>
				</div>
			</div>
		</header>
        <?php
    if (isset($_POST['email']) && isset($_POST['message'])){
             //mailing 
             $to = 'talemiahq@gmail.com';
             // Subject
             $subject = $_POST['email'];
             // Message
             $emailMsg = $_POST['message'];
             $title = $_POST['title'];
             $message = "
             <html>
             <head>
               <title>'".$title."'</title>
             </head>
             <body>
               <p> '".$emailMsg."'</p>
             </body>
             </html>
             ";
             //we want ot send html mail...
             $headers  = 'MIME-Version: 1.0' . "\r\n";
             $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
             // To send HTML mail, the Content-type header must be set
              $headers .= 'X-Mailer: PHP/' . phpversion();
             
             mail('<'.$to.'>',$subject,$message,$headers);
             echo '<div class="alert alert-primary" role="alert">
             Message Successfully sent
           </div>';
    }

    ?>
		<!-- Hero Area -->
		<section class="hero-area">
			<div class="container">
				<div class="row">
					<div class="col-lg-6">
						<div class="hero-caption">
							<h2>We’re Making a Pivot</h2>
							<p class="mb-5" style="font-weight:900;">Hey,<br>
                            Nope you didn’t miss your way. We’re currently working and would be back in best shape, Do you need anything for your startup? Shoot us an email. We’re super responsive. Try Us </p>
                            
						<div class="header-btn" style="text-align:left">
							<a href="#" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">Send us a message <i class="icon-envelope"></i></a>
						</div>
					
							<!--
                            <div class="form">
								<form action="#" style="display: flex;">
									<input type="email" name="email" placeholder="Your Email Address" style="padding: 12px;width: 250px;margin: 0;">
									<input type="submit" value="Subscribe" style="color: white;background-color: #09099d;padding: 0 10px;font-weight: 600;" >
								</form>
							</div>
                            -->
						</div>
					</div>
					<div class="col-lg-6">
                        <br><br>
						<div class="count-dwon-area">
							<ul>
								<li style="background-color:#09099d;"><p id="day" style="color:#fff;"></p><span>days</span></li>
								<li style="background-color:#09099d;"><p id="hour" style="color:#fff;"></p><span>Hours</span></li>
								<li style="background-color:#09099d;"><p id="min" style="color:#fff;"></p> <span>Min</span></li>
								<li style="background-color:#09099d;"><p id="secs" style="color:#fff;"></p> <span>Sec</span></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!-- Hero Area -->
		<!-- Footer  -->
		<footer class="footer">
			<div class="container">
				<div class="row">
					<div class="col-12 text-center">
						<div class="social">
							<ul>
								<li><a href="https://www.facebook.com/talemiahq/" target="_blank"><i class="icon-facebook"></i></a></li>
								<li><a href="https://twitter.com/talemiahq"><i class="icon-twitter"></i></a></li>
								<li><a href="https://www.instagram.com/talemiahq/" ><i class="icon-instagram"></i></a></li>
								<li><a href="https://www.youtube.com/channel/UC1dkVjj2eggU7Hy3slFI1lw" ><i class="icon-youtube"></i></a></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- Footer  -->
	</main>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Send message</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="" method="POST" class="message">
          <div class="mb-3">
            <label for="recipient-name" class="col-form-label">Recipient Email:</label>
            <input type="email" class="form-control" name='email' id="recipient-name" required>
          </div>
          <div class="mb-3">
            <label for="title" class="col-form-label">Subject:</label>
            <input type="text" class="form-control" name='title' id="title" required>
          </div>
          <div class="mb-3">
            <label for="message-text" class="col-form-label">Message:</label>
            <textarea name='message' class="form-control" id="message-text" required></textarea>
          </div>
          <div class="mb-3" style="display:grid">
          <button type="button" class="btn btn-primary">Send message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</div>
    </body>
    
<p id="demo"></p>
<!-- JavaScript Bundle with Popper -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<script>
    $('.btn-primary').on('click', function(){
        $('.message').submit();
    });
</script>
<script>
// Set the date we're counting down to
var countDownDate = new Date("May 20, 2022 15:37:25").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);

  // Display the result in the element with id="demo"
  document.getElementById("day").innerHTML = days;
  document.getElementById("hour").innerHTML = hours;
  document.getElementById("min").innerHTML = minutes;
  document.getElementById("secs").innerHTML = seconds;

  // If the count down is finished, write some text
  if (distance < 0) {
    clearInterval(x);
  }
}, 1000);
</script>
</html>