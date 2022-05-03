
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Newsletter</title>
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
    <link rel="preload" href="../assets/fonts/OpenSans-Regular.ttf" as='font' crossorigin='anonymous'>
    <link rel="preload" href="../assets/fonts/OpenSans-SemiBold.ttf" as='font' crossorigin='anonymous'>
    <link rel="preload" href="../assets/fonts/OpenSans-Bold.ttf" as='font' crossorigin='anonymous'>
    <link rel="stylesheet" href="../assets/css/msg2users.css">
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
            <img src="../assets/image/pngkey.com-linea-punteada-png-4149828.png" style="width: 100px;height: 100px;display: block;margin: auto;">
            
        </div>
        <br>
        <ul>
            
            <li ><a href="dashboard.php"><i class="icon-dashboard"></i><span> Dashboard</span> </a></li>
            <li class="active"><a href="newsletter.php"> <i class="icon-globe"></i> <span> Newsletter</span> </a></li>
            <li><a href="members.php"> <i class="icon-hdd-o"></i> <span> Members </span> </a></li>
            <li ><a href="blog.php"> <i class="icon-child"></i> <span> Blogs </span> </a></li>
            <li><a href="transactions.php"> <i class="icon-square"> </i><span> Transactions </span> </a></li>
        </ul>
        <br>
    </nav>
    <main style="">
    <div class="container">
        <div class="row col-12 text-center align-items-end align-items-md-center">
            <div class="col-md-12 text-center mx-auto text-center newsletter">
            <h3 class="d-none d-md-block">Send Newsletter</h3>
                <img src="../assets/image/newsletter.jpeg" alt="" class="img-fluid">
            </div>
            <div class="col-10 col-md-12 mx-auto text-center newsletter">
                
                <form>
                    <a class="d-block d-md-none" href="subscribers.php" style="text-transform: uppercase;border-radius: 30px;transition: .4s ease-in-out;border: none;color: white;background-color: #09099d;">View Newsletter</a>
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">ADD NEWSLETTER</a>
                    
                <a href="subscribers.php" class="btn d-none d-md-block">View newsletter list</a>
                </form>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModalToggle" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel">Newsletter</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form>
                        <div class="mb-2">
                            <label for="title" class="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="title" >
                        </div>
                        <div class="mb-2">
                            <label for="subject" class="col-form-label">Subject:</label>
                            <input type="text" class="form-control" id="subject">
                        </div>
                        <div class="text-area">
                            <label for="message-text" class="col-form-label">Message:</label>
                            <textarea class="form-control" id="message-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary preview-btn" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal" data-bs-dismiss="modal">Preview</button>
                </div>
            </div>
        </div>
      </div>
      <div class="modal fade" id="exampleModalToggle2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel2" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalToggleLabel2">Preview</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body preview-summary">
                    <div>
                        <h5>Title:</h5>
                        <h6 class='title'></h6>
                    </div>
                    <div>
                        <h5>Subject:</h5>
                        <h6 class='subject'></h6>
                    </div>
                    <div>
                        <h5>Message:</h3>
                        <p class='message-text'></p>
                    </div>
                    
                </div>
                <div class="modal-footer">
                    <form action="">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Send</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
        
    </main>

</div>
</body>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script>
    $(document).ready(function(){
        $(document).on('click','.preview-btn', function(){
            $('.title').text($('#title').val());
            $('.subject').text($('#subject').val());
            $('.message-text').text($('#message-text').val());
        });
    });
</script>
</html>
