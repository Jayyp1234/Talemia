<?php
include_once '../backend/connection.php';

if(isset($_POST['submit'])){
    $sql = 'SELECT FROM ';
}



?>


<?php
            require('../backend/connection.php');
                if (isset($_POST['login'])) {
                    $password = 12345;
                    $user = 'talemia';
                    $admin = $con->real_escape_string($_POST['email']);
                    $pass = $con->real_escape_string($_POST['password']);
                    if ($pass == $password && $user == $admin) {
                        $_SESSION['user'] = $admin;
                        echo"
                        <!DOCTYPE html>
                        <html lang='en'>
                        <head>
                            <meta charset='utf-8'>
                            <meta content='width=device-width, initial-scale=1.0' name='viewport'>
                            <title>Dashboard</title>
                            <meta name='description'
                                content='Talemia is an Edtech platform supporting early stage African founders to launch their startups faster than than they can do their own'>
                            <meta name='robots' content='index, follow, max-snippet:-1, max-video-preview:-1, max-image-preview:large'>
                            <link rel='canonical' href='https://talemia.com/'>
                            <meta property='og:locale' content='en_US'>
                            <meta property='og:type' content='website'>
                            <meta property='og:title' content='Talemia - Launch Your Startup Faster'>
                            <meta property='og:description'
                                content='Talemia is an Edtech platform supporting early stage African founders to launch their startups faster than than they can do their own'>
                            <meta property='og:url' content='https://talemia.com/'>
                            <meta property='og:site_name' content='Talemia'>
                            <meta property='og:updated_time' content='2022-04-09T10:51:25+01:00'>
                            <meta property='article:published_time' content='2018-10-14T12:21:59+01:00'>
                            <meta property='article:modified_time' content='2022-04-09T10:51:25+01:00'>
                            <meta name='twitter:card' content='summary_large_image'>
                            <meta name='twitter:title' content='Talemia - Launch Your Startup Faster'>
                            <meta name='twitter:description'
                                content='Talemia is an Edtech platform supporting early stage African founders to launch their startups faster than than they can do their own'>
                            <meta name='twitter:label1' content='Written by'>
                            <meta name='twitter:data1' content='isaacdev'>
                            <meta name='twitter:label2' content='Time to read'>
                            <meta name='twitter:data2' content='10 minutes'>
                              <!--icons link-->
                              <link rel='stylesheet' href='../assets/fonts/icomoon/style.css'>
                            <link rel='stylesheet' href='../assets/css/bootstrap.min.css'>
                            <link rel='preload' href='../assets/fonts/OpenSans-Regular.ttf' as='font' crossorigin='anonymous'>
                            <link rel='preload' href='../assets/fonts/OpenSans-SemiBold.ttf' as='font' crossorigin='anonymous'>
                            <link rel='preload' href='../assets/fonts/OpenSans-Bold.ttf' as='font' crossorigin='anonymous'>
                            <link href='../assets/css/dashboard.css' rel='stylesheet'>
                        </head>
                        <style type='text/css'>
                           form input, form textarea{
                             width:100%;
                             display: block;
                             border:1px solid #d4d4d4;
                             margin-bottom:7px;
                             border-radius:7px;
                           }
                           body{
                               height: 100vh !important;
                           }
                           main {
                            margin-left: 0 0 0 250px !important;
                            transition: all 0.5s ease-in-out;
                            overflow: hidden;
                        }
                           main .row {
                            margin: 0;
                            flex-direction: column;
                            height: 96vh !important;
                            }
                            .col-12{
                                padding: 0;
                                height: 48vh;
                                display: flex;
                                justify-content: center;
                                align-items: center;
                                text-align: center;
                            }
                            .top h1{
                            color: #fff;
                            }
                            .modal {
                            position: fixed;
                            top: 20%;
                            left: 10%;
                            z-index: 100000000000;
                            }
                            .modal.show .modal-dialog {
                            max-width: 600px;
                            }
                            .modal-content {
                            height: 380px;
                            }
                            .modal-header button{
                            width: 40px;
                            height: 40px;
                            background: unset;
                            }
                            .modal-header .icon-close2{
                                font-size: 1.4rem;
                            }
                            .modal-header .icon-close2:hover{
                            background: #09099d;
                            color: white;
                            border-radius: 100%;
                            }
                            .update {
                            border-radius: 2rem;
                            padding: 1rem 4rem;
                            font-size: 14px;
                            background-color: #09099d;
                            color: white;
                            }
                            .update:hover {
                            color: white;
                            box-shadow: 0 0 40px -5px #09099d;
                            }
                            input {
                            padding: 19px;
                            height: 40%;
                            width: 100%;
                            background: whitesmoke;
                            }
                            .icon-bars {
                            right: 8px;
                            top: 11px;
                            }
                        @media all and (max-width: 550px){
                        main {
                            padding: 0;
                        }
                        .top h1{
                            font-size: 20px;
                        }
                        .modal {
                            left: 0;
                            top: 14%;
                        }
                        .modal-title {
                            font-size: 15px;
                        }
                        .modal-body{
                            margin: 10% 0 7%;
                            padding: 1rem .5rem;
                        }
                        .modal-footer input {
                            font-size: 12px;
                            margin-top: 10%;
                        }
                        .modal-footer input::placeholder {
                            font-size: 12px;
                        }
                        .update {
                            border-radius: 8px;
                            padding: 0.8rem;
                            width: 50%;
                            font-size: 13px;
                        }
                        .modal-footer input{
                            font-size: 12px;
                        }
                        main .intro-div b {
                            font-size: .9rem;
                        }
                        main .intro-div span{
                            font-size: 12px;
                        }
                        
                        }
                        </style>
                        <body>
                            <i class='icon-bars'></i>
                            <nav>
                                <br>
                                <br>
                                <div class='profiler' style='text-align: center;margin-top: 10px;line-height: 1.2;font-size: 14.5;font-weight: 600;'>
                                    <img src='assets/images/pngkey.com-linea-punteada-png-4149828.png' style='width: 100px;height: 100px;display: block;margin: auto;'>
                                    
                                </div>
                                <br>
                                <ul>
                                    <form action='dashboard.php' method='post'>
                                        <input type='hidden' name='email' value='talemia'>
                                        <input type='hidden' name='password' value='12345'>
                                        <button type='submit' name='login'>
                                        <li class='active' ><i class='icon-dashboard'></i><span> Dashboard</span> </li>
                                        </button>
                                    </form>
                                    <form action='newsletter.php' method='post'>
                                        <input type='hidden' name='email' value='talemia'>
                                        <input type='hidden' name='password' value='12345'>
                                        <button type='submit' name='login'>
                                            <li> <i class='icon-globe'></i> <span> Newsletter</span> </li>
                                        </button>
                                    </form>
                                    <form action='members.php' method='post'>
                                        <input type='hidden' name='email' value='talemia'>
                                        <input type='hidden' name='password' value='12345'>
                                        <button type='submit' name='login'>
                                            <li> <i class='icon-hdd-o'></i> <span> Members </span> </li>
                                        </button>
                                    </form>
                                    <form action='blog.php' method='post'>
                                        <input type='hidden' name='email' value='talemia'>
                                        <input type='hidden' name='password' value='12345'>
                                        <button type='submit' name='login'>
                                            <li> <i class='icon-child'></i> <span> Blogs </span> </li>
                                        </button>
                                    </form>
                                    <form action='transactions.php' method='post'>
                                        <input type='hidden' name='email' value='talemia'>
                                        <input type='hidden' name='password' value='12345'>
                                        <button type='submit' name='login'>
                                            <li> <i class='icon-square'> </i><span> Transactions </span> </li>
                                        </button>
                                    </form>
                                    
                                </ul>
                                <br>
                            </nav>
                            <main style=''>
                            <!-- margin-right:5px; held--> 
                                <div class='intro-div'>
                                    <b>Dashboard</b>
                                    <span id='time' class='time'></span>
                                </div>
                                <!-- <br> held-->
                           
                                <!-- Button trigger modal -->
                           <div class='row col-12'>
                               <div class='col-12 top' style='background-color: #09099d'>
                                    <h1>SET A PRICE</h1>
                               </div>
                               <div class='col-12 bottom' style='background-color: #fdfdfd;'>
                                    <button type='button' class='btn update' data-bs-toggle='modal' data-bs-target='#staticBackdrop'>UPDATE PRICE</button>
                        
                                    <!-- Modal -->
                                    <div class='modal fade' id='staticBackdrop' data-bs-backdrop='static' data-bs-keyboard='false' tabindex='-1' aria-labelledby='staticBackdropLabel' aria-hidden='true'>
                                    <div class='modal-dialog'>
                                        <div class='modal-content'>
                                        <div class='modal-header'>
                                            <h5 class='modal-title' id='staticBackdropLabel'>Price Update</h5>
                                            <button type='button' class='icon-close2' data-bs-dismiss='modal' aria-label='Close'></button>
                                        </div>
                                        <form action='../backend/admin.php' method='post'>
                                            <div class='modal-body'>
                                            <input type='text' name='title' placeholder='Input price title'>
                                            <input type='number' name='price' placeholder='Input price'>
                                            </div>
                                            <div class='modal-footer'>
                                                <input type='submit' class='btn btn-success' name='update'></input>
                                            </div>
                                        </form>
                                        </div>
                                    </div>
                                    </div>
                               </div>
                           </div>
                                
                            </main>
                        
                        </div>
                        </body>
                        <script type='text/javascript' src='../assets/js/jquery.min.js'></script>
                        <script type='text/javascript' src='../assets/js/bootstrap.min.js'></script>
                        
                        <script>
                            var d = new Date();
                            document.getElementById('time').innerHTML = d.toDateString();
                        </script>
                        </html>

                        ";
                        ob_end_flush();
                    }
                    else{
                        echo '<div class="alert alert-danger" role="alert">
                        Incorrect Details
                      </div>';
                    }
                    
                }
                ?>