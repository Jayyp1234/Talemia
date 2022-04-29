<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Admin - Login</title>
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
    <link rel="stylesheet" href="../assets/css/css/css?family=Open+Sans:400,600">
    <link rel="stylesheet" href="../assets/css/css/css?family=Poppins:100,100i,200,200i,300,300i,400,…,600,600i,700,700i,800,800i,900,900i&display=swap">
    <link rel="stylesheet" href="../assets/css/css/css?family=Montserrat%3A100%2C100italic%2C200%2C20…talic%2C900%2C900italic&subset=cyrillic&ver=5.9.3">
  	<link rel="stylesheet" href="../assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link href="../assets/css/dashboard.css" rel="stylesheet">
</head>
<style type="text/css">
:root{
  --main-bg:#09099D;
}
body{
    font-family:'Montserrat',Arial,Helvetica,sans-serif !important; 
}
.main-bg {
  background: var(--main-bg) !important;
}

input:focus, button:focus {
  border: 1px solid var(--main-bg) !important;
  box-shadow: none !important;
}

.form-check-input:checked {
  background-color: var(--main-bg) !important;
  border-color: var(--main-bg) !important;
}

.card, .btn, input{
  border-radius:0 !important;
}

</style>
<body>
    
<body class="main-bg">
  <!-- Login Form -->
  <div class="container">
    <div class="row justify-content-center mt-5">
      <div class="col-lg-5 col-md-6 col-sm-6">
        <div class="card shadow">
          <div class="card-title text-center border-bottom">
            <h2 class="p-3">Admin Login</h2>
          </div>
          <?php
            require('../backend/connection.php');
                if (isset($_POST['login'])) {
                    $password = 12345;
                    $user = 'talemia';
                    $admin = $con->real_escape_string($_POST['email']);
                    $pass = $con->real_escape_string($_POST['password']);
                    if ($pass == $password && $user == $admin) {
                        $_SESSION['user'] = $admin;
                        header('Location:dashboard.php');
                        ob_end_flush();
                    }
                    else{
                        echo '<div class="alert alert-danger" role="alert">
                        Incorrect Details
                      </div>';
                    }
                    
                }
                ?>
          <div class="card-body">
            <form action="" method="POST">
              <div class="mb-4">
                <label for="username" class="form-label">Username/Email</label>
                <input type="text" name="email" class="form-control" id="username" />
              </div>
              <div class="mb-4">
                <label for="password" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="password" />
              </div>
              <div class="d-grid">
                <button type="submit" name="login" class="btn text-light main-bg">Login</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>
</body>
<script>
</script>
</html>
