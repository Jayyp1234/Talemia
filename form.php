<?php
    require_once "component/header.php";

?>

<style>
    @font-face {
    font-family:OpenSans;
    src:url('../css/OpenSans-Regular.ttf');
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
.container{
    margin: 3pc auto;
}
.image{
    text-align: center;
}
.image img{
    width: 30%;
}
.container .row{
    justify-content: space-evenly;
}
.container .row b{
    font-size: 1.2rem;
    color: var(--blue);
    margin-top: 1pc 0
}
.container .row h6{
    font-size: 1.2rem;
    margin: 2pc 0;
}
.container form .row{
    justify-content: space-between;
    align-items: center;
}
.container form .row * input:focus{
    box-shadow: none;
    outline: none
}
.container form .row * input::placeholder{
    font-size: .9rem;
}
.container form .row * input:not([type="submit"]):hover,
.container form .row * input:not([type="submit"]):focus{
    border: 2px solid var(--blue);
    outline: none;
}
* input:not([type="submit"]){
    padding: .8rem;
    border: 1.9px solid #212529;
    font-size: .9rem
}

.input{
    text-align: right;
}
[type="submit"]{
    background-color: var(--blue);
    color: var(--white);
    padding: .9rem 2rem;
    font-size: 14px;
    outline: none;
    width: 70%;
    border-radius:.35rem;
    border: none;
}
[class="col-11 col-md-6 text-center"]{
    margin-top: 3pc;
}
[class="col-11 col-md-6 text-center"] h4{
    font-weight: 600;
}

.apply-btn{
    margin: 2pc 0 0 0;
}
.apply-btn a {
    display: flex;
    background-color: var(--blue);
    color: var(--white);
    align-items: center;
    padding: 1rem 4.5rem;
    text-transform: capitalize;
    border-radius: 5px;
    justify-content: center;
}
.apply-btn a > div h5{
    white-space: nowrap;
    font-size: 14px;
}
.apply-btn a > i{
    margin-left: 5px;
    font-size: 1.1rem;
    display: none;
    opacity: 0;
}
.apply-btn a:hover > i{
    margin-left: 5px;
    font-size: 1.1rem;
    opacity: 1;
    display: block;
}



/* tablet screen size */
@media (min-width: 767.5px) and (max-width: 991px){
    
    .container .row b {
        font-size: 1.1rem;
    }
    .container .row h6 {
        font-size: 1rem;
        margin: 2pc 0;
        padding: 0;
    }


    .container form .row * input::placeholder{
        font-size: .7rem;
    }
    * input:not([type="submit"]) {
        padding: 0.6rem;
    }
    * input:not([type="submit"]){
        padding: .6rem;
        border: 1.9px solid #212529;
        font-size: .8rem
    }
    .input{
        padding:0 5px;
    }
    [type="submit"]{
        padding: 0.8rem 2rem;
        font-size: .75rem;
    }
    .apply-btn a > div h5 {
        white-space: nowrap;
        font-size: 13px;
    }
    [class="col-11 col-md-6 text-center"] h4 {
        font-weight: 600;
        font-size: 1.25rem;
        color: #303134;
    }

}

/* mobile screen size */
@media (min-width: 320px) and (max-width: 575.98px){
    .container{
        margin: 1pc auto;
    }
    .image img{
        width: 70%;
    }
    .container .row b {
        font-size: 1rem;
    }
    .container .row h6 {
        font-size: .86rem;
    }
    .container form .row {
        justify-content: center;
    }
    .input {
        margin: 0.5pc 0;
    }
    .container form .row * input::placeholder{
        font-size: 11px;
    }
    * input:not([type="submit"]) {
        padding: 0.5rem;
        border: 1.9px solid #212529;
        font-size: 12px;
    }
    .subscribe{
        text-align:center;
        margin-top: 1.7pc;
    }
    [type="submit"], .apply-btn a {
        padding: 0.6rem 2rem;
        width: 100%;
        font-size: 12px
    }
    [type="submit"] {
        padding: 0.6rem 2rem;
        width: 100%;
    }
    [class="col-11 col-md-6 text-center"] {
        margin-top: 2pc;
        padding: 0;
    }
    [class="col-11 col-md-6 text-center"] h4{
        font-size: 14px;
    }
    .apply-btn a > div h5 {
        font-size: 12px;
    }
}
</style>




<div class="container">
    <div class="image col-10 mx-auto">
        <img src="assets/image/Talemia-header-illustration.svg" class="img-fluid" alt="">
    </div>
    <div class="row col-12 mx-auto">
        <b class="col-10 col-md-8 text-center">Get Free Startup Resources.</b>
        <h6 class="col-12 text-center">Join thousands of the Early Stage African Founders building a business</h6>
        <form action='backend/subscribe.php' method='post'>
            <div class="row">
                <div class="col-11 col-md-3 input">
                    <input type="text" name="firstname" class="form-control" placeholder="Firstname">
                </div>
                <div class="col-11 col-md-3 input">
                    <input type="text" name="lastname" class="form-control" placeholder="Lastname">
                </div>
                <div class="col-11 col-md-3 input">
                    <input type="email" name="email" class="form-control" placeholder="Email address">
                </div>


                <!-- add the rest of the input form here -->



                <!-- captcha -->
                <link rel="stylesheet" href="assets/captcha.css" />
                <script src="backend/app.js"></script>
                <div class="container1">
                    <div class="col-11 col-md-3 input">
                            <div id="captcha" class="captcha"><script>createCaptcha();</script></div>
                          <div class="restart">
                            <a href="#" onclick="createCaptcha()">Change</a>
                          </div>
                    </div> 
                  <div class="col-11 col-md-3 input">
                    <input
                    class="form-control"
                      type="text"
                      name="reCaptcha"
                      id="reCaptcha"
                      placeholder="Type The Captcha"
                    />
                    <div class="col-11 col-md-3 input">
                        <input class="form-control" type="button" value="Submit" onclick="validateCaptcha()" />
                <div>
                  </div>
                  <div id="errCaptcha" class="errmsg"></div>
                  <div id="cap" class="cap"><input id="cap2" type="text" name="cap"></div>
                </div>


                <!-- end of captcha -->



                <div class="col-11 col-md-3 subscribe">
                    <input type="submit" name="subscribe" value="Subscribe">
                </div>
            </div>
        </form>

        <div class="col-11 col-md-6 text-center">
            <h4>Launch your startup faster</h4>
        </div>
        <div class="apply-btn text-center col-11 col-md-8">
            <a href="" class="col-4 col-md-2 mx-auto">
                <div class=""><h5>apply now</h5></div>
                <i class="icon-trending_flat"></i>
                <!-- <div class="icon" style="transform: rotate(45deg); font-size: 20px;"><i class="icon-call_made"></i></div> -->
            </a>
        </div>
    </div>
</div>














<?php
    require_once "component/footer.php";

?>