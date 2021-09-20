<?php
    include ('dbconfig.php');
    $academic_year = $_POST['academic_year'];
    $grade = $_POST['grade'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $gender = $_POST['gender'];
    $dob = $_POST['dob'];
    $religion = $_POST['religion'];
    $nationality = $_POST['nationality'];
    $birth_place = $_POST['birth_place'];
    $current_school = $_POST['current_school'];
    $reason = $_POST['reason'];
    $permanent_address = $_POST['permanent_address'];
    $country = $_POST['country'];
    $state = $_POST['state'];
    $city = $_POST['city'];
    $pincode = $_POST['pincode'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $other_contact = $_POST['other_contact'];
    $transport = $_POST['transport'];
    $contacted_before = $_POST['contacted_before'];
    $comment = $_POST['comment'];

    if ((isset($first_name) && !empty($first_name)) && (isset($last_name) && !empty($last_name)) && (isset($email) && !empty($email)) && (isset($mobile) && !empty($mobile))) {
        $emailcheck = "SELECT * FROM admission_form WHERE email = '$email'";
        $emailresult = mysqli_query($mysqli, $emailcheck);
        if(mysqli_num_rows($emailresult) > 0) {
            echo "EMAIL_EXIST";
        }
        else{
            $insertquery = "INSERT INTO `admission_form`(`academic_year`, `admission_to`, `first_name`, `last_name`, `gender`, `dob`, `religion`, `nationality`, `place_of_birth`, `current_school`, `reason_to_change`, `permanent_address`, `country`, `state`, `city`, `pincode`, `phone`, `email`, `mobile`, `other_contact`, `transport`, `contacted_before`, `comment`, `confirmation_code`) VALUES ('$academic_year','$grade','$first_name','$last_name','$gender','$dob','$religion','$nationality','$birth_place','$current_school','$reason','$permanent_address','$country','$state','$city','$pincode','$phone','$email','$mobile','$other_contact','$transport','$contacted_before','$comment','')";
            if (mysqli_query($mysqli, $insertquery)) {
                echo "SUCCESS";
            } 
            else {
                echo "FAILED";
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head><title>Vidya Vijay Bal Mandir | Admission Form</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,400italic,700,900,300">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-awesome-4.4.0/css/font-awesome.css">
    <link type="text/css" rel="stylesheet" href="assets/font/font-icon/font-svg/css/Glyphter.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/animate/animate.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/bootstrap-3.3.5/css/bootstrap.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/owl-carousel-2.0/assets/owl.carousel.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/selectbox/css/jquery.selectbox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/fancybox/css/jquery.fancybox-buttons.css">
    <link type="text/css" rel="stylesheet" href="assets/libs/media-element/build/mediaelementplayer.min.css">
    <link type="text/css" rel="stylesheet" href="#" id="color-skins">
    <script src="assets/libs/jquery/jquery-2.1.4.min.js"></script>
    <script src="assets/libs/js-cookie/js.cookie.js"></script>
    <script>
        if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/' + Cookies.get('color-skin') + '.css');
    } else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
        $('#color-skins').attr('href', 'assets/css/color-1.css');
    }
    </script>
    <style type="text/css">
        /*created code start from here*/
        .register-table {
            padding: 27px !important;
        }
        .danger {
            color: #d33212 !important;
        }
        .rlp .rlp-wrapper{
            width:80%;
        }
        .rlp{
            background:  linear-gradient(90deg, rgba(2,0,36,1) 0%, rgba(9,9,121,1) 35%, rgba(0,212,255,1) 100%);
            height:100%;
        }
        /*created code end here*/
    </style>
</head>
<body><!-- HEADER-->
<header><!-- not include--></header>
<!-- WRAPPER-->
<div id="wrapper-content"><!-- PAGE WRAPPER-->
    <div id="page-wrapper"><!-- MAIN CONTENT-->
        <div class="main-content"><!-- CONTENT-->
            <div class="content">
                <div class="page-register rlp">
                    <div class="container">
                        <div class="register-wrapper rlp-wrapper">
                            <div class="register-table rlp-table">
                                <a href="index.html">
                                    <img src="assets/images/logo.jpg" alt="" class="login"/>

                                </a>
                                <h1 style="font-size: 29px;">Vidya Vijay Bal Mandir</h1>
                                <div class="register-title rlp-title">Admission Form</div>
                                <form method="post" id="register-form">
                                <div class="register-form bg-w-form rlp-form">
                                    <h4>Academic Details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">Applying for Academic Year /
शैक्षणिक वर्ष के लिए आवेदन
                                                <span class="highlight">*</span>
                                            </label>
                                            <select name="academic_year" id="academic_year" class="form-control form-input"/> 
                                                <option value=''> --Select-- </option>
                                                <option value="2020-21">2020-21</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="regemail" class="control-label form-label">Which grade are you seeking admission to/ किस कक्षा हेतु आवेदन कर रहे है?
                                                <span class="highlight">*</span>
                                            </label>
                                            <select name="grade" id="grade" class="form-control form-input"/> 
                                                <option value=''> --Please Select-- </option>
                                                <option value="Nursery">Nursery</option>
                                                <option value="LKG">LKG</option>
                                                <option value="UKG">UKG</option>
                                                <option value="Grade1">Class 1</option>
                                                <option value="Grade2">Class 2</option>
                                                <option value="Grade3">Class 3</option>
                                                <option value="Grade4">Class 4</option>
                                                <option value="Grade5">Class 5</option>
                                                <option value="Grade6">Class 6</option>
                                                <option value="Grade7">Class 7</option>
                                                <option value="Grade8">Class 8</option>
                                                <option value="Grade9">Class 9</option>
                                                <option value="Grade10">Class 10</option>
                                                <option value="Grade11">Class 11</option>
                                                <option value="Grade12">Class 12</option>
                                            </select>
                                        </div>
                                    </div>
                                    <h4>Personal Details (Of The Child)</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">First Name/पहला नाम
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="first_name" id="first_name" type="text" class="form-control form-input" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="regemail" class="control-label form-label">Last Name/उपनाम
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="last_name" id="last_name" type="text" class="form-control form-input" required/>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="regpassword" class="control-label form-label">Gender/लिंग
                                                <span class="highlight">*</span>
                                            </label>
                                            <select name="gender" id="gender" class="form-control form-input"/> 
                                                <option value=''> --Select-- </option>
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="reregpassword" class="control-label form-label">Date of Birth/जन्म की तारीख 
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="dob" id="dob" type="date" class="form-control form-input" required/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">Religion/धर्म 
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="religion" id="religion" type="text" class="form-control form-input" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="regemail" class="control-label form-label">Nationality/राष्ट्रीयता
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="nationality" id="nationality" type="text" class="form-control form-input" required/>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="regpassword" class="control-label form-label">Place of Birth/जन्म स्थान
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="birth_place" id="birth_place" type="text" class="form-control form-input" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="reregpassword" class="control-label form-label">Current School/वर्तमान विद्यालय 
                                                <!-- <span class="highlight">*</span> -->
                                            </label>
                                            <input name="current_school" id="current_school" type="text" class="form-control form-input"/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">Reason to Change Current School/करंट स्कूल बदलने का कारण 
                                                <!-- <span class="highlight">*</span> -->
                                            </label>
                                            <input name="reason" id="reason" type="text" class="form-control form-input"/>
                                        </div>
                                    </div>
                                    <h4>Address Details</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">Permanent Address/स्थाई पता
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="permanent_address" id="permanent_address" type="text" class="form-control form-input" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="reregpassword" class="control-label form-label">City/शहर 
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="city" id="city" type="text" class="form-control form-input" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="regpassword" class="control-label form-label">State/राज्य
                                                <span class="highlight">*</span>
                                            </label>
                                            <!-- <select name="state" id="state" class="form-control form-input"/> 
                                                <option value=''> --Select-- </option>
                                                <option value="madhyapradesh">Madhya Pradesh</option>
                                                <option value="punjab">Punjab</option>
                                            </select> -->
                                            <input name="state" id="state" type="text" class="form-control form-input" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="regemail" class="control-label form-label">Country/देश
                                                <span class="highlight">*</span>
                                            </label>
                                            <!-- <select name="country" id="country" class="form-control form-input"/> 
                                                <option value=''> --Select-- </option>
                                                <option value="india">India</option>
                                                <option value="afghanistan">afghanistan</option>
                                            </select> -->
                                            <input name="country" id="country" type="text" class="form-control form-input" required/>
                                        </div>

                                        
                                        
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">Pincode/पिन कोड 
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="pincode" id="pincode" type="text" class="form-control form-input" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="regemail" class="control-label form-label">Phone/फ़ोन
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="phone" id="phone" type="text" class="form-control form-input" required/>
                                        </div>

                                        <div class="col-md-6">
                                            <label for="regpassword" class="control-label form-label">Email/ईमेल
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="email" id="email" type="email" class="form-control form-input" required/>
                                        </div>
                                        <div class="col-md-6">
                                            <label for="reregpassword" class="control-label form-label">Mobile/मोबाइल 
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="mobile" id="mobile" type="text" class="form-control form-input" required/>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">Other Contact/अन्य संपर्क 
                                                <!-- <span class="highlight">*</span> -->
                                            </label>
                                            <input name="other_contact" id="other_contact" type="text" class="form-control form-input" required/>
                                        </div>
                                    </div>
                                    <h4>Preference</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">Transport/ट्रांसपोर्ट
                                                <span class="highlight">*</span>
                                            </label>
                                            <select name="transport" id="transport" class="form-control form-input"/> 
                                                <option value=''> --Select-- </option>
                                                <option value="school_transport">School Transport</option>
                                                <option value="own_transport">Own Transport</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                    <h4>Previous History</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">Contacted Before/पहले संपर्क किया?
                                                <span class="highlight">*</span>
                                            </label>
                                            <select name="contacted_before" id="contacted_before" class="form-control form-input"/> 
                                                <option value=''> --Select-- </option>
                                                <option value="yes">Yes</option>
                                                <option value="no">No</option>
                                            </select>
                                        </div>                                        
                                    </div>
                                    <h4>Additional Information</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">Comment/टिप्पणी
                                                <!-- <span class="highlight">*</span> -->
                                            </label>
                                            <textarea name="comment" id="comment" class="form-control form-input"/></textarea>
                                        </div>                                        
                                    </div>
                                    <!-- <h4>Confirmation Code</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <label for="regname" class="control-label form-label">Captcha
                                                <span class="highlight">*</span>
                                            </label>
                                            <input name="captcha" id="captcha" type="text" class="form-control form-input" required/>
                                        </div>                                        
                                    </div> -->
                                </div>
                                <h5><div id="admission_form_alert" class="danger"></div></h5>
                                <div class="register-submit">
                                    <input class="btn btn-register btn-green" type="button" value="submit" name="submit" onclick="validateAdmissionForm();">
                                    <!-- <button type="submit" onclick="window.location.href='index.html'" class="btn btn-register btn-green"><span>create account</span></button> -->
                                </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BUTTON BACK TO TOP-->
    <div id="back-top"><a href="#top"><i class="fa fa-angle-double-up"></i></a></div>
</div>
<!-- FOOTER-->
<footer></footer>
<!-- THEME SETTING-->
<!-- <div class="theme-setting">
    <div class="theme-loading">
        <div class="theme-loading-content">
            <div class="dots-loader"></div>
        </div>
    </div>
    <a href="javascript:;" class="btn-theme-setting"><i class="fa fa-tint"></i></a>

    <div class="content-theme-setting"><h2 class="title">setting color</h2>
        <ul class="list-unstyled list-inline color-skins">
            <li data-color="color-1"></li>
            <li data-color="color-2"></li>
            <li data-color="color-3"></li>
            <li data-color="color-4"></li>
            <li data-color="color-5"></li>
            <li data-color="color-6"></li>
            <li data-color="color-7"></li>
            <li data-color="color-8"></li>
            <li data-color="color-9"></li>
            <li data-color="color-10"></li>
        </ul>
    </div>
</div> -->
<!-- LOADING--><!-- JAVASCRIPT LIBS-->
<script>if ((Cookies.get('color-skin') != undefined) && (Cookies.get('color-skin') != 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-' + Cookies.get('color-skin') + '.png');
} else if ((Cookies.get('color-skin') == undefined) || (Cookies.get('color-skin') == 'color-1')) {
    $('.logo .header-logo img').attr('src', 'assets/images/logo-color-1.png');
}</script>
<script>
    function validateAdmissionForm()
    {
        $('#admission_form_alert').html('');
        var academic_year = $('#academic_year').val();
        var grade = $('#grade').val();
        var first_name = $('#first_name').val();
        var last_name = $('#last_name').val();
        var gender = $('#gender').val();
        var dob = $('#dob').val();
        var religion = $('#religion').val();
        var nationality = $('#nationality').val();
        var birth_place = $('#birth_place').val();
        var current_school = $('#current_school').val();
        var reason = $('#reason').val();
        var permanent_address = $('#permanent_address').val();
        var country = $('#country').val();
        var state = $('#state').val();
        var city = $('#city').val();
        var pincode = $('#pincode').val();
        var phone = $('#phone').val();
        var email = $('#email').val();
        var mobile = $('#mobile').val();
        var other_contact = $('#other_contact').val();
        var transport = $('#transport').val();
        var contacted_before = $('#contacted_before').val();
        var comment = $('#comment').val();
        /*var captcha = $('#captcha').val();*/
        if (academic_year == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (grade == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (first_name == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (last_name == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (gender == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (dob == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (religion == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (nationality == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (birth_place == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        /*else if (current_school == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }*/
        /*else if (reason == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }*/
        else if (permanent_address == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (country == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (city == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (pincode == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (phone == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (email == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (mobile == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        /*else if (other_contact == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }*/
        else if (transport == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        else if (contacted_before == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }
        /*else if (comment == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }*/
        /*else if (captcha == "")
        {
            $('#admission_form_alert').html('');
            $('#admission_form_alert').html('Please Enter Required Field');
        }*/
        else
        {
            $.ajax({
                type: "post",
                url: "admission_form.php",
                data: $('#register-form').serialize(),
                success: function (resp) {
                    resp = resp.trim();
                    if (resp == "SUCCESS")
                    {
                        $('#admission_form_alert').html('');
                        $('#admission_form_alert').html('Thank you');
                        setTimeout(function(){ 
                            location.reload();  
                        }, 3000);          
                    }
                    else if (resp == "EMAIL_EXIST") {
                        $('#admission_form_alert').html('');
                        $('#admission_form_alert').html('Email/Mobile  Already Exist, Login to Continue.');
                    }
                    else
                    {
                        $('#admission_form_alert').html('');
                        $('#admission_form_alert').html('Thank you');
                        setTimeout(function(){ 
                            location.reload();  
                        }, 3000); 
                        // $('#admission_form_alert').html('');
                        // $('#admission_form_alert').html('Something Went Wrong Please Try Again');
                    }
                }
            });
        }
    }
</script>
<script src="assets/libs/bootstrap-3.3.5/js/bootstrap.min.js"></script>
<script src="assets/libs/smooth-scroll/jquery-smoothscroll.js"></script>
<script src="assets/libs/owl-carousel-2.0/owl.carousel.min.js"></script>
<script src="assets/libs/appear/jquery.appear.js"></script>
<script src="assets/libs/count-to/jquery.countTo.js"></script>
<script src="assets/libs/wow-js/wow.min.js"></script>
<script src="assets/libs/selectbox/js/jquery.selectbox-0.2.min.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox.js"></script>
<script src="assets/libs/fancybox/js/jquery.fancybox-buttons.js"></script>
<!-- MAIN JS-->
<script src="assets/js/main.js"></script>
</body>
</html>