<?php
include 'header.php';
?>


<div class="main-content">
    <div class="container-fluid">
        <div class="align-items-center">
            <div class="container-fluid loginMain pb-0">
                <div class="row">
                    <div class="loginScreen">
                        <div class="custom-card custom-card-center logBox">
                            <h2>User Login</h2>
                            <div>
                                <div class="custom-card-body">
                                    <form action="/Signin" autocomplete="off" method="post" novalidate="novalidate"><input name="__RequestVerificationToken" type="hidden" value="C9hZ7VBOaIRoTopnySGNhbRiF4Y8AiKV83KZBH2MMJsEoavgWGMWfn6VxOTdSDIwMTGtD-fvoc49fKbSJPocO47gNk25vhVLFLBmEjRN5URWWXasjArf5tlfCIuhgSNq0">
                                        <div class="form-group">
                                            <label for="Username">Mobile No/Email Id/Username</label>
                                            <div class="input-group loginInput">
                                                <input autocomplete="off" class="form-control" data-val="true" data-val-maxlength="Please enter a valid user name." data-val-maxlength-max="100" data-val-onlywhitespace="Please provide valid Mobile No/Email Id/Username" data-val-required="Enter Mobile No/Email Id/Username." id="Username" name="Username" placeholder="Mobile No/Email Id/Username" type="text" value="">
                                                <span class="input-group-addon dropdown">
                                                    <img alt="Username" class="dropbtn" src="image/ico_user.png">
                                                </span>
                                            </div>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Username" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="TempPassword">Password</label>
                                            <div class="input-group loginInput">
                                                <input class="form-control" data-val="true" data-val-maxlength="Please enter a valid user name." data-val-maxlength-max="150" data-val-required="Enter Password." id="TempPassword" name="TempPassword" placeholder="Password" type="password">
                                                <span class="input-group-addon dropdown">
                                                    <img alt="Password" class="dropbtn" src="image/ico_lock.png">
                                                </span>
                                            </div>
                                            <span class="field-validation-valid text-danger" data-valmsg-for="TempPassword" data-valmsg-replace="true"></span>
                                        </div>
                                        <div class="form-group">
                                            <label for="Captcha">Security code</label>
                                            <div class="input-group loginInput">
                                                <input autocomplete="off" class="form-control text-box single-line" data-val="true" data-val-maxlength="Please enter valid security code." data-val-maxlength-max="10" data-val-onlywhitespace="Please provide valid Security code" data-val-required="Enter Security Code." id="Captcha" name="Captcha" placeholder="Security code" type="text" value="">
                                            </div>
                                            <div class="input-group loginInput">
                                                <span class="field-validation-valid text-danger" data-valmsg-for="Captcha" data-valmsg-replace="true"></span>
                                            </div>
                                        </div>
                                        <div class="">
                                            <img alt="Captcha" id="CaptchaImage" src="/Captcha/GetCaptcha" width="150" height="30">
                                            <a id="RefreshCaptcha" class="btn btn-default btn-social-icon pointer"><img src="/Images/ico_captcha.jpg"></a>
                                        </div>
                                        <div class="form-group has-feedback">
                                            <input data-val="true" data-val-maxlength="Please enter a valid user name." data-val-maxlength-max="150" data-val-required="Enter Mobile No/Email Id/Username." id="Password" name="Password" type="hidden" value="">
                                            <span class="field-validation-valid text-danger" data-valmsg-for="Password" data-valmsg-replace="true"></span>
                                        </div>
                                        <button type="submit" id="btnSubmit" class="btn btn-primary btn-login">
                                            Login
                                            <i class="fa fa-sign-in"></i>
                                        </button>
                                    </form>
                                    <div class="text-center loginHelp mt-2">
                                        <a href="/ForgetPassword" class="pr-2 border-right">Forgot Password</a>
                                        <a href="registration.php" class="pl-1">Click here to sign up</a>

                                    </div>
                                   
                                </div>
                            </div>
                        </div>
                     
                    </div>
                </div>
            </div>
        </div>
        <script src="/bundles/jqueryval?v=1ON0tpNTKhSLKT-sGXfWjxFCyNQEX7h30W2uB664x2c1"></script>
        <script src="/bundles/encription?v=ntG_dDYqDyvj3U_1pVLFLWAK5MpL1laTIEECrh9kMWY1"></script>
    </div>
</div>

<?php
include 'footer.php';
?>
