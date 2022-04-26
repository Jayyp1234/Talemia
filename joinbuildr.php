<?php
    include "component/header.php";
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<style>
    a{
        text-decoration:none !important;
    }
    form div{
        margin-bottom:20px;
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
                <select name="input_4" id="input_1_4" class="form-select" aria-required="true" aria-invalid="false">
                    <option value="Nigeria">Nigeria</option>
                    <option value="Rwanda">Rwanda</option>
                    <option value="Ghana">Ghana</option>
                    <option value="Kenya">Kenya</option>
                    <option value="Ethiopia">Ethiopia</option>
                    <option value="South-Africa">South-Africa</option>
                    <option value="Egypt">Egypt</option>
                    <option value="Ivory-Coast">Ivory-Coast</option>
                    <option value="Algeria">Algeria</option>
                    <option value="Uganda">Uganda</option>
                    <option value="Tanzania">Tanzania</option>
                    <option value="Zambia">Zambia</option>
                    <option value="Sierra-Leone">Sierra-Leone</option>
                    <option value="Togo">Togo</option>
                    <option value="Namibia">Namibia</option>
                    <option value="Senegal">Senegal</option>
                    <option value="Benin Republic">Benin Republic</option>
                    <option value="Mali">Mali</option>
                    <option value="Tunisia">Tunisia</option>
                    <option value="Seychelles">Seychelles</option>
                    <option value="Others">Others</option>
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
                <select name="" id="input_1_7" class="large form-select" aria-required="true" aria-invalid="false">
                    <option value="Below 25">Below 25</option>
                    <option value="20-25">20-25</option>
                    <option value="26-30">26-30</option>
                    <option value="31-35">31-35</option>
                    <option value="Above 35">Above 35</option>
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
                <select name="input_10" id="input_1_10" class="large form-select" aria-invalid="false">
                    <option value="Agriculture">Agriculture</option>
                    <option value="Automotive">Automotive</option>
                    <option value="Commerce/Retail">Commerce/Retail</option>
                    <option value="Construction">Construction</option>
                    <option value="Education">Education</option>
                    <option value="Energy">Energy</option>
                    <option value="FMCG">FMCG</option>
                    <option value="Fashion">Fashion</option>
                    <option value="Finance">Finance</option>
                    <option value="Food &amp; Beverages">Food &amp; Beverages</option>
                    <option value="Health">Health</option>
                    <option value="ICT">ICT</option>
                    <option value="Logistics">Logistics</option>
                    <option value="Legal">Legal</option>
                    <option value="Manufacturing">Manufacturing</option>
                    <option value="Media &amp; Entertainment">Media &amp; Entertainment</option>
                    <option value="Oil &amp; Gas">Oil &amp; Gas</option>
                    <option value="Professional Services">Professional Services</option>
                    <option value="Sports">Sports</option>
                    <option value="Tourism &amp; Hospitality">Tourism &amp; Hospitality</option>
                    <option value="Transportation">Transportation</option>
                    <option value="Waste Management">Waste Management</option>
                </select>
            </div>
            <div class="col-11 col-md-7">
                <label for="startup-stage" class="form-select-label">Select Your Country:</label>
                <select name="input_11" id="input_1_11" class="large form-select" aria-invalid="false">
                    <option value="Idea">Idea</option>
                    <option value="Pre-MVP">Pre-MVP</option>
                    <option value="MVP">MVP</option>
                    <option value="Growth">Growth</option>
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
                <select name="input_13" id="input_1_13" class="large form-select" aria-invalid="false"><option value="Below 1 year">Below 1 year</option><option value="1-5 years">1-5 years</option><option value="Above 5 years">Above 5 years</option></select>
            </div>
            <div class="col-8 col-11 col-md-7 message">
            <p>Thank your for entering your details, click the link below to purchase your subscription.</p>
        </div>
        <div class="subscribe">
            <a href="" class="col-11 col-md-2 mx-auto mx-lg-0">
            <div class="gform_footer top_label"> 
                <input type="submit" id="gform_submit_button_1" class="gform_button button" value="Subscribe" > 
            </div>
            </a>
        </div>
        </form>
        
    </div>
</div>










<?php
    include "component/footer.php";

?>