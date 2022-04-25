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
ul, li{
    list-style-type: none;
    list-style: none;
    margin: unset;
}
body{
    position: relative;
}
:is(.form-control, .form-select):focus{
    box-shadow: none;
    border: 2px solid var(--blue);
}
.form-control{
    font-size: 14px;
    outline: none;
}
.form-control:hover{
    outline: 1px solid var(--blue);
}
.form-control, .form-select{
    box-shadow: 0 1.5px 10px -7.5px;
    width: 64%;
}
:is(.form-select, .form-control){
    padding: 0.75rem 0.6rem;
}
input[type="radio"]{
    cursor: pointer;
}
.form-check {
    display: block;
    padding: 0 0.8rem;
    margin: 0;
}
.form-label {
    margin-bottom: 0
}
.container-fluid{
    padding: 0;
}
.container-fluid .cover-banner{
    width: 100%;
    top: -7pc;
}
.container-fluid .cover-banner > img:nth-child(2){
    position: absolute;
    bottom: -10%;
    left: 21%;
    border-radius: 100%;
    width: 7%;
}
.container {
    top: 0;
    padding-left: 12pc;
}
.container h2{
    font-weight: bolder;
    text-transform: capitalize;
    font-size: 2.5rem;
    letter-spacing: 1px;

}
form{
    flex-direction: column;
    padding-top: 2.4pc;
}
form > div {
    line-height: 2.2pc;
    margin: 0.8pc 0;
    padding: 0 0.5pc;
}
input::placeholder{
    font-size: 14px;
    color: #ccc;
    opacity: .1;
}

.message{
    white-space: nowrap;
}
.subscribe{
    margin-top: 2pc;
}
.subscribe a{
    display: flex;
    background-color: var(--blue);
    color: var(--white);
    align-items: center;
    padding: 0.8rem 3.5rem;
    text-transform: capitalize;
    border-radius: 5px;
    justify-content: center;
    transition: .6s ease-in-out;
}
.subscribe a > div h5{
    white-space: nowrap;
    font-size: 16px;
}
.subscribe a > i{
    margin-left: 5px;
    font-size: 1.1rem;
}



@media (min-width: 767.5px) and (max-width: 991px){

}


@media (min-width: 320px) and (max-width: 575.98px){
    .container-fluid .cover-banner > img:nth-child(2) {
        bottom: -22%;
        left: 10%;
        width: 15%;
    }
    .container-fluid .cover-banner {
        top: 0;
    }
    .container h2 {
        font-size: 1.5rem;
        margin: 2pc 0 0 1.9rem;
    }
    .container {
        top: 0pc;
        padding: unset;
        margin-bottom: 2pc;
    }
    form {
        padding-top: 1.5pc;
        margin: 0 auto !important;
    }
    :is(label, .message p){
        font-size: 13px;
    }
    :is(.form-select, .form-control) {
        padding: 0.55rem 0.6rem;
    }
    .form-control{
        font-size: 12px;
    }
    input::placeholder{
        font-size: 12px;
    }
    .form-label {
        font-size: 14px;
    }
    .form-control, .form-select {
        width: 100%;
    }
    .form-check {
        margin: 0 auto;
    }
    form > div {
        line-height: 1.9pc;
        margin: 0.8pc auto;
        padding: 0 0.5pc;
    }
    .form-check{
        margin: 0 auto;
        padding: 0 0.5pc !important;
    }

    .message{
        white-space: unset;
        margin: 0 auto;
    }
    :is(.subscribe a > div h5, .subscribe a > i){
        font-size: 12px;
    }
    

}



</style>



