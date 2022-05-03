<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/fonts/icomoon/style.css">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/msg2users.css">
    <title>Talemia message to users</title>
</head>
<body>
    <style>
      
    </style>
    <div class="col-12 logo">
        <a href=""><img src="assets/image/talemia-logo.svg" alt="" class="img-fluid d-none d-md-block"></a>
        <a href=""><img src="assets/image/talemia-logo.jpg" alt="" class="img-fluid d-md-none d-block rounded-circle"></a>
        <a href="backend/subscribers.php" class="btn d-none d-md-block">View newsletter list</a>
        <a href="backend/subscribers.php" class="btn d-block d-md-none">view list</a>
    </div>
    <div class="container">
        <div class="row col-12 text-center align-items-center">
            <div class="col-10 col-md-6 text-center mx-auto">
                <img src="assets/image/newsletter.jpeg" alt="" class="img-fluid">
            </div>
            <div class="col-10 col-md-6 mx-auto text-center newsletter">
                <h3 class="d-none d-md-block">Newsletter</h3>
                <form>
                    <h3 class="d-block d-md-none" style="text-transform: uppercase;color:#09099d; font-weight: 600;">Newsletter</h3>
                    <i class="icon-envelope-o"></i>
                    <a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle" role="button">ADD NEWSLETTER</a>
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
                            <label for="titleclass="col-form-label">Title:</label>
                            <input type="text" class="form-control" id="title">
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
                <div class="modal-body text">
                    &nbsp;
                </div>
                <div class="modal-footer">
                    <form action="">
                        <button class="btn btn-primary" data-bs-target="#exampleModalToggle" data-bs-toggle="modal" data-bs-dismiss="modal">Send</button>
                    </form>
                </div>
            </div>
        </div>
      </div>
      




    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/jquery.min.js"></script>
    

</body>
</html>