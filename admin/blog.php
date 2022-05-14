<?php
ob_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
	<title>Blog - Admin</title>
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
}.material-icons {
    color: black;
}.btn {
    font-size: .8rem;
    padding: 5px 7px;
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
.danger-text {
    color: #ff3547; 
}  
.success-text {
    color: #00C851; 
}
.table-bordered.red-border, .table-bordered.red-border th, .table-bordered.red-border td {
    border: 1px solid #ff3547!important;
}        
.table.table-bordered th {
    text-align: center;
}.dataTables_wrapper .dataTables_paginate .paginate_button.current, .dataTables_wrapper .dataTables_paginate .paginate_button.current:hover {
    color: #fff !important;
    border: 1px solid #09099d !important;
    background: -webkit-linear-gradient(top, #0275d8 0%, #09099d 100%);
    background: -moz-linear-gradient(top, #0275d8 0%, #09099d 100%);
    background: -ms-linear-gradient(top, #0275d8 0%, #09099d 100%);
    background: -o-linear-gradient(top, #0275d8 0%, #09099d 100%);
    background: linear-gradient(to bottom, #0275d8 0%, #09099d 100%) !important;
}table.dataTable tbody th, table.dataTable tbody td {
    font-weight: 400;
    color: #6a6a6a;
    padding: 8px 10px;
    font-size:13px !important;
}label{
    display: flex;
    align-items: center;
}.bg-light {
    background-color: #09099d !important;
    color: white !important;
}.form-label {
    margin-bottom: 0 !important;
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
    <h1 class="">Blog</h1>
    <!-- Breadcrumb -->
    <nav class="d-flex" style="position: static;width: 95%;justify-content: space-between;background-color: transparent;margin: 0;margin-left: -10px !important;align-items: center;">
      <h6 class="mb-0">
        <a href="dashboard.php" class="text-reset">Home</a>
        <span>/</span>
        <a href="blog.php" class="text-reset">Blog</a>
      </h6>
      <button type="button" class="btn main-bg btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
            Create Blog
            </button>
    </nav>
    <!-- Breadcrumb -->
  </div>
  <!-- Heading -->
        <br>
        <!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Create Blog</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Title</label>
            <input type="text" name="title"  class="form-control" id="exampleFormControlInput1">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput2" class="form-label">Author</label>
            <input type="text" name="author"  class="form-control" id="exampleFormControlInput2">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput5" class="form-label">Duration</label>
            <input type="text" name="duration"  class="form-control" id="exampleFormControlInput5">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Category</label>
            <select class="form-select" name="category" aria-label="Default select example">
                <option value="Press Release" selected>Press Release</option>
                <option value="Startup Tip">Startup Tip</option>
                <option value="Success Stories">Success Stories</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label" >Tags</label>
            <input type="text" name="tags" class="form-control" id="exampleInputEmail1">
            <small id="emailHelp" class="form-text text-muted">Seperate the tags ny comma.</small>
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput3" class="form-label">Image(Optional)</label>
            <input type="file" name="image"  class="form-control">
        </div>
        <div class="col-auto">
            <button type="submit" name="submit" class="btn main-bg btn-primary mb-3">Create</button>
        </div>
      </form>
      <?php
        $error = [];
        function validateFile($file){
            $newFileName= "";
            //allowed extension - pics/pdf
            $allowedExtension = ['jpg','pdf','png','jpeg'];
            $filename = $file['name'];
            //split name to get extenstion..
            $splittedname =  explode('.',$filename);
            $fileExtension = end($splittedname);
            if(in_array(strtolower($fileExtension),$allowedExtension) ){
                if($file['size'] < 10000000 ){
                    $newFileName = md5($filename).uniqid().".".$fileExtension;
                }else{
                    array_push($errors,'File is too large...');
                }
            }else{
                array_push($errors,'You cannot upload file extension of '.$fileExtension);
            }
            
            return ['filename' => $newFileName,'source' => $file['tmp_name'] ];
        }
        require('../backend/connection.php');
        if (isset($_POST['submit'])) {
            $title = $con->real_escape_string($_POST['title']);
            $author = $con->real_escape_string($_POST['author']);
            $category = $con->real_escape_string($_POST['category']);
            $duration = $con->real_escape_string($_POST['duration']);
            $tags = $con->real_escape_string($_POST['tags']);
            $date = date("d F Y");
            $uploadId = ($_FILES['image']['error'] == 0) ? validateFile($_FILES['image']) : "";
            $uploadIdURL = $uploadId == "" ? "": $uploadId['filename'];
            if (file_exists($_FILES['image']['tmp_name'])) {
                $upload_id_query = "$uploadIdURL";
            } else {
                $upload_id_query = "IMG-20220214-WA0009-768x768.jpg";
            }
            $sql = "INSERT INTO `blog`(`id`, `category`, `tags`, `title`, `author`, `date`, `duration`, `image`, `body`) VALUES 
            ('','$category','$tags','$title','$author','$date','$duration','$upload_id_query','')";
                $query = mysqli_query($con,$sql);
                if($query){
                    if(!file_exists($_FILES['image']['tmp_name'])){
                        $uIdURLtargetPath = $uploadIdURL;
                        move_uploaded_file($_FILES["image"]["tmp_name"], "../assets/image/".$uIdURLtargetPath);
                    }
                    header('Location:blog.php');
                }
        }
        else if(isset($_GET['id'])){
            $id = $_GET['id'];
            $sql = "DELETE FROM `blog` WHERE id = '$id'";
            $query = mysqli_query($con,$sql);
            if($query){
                header('Location:blog.php');
                ob_end_flush();
            }
        }
        ?>
      </div>
    </div>
  </div>
</div>
        <section class="content-main container">
    
            <div class="card mb-4">
                <div class="card-body">
                    <div class="table-responsive container">
                        <table id="example" class="display container" style="width:100%">
                            <?php
                            require('../backend/connection.php');
                            $sql = "SELECT * FROM blog ORDER BY id DESC";
                            $query = mysqli_query($con,$sql);
                            if($query){
                                if(mysqli_num_rows($query) > 0){
                                    
                                    $output = "<thead>
                                    <tr>
                                        <th>Date Created</th>
                                        <th>Title</th>
                                        <th>Author</th>
                                        <th>Category</th>
                                        
                                        <th>Action</th>
                                    </tr>
                                </thead><tbody>";
                                while($row = mysqli_fetch_assoc($query)){
                                    $output .="<tr>
                                    <td>".strtoupper($row['date'])."</td>
                                    <td>".strtoupper($row['title'])."</td>
                                    <td>".strtoupper($row['author'])."</td>
                                    <td>".strtoupper($row['category'])."</td>
                                    
                                    <td class='text-end'> 
                                        <div class='dropdown'>
                                            <a href='#' data-bs-toggle='dropdown' class='btn btn-light'> <i class='material-icons md-more_horiz'></i> </a> 
                                            <div class='dropdown-menu'>
                                            <a class='dropdown-item' href='blog_create.php?id=".$row['id']."'> Edit Blog</a>
                                            <a class='dropdown-item' href='blog.php?id=".$row['id']."'> Delete</a>
                                        </div>
                                    </div> 
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

        </section>
        
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