<div class="container-fluid">
    <div class="cover-banner position-relative">
        <img src="assets/image/talemia-cover.jpg" class="img-fluid" alt="">
        <img src="assets/image/talemia-logo.jpg" class="img-fluid" alt="">
    </div>
    <div class="col-12 container position-relative">
        <h2 class="text-center text-md-start col-5 col-md-12">start your application</h2>
        <form action="" class="row col-12">
            <div class="col-11 col-md-7">
                <label for="" class="form-label">First name:</label>
                <input type="text" class="form-control" id="" placeholder="Firstname">
            </div>
            <div class="col-11 col-md-7">
                <label for="" class="form-label">Last name:</label>
                <input type="email" class="form-control" id="" placeholder="Lastname">
            </div>
            <div class="col-11 col-md-7">
                <label for="" class="form-label">Email:</label>
                <input type="email" class="form-control" id="" placeholder="Email address">
            </div>
            <div class="col-11 col-md-7">
                <label for="" class="form-label">Phone Number:</label>
                <input type="email" class="form-control" id="" placeholder="Phone number">
            </div>
            <div class="col-11 col-md-7">
                <label for="" class="form-select-label">Select Your Country</label>
                <select class="form-select" size="1" aria-label="Default select example">
                    <option value="Algeria">Algeria</option>
                    <option value="Benin Republic">Benin Republic</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Egypt">Egypt</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Ivory-Coast">Ivory-Coast</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option selected>Nigeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                  </select>
            </div>
            <div class="col-11 col-md-7">
                <label for="startup-name" class="form-label">Name of Startup</label>
                <input type="text" class="form-control" id="startup-name" placeholder="Startup Name">
            </div>
            <div class="form-check col-11 col-md-7">  
                <label class="form-check-label" for="">Gender:</label><br>
                <input class="" type="radio" name="flexRadioDefault" id="" placeholder="Firstname">
                <label class="form-check-label" for="">Male</label><br>
                <input class="" type="radio" name="flexRadioDefault" id="" placeholder="Firstname">
                <label class="form-check-label" for="">Female</label>
            </div>
            <div class="col-11 col-md-7">
                <label for="" class="form-select-label">Age Range:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Nigeria</option>
                    <option value="Algeria1">Algeria1One</option>
                    <option value="Algeria2">Algeria2Two</option>
                    <option value="Algeria3">Algeria3Three</option>
                  </select>
            </div>
            <div class="form-check col-11 col-md-7">  
                <label class="form-check-label" for="">What Category of Startup/idea?</label><br>
                <input class="" type="radio" name="flexRadioDefault" id="">
                <label class="form-check-label" for="">
                    Technology Based
                </label><br>
                <input class="" type="radio" name="flexRadioDefault" id="">
                <label class="form-check-label" for="">
                    Traditionally Based [Non-Tech]
                </label>
            </div>
            <div class="col-11 col-md-7">
                <label for="industry" class="form-select-label">What industry is your Startup/Idea?</label>
                <select class="form-select" size="1" aria-label="" id="industry">
                    <option value="Algeria">Agriculture</option>
                    <option value="Benin Republic">Benin Republic</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="Egypt">Egypt</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Ivory-Coast">Ivory-Coast</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Algeria">Algeria</option>
                  </select>
            </div>
            <div class="col-11 col-md-7">
                <label for="startup-stage" class="form-select-label">Select Your Country:</label>
                <select class="form-select" size="1" aria-label="" id="startup-stage">
                    <option value="Algeria" selected>Idea</option>
                    <option value="pre-mvp">Pre MVP</option>
                    <option value="mvp">MVP</option>
                    <option value="growth">Growth</option>
                  </select>
            </div>
            <div class="form-check col-11 col-md-7">  
                <label class="form-check-label" for="">Do you have a team apart from yourself?</label><br>
                <input class="" type="radio" name="flexRadioDefault" id="">
                <label class="form-check-label" for="">Yes</label><br>
                <input class="" type="radio" name="flexRadioDefault" id="">
                <label class="form-check-label" for="">No</label>
            </div>
            <div class="form-check col-11 col-md-7">  
                <label class="form-check-label" for="">How old is your Startup?</label><br>
                <input class="" type="radio" name="flexRadioDefault" id="">
                <label class="form-check-label" for="">Yes</label><br>
                <input class="" type="radio" name="flexRadioDefault" id="">
                <label class="form-check-label" for="">No</label><br>
                <input class="" type="radio" name="flexRadioDefault" id="">
                <label class="form-check-label" for="">No</label>
            </div>
        </form>
        <div class="col-8 col-11 col-md-7 message">
            <p>Thank your for entering your details, click the link below to purchase your subscription.</p>
        </div>
        <div class="subscribe">
            <a href="" class="col-11 col-md-2 mx-auto mx-lg-0">
                <div class=""><h5>Subscribe</h5></div>
                <i class="icon-arrow_forward"></i>
            </a>
        </div>
    </div>
</div>










<?php
    require_once "component/footer.php";

?>