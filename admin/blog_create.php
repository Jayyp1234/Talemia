<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>BLog Edit - Admin</title>
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" >
    <!-- iconfont -->
    <link rel="stylesheet" href="../assets/fonts/material-icon/css/round.css" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.4.1/css/mdb.min.css" rel="stylesheet">
    
</head>
<style type="text/css">
   form input, form textarea{
     width:100%;
     display: block;
     border:1px solid #d4d4d4;
     margin-bottom:7px;
     border-radius:7px;
   }.hm-gradient {
    background-image: linear-gradient(to top, #f3e7e9 0%, #e3eeff 99%, #e3eeff 100%);
}
.darken-grey-text {
    color: #2E2E2E;
    font-weight:600;
}
.input-group.md-form.form-sm.form-2 input {
    border: 1px solid #bdbdbd;
    border-top-left-radius: 0.25rem;
    border-bottom-left-radius: 0.25rem;
}
.input-group.md-form.form-sm.form-2 input.purple-border {
    border: 1px solid #9e9e9e;
}
.input-group.m-form.form-sm.form-2 input[type=text]:focus:not([readonly]).purple-border {
    border: 1px solid #ba68c8;
    box-shadow: none;
}
.form-2 .input-group-addon {
    border: 1px solid #ba68c8;
}
.btn-primary {
    background-color: #09099d !important;
}
.danger-text {
    color: #ff3547; 
}  
.success-text {
    color: #00C851; 
}
.bg-light {
    background-color: #09099d !important;
    color: white !important;
}
</style>
<body>
    <i class="icon-bars"></i>
    <nav style="z-index: 10;">
        <br>
        <br>
        <div class="profiler" style="text-align: center;margin-top: 10px;line-height: 1.2;font-size: 14.5;font-weight: 600;">
            <img src="assets/image/talemia-logo.png" style="width: 100px;height: 100px;display: block;margin: auto;">
            
        </div>
        <br>
        <ul>
            <li ><a href="dashboard.php"><i class="icon-dashboard"></i><span> Price Update</span> </a></li>
            <li ><a href="newsletter.php"> <i class="icon-globe"></i> <span> Newsletter</span> </a></li>
            <li><a href="members.php"> <i class="icon-hdd-o"></i> <span> Members </span> </a></li>
            <li class="active"><a href="blog.php"> <i class="icon-child"></i> <span> Blogs </span> </a></li>
            <li ><a href="transactions.php"> <i class="icon-square"> </i><span> Transactions </span> </a></li>
        </ul>
        <br>
    </nav>
    <main style="margin-right:5px;">
        <!-- Heading -->
  <div class="p-3 bg-light mb-4">
    <h1 class="">Create Blog</h1>
    <!-- Breadcrumb -->
    <nav class="d-flex" style="position:static;width:90%;background-color:transparent;margin:0;margin-left: -10px !important;">
      <h6 class="mb-0">
        <a href="dashboard.php" class="text-reset">Home</a>
        <span>/</span>
        <a href="blog.php" class="text-reset">Blog</a>
        <span>/</span>
        <a href="blog_create.php" class="text-reset">Create</a>
      </h6>
    </nav>
    <!-- Breadcrumb -->
  </div>
  <div class="heaven container"></div>
  <!-- Heading -->
        <br>
<?php
    if (isset($_GET['id'])){
        require('../backend/connection.php');
        $id = $_GET['id'];
        $sql = "SELECT * FROM blog where id = '$id' ";
        $query = mysqli_query($con,$sql);
        if($query){
            if(mysqli_num_rows($query) > 0){
                while($row = mysqli_fetch_assoc($query)){
                    $text = $row['text'];
                }
            }
        }
    }
?>
        <section class="content-main container">
        <form action="" method="POST">

        <textarea class="content" name ="body">
            <?php echo $text; ?>
        </textarea>
        <br>
        <div class="container-fluid">
        <label class="form-check-label" for="flexSwitchCheckDefault"><b> Do you want to Publish your Blog now ?</b></label>
        <select class="form-select form-select mb-3">
        <option value="yes">yes</option>
        <option value="no">no</option>
        </select>
        </div>
        <input type="hidden" name="html" class="html"/>
        <div class="d-grid gap-2">
            <input type="submit" class="btn save_changes btn-primary" name="submit" value="Save Changes">
        </div>
        </form>
        </section> 
    </main>

</div>
</body>
<script type="text/javascript" src="../assets/js/jquery.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../assets/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.tiny.cloud/1/7t0yeydbn28ienxqq4hdusfn9ltpn1p5cdhuwyq8k2usnndn/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
      selector: 'textarea',
      plugins: 'a11ychecker advcode casechange export formatpainter image editimage linkchecker autolink lists checklist media mediaembed pageembed permanentpen powerpaste table advtable tableofcontents tinycomments ',
      toolbar: 'a11ycheck addcomment showcomments casechange checklist code export formatpainter image editimage pageembed permanentpen table tableofcontents',
      toolbar_mode: 'floating',
      tinycomments_mode: 'embedded',
      tinycomments_author: 'Author name',
    });
    // Alerts the currently selected contents
    $('.save_changes').on('click', function (e) {
            e.preventDefault();
            var id = <?php echo $id; ?>;
            $.ajax({
                url: '../backend/create_blog.php',
                type: 'POST',
                data: {
                    'id': id,
                    'body': $("#mce_0_ifr").contents().find('#tinymce').text(),
                    'html': '<div class="entry-content">'+ $("#mce_0_ifr").contents().find('#tinymce').html()+ '</div>',
                    'publish': $('.form-select').val()
                },
                beforeSend: function() {
                    $(this).val('Loading...');
                },
                success: function (response) {
                    $('.heaven').html(response);

                }
            });
        });
</script>


</html>