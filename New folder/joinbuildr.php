<?php
    include "component/header.php";
?>
<link rel="stylesheet" href="assets/css/bootstrap.min.css">
<style>
    a {
        text-decoration: none !important;
    }

    form div {
        margin-bottom: 20px;
    }

    .gfield_required.gfield_required_asterisk {
        margin-left: 4px;
        color: red;
    }

    .gfield_label {
        font-size: .785714em !important;
        font-weight: 600;
        text-transform: uppercase;
        white-space: nowrap;
        display: inline-block;
        margin-bottom: 0.5em;
    }
</style>

<div class="container-fluid">
    <!--
    <div class="cover-banner position-relative">
        <img src="assets/image/talemia-cover.jpg" class="img-fluid" alt="">
        <img src="assets/image/talemia-logo.jpg" class="img-fluid" alt="">
    </div>
--><br><br><br>
    <div class="col-12 container position-relative">
        <div class="gform_heading">
            <h2 class="gform_title" style="font-weight:700;">Join Buildr</h2>
            <span class="gform_description"></span>
            <p class="gform_required_legend">"<span class="gfield_required gfield_required_asterisk">*</span>" indicates
                required fields</p>
        </div>
        <form action="backend/subscribe.php" method="POST" class="row col-12">
            <div class="gform_body gform-body">
                <div id="gform_fields_1" class="gform_fields top_label form_sublabel_below description_below">
                    <div id="field_1_1"
                        class="gfield gfield--width-full gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                        <label class="gfield_label" for="input_1_1">First Name<span class="gfield_required"><span
                                    class="gfield_required gfield_required_asterisk">*</span></span></label>
                        <div class="ginput_container ginput_container_text"><input name="firstname" id="input_1_1"
                                type="text" value="" class="large" aria-required="true" aria-invalid="false" required> </div>
                    </div>
                    <div id="field_1_2"
                        class="gfield gfield--width-full gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                        <label class="gfield_label" for="input_1_2">Last Name<span class="gfield_required"><span
                                    class="gfield_required gfield_required_asterisk">*</span></span></label>
                        <div class="ginput_container ginput_container_text"><input name="lastname" id="input_1_2"
                                type="text" value="" class="large" aria-required="true" aria-invalid="false" required> </div>
                    </div>
                    <div id="field_1_14"
                        class="gfield gfield--width-full field_sublabel_below field_description_below gfield_visibility_visible">
                        <label class="gfield_label" for="input_1_14">Phone Number</label>
                        <div class="ginput_container ginput_container_text"><input name="phone" id="input_1_14"
                                type="text" value="" class="large" aria-invalid="false" required> </div>
                    </div>
                    <div id="field_1_3"
                        class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                        <label class="gfield_label" for="input_1_3">Email Address<span class="gfield_required"><span
                                    class="gfield_required gfield_required_asterisk">*</span></span></label>
                        <div class="ginput_container ginput_container_text"><input name="email" id="input_1_3"
                                type="text" value="" class="large" aria-required="true" aria-invalid="false" required> </div>
                    </div>
                    <div id="field_1_4"
                        class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                        <label class="gfield_label" for="input_1_4">Select your country<span
                                class="gfield_required"><span
                                    class="gfield_required gfield_required_asterisk">*</span></span></label>
                        <div class="ginput_container ginput_container_select"><span class="wtbx-select"><select
                                    name="country" id="input_1_4" class="large gfield_select" aria-required="true"
                                    aria-invalid="false" required>
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
                                </select></span></div>
                    </div>
                    <div id="field_1_5"
                        class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                        <label class="gfield_label" for="input_1_5">Name Of startup Idea<span
                                class="gfield_required"><span
                                    class="gfield_required gfield_required_asterisk">*</span></span></label>
                        <div class="ginput_container ginput_container_text"><input name="startup" id="idea"
                                type="text" value="" class="large" aria-required="true" aria-invalid="false" required> </div>
                    </div>
                    <fieldset id="field_1_6"
                        class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                        <legend class="gfield_label">Gender<span class="gfield_required"><span
                                    class="gfield_required gfield_required_asterisk">*</span></span></legend>
                        <div class="ginput_container ginput_container_radio">
                            <div class="gfield_radio" id="input_1_6">
                                <div class="gchoice gchoice_1_6_0">
                                    <input class="gfield-choice-input" name="gender" type="radio" value="Male"
                                        id="choice_1_6_0" onchange="gformToggleRadioOther( this )">
                                    <label for="choice_1_6_0" id="label_1_6_0">Male</label>
                                </div>
                                <div class="gchoice gchoice_1_6_1">
                                    <input class="gfield-choice-input" name="gender" type="radio" value="Female"
                                        id="choice_1_6_1" onchange="gformToggleRadioOther( this )">
                                    <label for="choice_1_6_1" id="label_1_6_1">Female</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div id="field_1_7"
                        class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                        <label class="gfield_label" for="input_1_7">Age Range<span class="gfield_required"><span
                                    class="gfield_required gfield_required_asterisk">*</span></span></label>
                        <div class="ginput_container ginput_container_select"><span class="wtbx-select"><select
                                    name="age" id="input_1_7" class="large gfield_select" aria-required="true"
                                    aria-invalid="false" required>
                                    <option value="Below 25">Below 25</option>
                                    <option value="20-25">20-25</option>
                                    <option value="26-30">26-30</option>
                                    <option value="31-35">31-35</option>
                                    <option value="Above 35">Above 35</option>
                                </select></span></div>
                    </div>
                    <fieldset id="field_1_8"
                        class="gfield gfield_contains_required field_sublabel_below field_description_below gfield_visibility_visible">
                        <legend class="gfield_label">What Category is your Startup/Idea?<span
                                class="gfield_required"><span
                                    class="gfield_required gfield_required_asterisk">*</span></span></legend>
                        <div class="ginput_container ginput_container_radio">
                            <div class="gfield_radio" id="input_1_8">
                                <div class="gchoice gchoice_1_8_0">
                                    <input class="gfield-choice-input" name="category" type="radio"
                                        value="Technology Based" id="choice_1_8_0"
                                        onchange="gformToggleRadioOther( this )" >
                                    <label for="choice_1_8_0" id="label_1_8_0">Technology Based</label>
                                </div>
                                <div class="gchoice gchoice_1_8_1">
                                    <input class="gfield-choice-input" name="category" type="radio"
                                        value="Traditional Based [Non-tech]" id="choice_1_8_1"
                                        onchange="gformToggleRadioOther( this )">
                                    <label for="choice_1_8_1" id="label_1_8_1">Traditional Based [Non-tech]</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div id="field_1_10"
                        class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label
                            class="gfield_label" for="input_1_10">What industry is your Startup/Idea?</label>
                        <div class="ginput_container ginput_container_select"><span class="wtbx-select"><select
                                    name="industry" id="input_1_10" class="large gfield_select" aria-invalid="false" required>
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
                                </select></span></div>
                    </div>
                    <div id="field_1_11"
                        class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label
                            class="gfield_label" for="input_1_11">What stage are you currently on?</label>
                        <div class="ginput_container ginput_container_select"><span class="wtbx-select"><select
                                    name="stage" id="input_1_11" class="large gfield_select" aria-invalid="false" required>
                                    <option value="Idea">Idea</option>
                                    <option value="Pre-MVP">Pre-MVP</option>
                                    <option value="MVP">MVP</option>
                                    <option value="Growth">Growth</option>
                                </select></span></div>
                    </div>
                    <fieldset id="field_1_12"
                        class="gfield field_sublabel_below field_description_below gfield_visibility_visible">
                        <legend class="gfield_label">Do you have a team apart from yourself?</legend>
                        <div class="ginput_container ginput_container_radio">
                            <div class="gfield_radio" id="input_1_12">
                                <div class="gchoice gchoice_1_12_0">
                                    <input class="gfield-choice-input" name="team" type="radio" value="Yes"
                                        id="choice_1_12_0" onchange="gformToggleRadioOther( this )" >
                                    <label for="choice_1_12_0" id="label_1_12_0">Yes</label>
                                </div>
                                <div class="gchoice gchoice_1_12_1">
                                    <input class="gfield-choice-input" name="team" type="radio" value="No"
                                        id="choice_1_12_1" onchange="gformToggleRadioOther( this )">
                                    <label for="choice_1_12_1" id="label_1_12_1">No</label>
                                </div>
                            </div>
                        </div>
                    </fieldset>
                    <div id="field_1_13"
                        class="gfield field_sublabel_below field_description_below gfield_visibility_visible"><label
                            class="gfield_label" for="input_1_13">How old is your Startup/Idea?</label>
                        <div class="ginput_container ginput_container_select"><span class="wtbx-select"><select
                                    name="age1" id="input_1_13" class="large gfield_select" aria-invalid="false" required>
                                    <option value="Below 1 year">Below 1 year</option>
                                    <option value="1-5 years">1-5 years</option>
                                    <option value="Above 5 years">Above 5 years</option>
                                </select></span></div>
                    </div>
                    
                    <div class="gform_footer top_label">
                        <input type="submit" id="gform_submit_button_1" name="subscribe" class="gform_button button" value="Subscribe">


                    </div>
                </div>
            </div>
        </form>

    </div>
</div>


<?php
    include "component/footer.php";
// >>>>>>> 939ba273db06a2b5d81baf426a9c05a979051734
?>