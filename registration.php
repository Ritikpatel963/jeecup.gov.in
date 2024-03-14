<?php
include 'header.php';
?>
<style>
    .card {
        box-shadow: 0 0 1px rgba(0, 0, 0, 0.125), 0 1px 3px rgba(0, 0, 0, 0.2);
    }
    .card-body {
  flex: 1 1 auto;
  min-height: 1px;
  padding: 1.25rem;
}
.text-primary {
  color: #6f0047 !important;
}
strong {
  font-weight: bolder;
}
hr {
  margin-top: 1rem;
  margin-bottom: 1rem;
  border: 0;
    border-top-width: 0px;
    border-top-style: none;
    border-top-color: currentcolor;
  border-top: 1px solid rgba(0, 0, 0, 0.1);
}
.form-group {
  margin-bottom: 1rem;
}
.required::after {
  content: " * ";
  font-weight: bolder;
  color: red;
}
.form-control {
  display: block;
  width: 100%;
  height: calc(1.5em + .75rem + 2px);
  padding: .375rem .75rem;
  font-size: 1rem;
  font-weight: 400;
  line-height: 1.5;
  color: #495057;
  background-color: #fff;
  background-clip: padding-box;
  border: 1px solid #ced4da;
  border-radius: .25rem;
  transition: border-color .15s ease-in-out, box-shadow .15s ease-in-out;
}
.text-danger {
  color: #dc3545 !important;
}
fieldset {
  border: 1px groove #ddd;
  padding: 0 1.4em 1.4em 1.4em !important;
  margin: 0 0 1.5em 0 !important;
  -webkit-box-shadow: 0px 0px 0px 0px #000;
  box-shadow: 0px 0px 0px 0px #000;
}
legend {
  font-size: 1.0em !important;
  font-weight: bold !important;
  text-align: left;
  width: auto;
  padding: 0 10px;
  border-bottom: none;
  margin-bottom: 0px !important;
}
label {
  display: inline-block;
  max-width: 100%;
  margin-bottom: 5px;
  font-weight: 700;
}
.row {
  display: flex;
  -ms-flex-wrap: wrap;
  flex-wrap: wrap;
  margin-right: -15px;
  margin-left: -15px;
}
@media (min-width: 576px) {
  .d-sm-block {
    display: block !important;
  }
}
@media (min-width: 992px) {
  .text-lg-right {
    text-align: right !important;
  }
}
@media (min-width: 768px) {
  .col-md-4 {
    -ms-flex: 0 0 33.333333%;
    flex: 0 0 33.333333%;
    max-width: 33.333333%;
  }
}

</style>



<div class="main-content">
    <div class="container-fluid">
        <div class="card card-info">
            <div class="card-header">
                <h4 class="card-title">Registration/Sign up Form</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="d-none d-sm-block col-md-6 col-12">
                        <span class="text-primary"><strong>Enter Details</strong></span>
                    </div>
                    <div class="col-md-6 col-12 text-md-right text-lg-right">
                        <span class="text-primary"><strong>Fields marked with <b class="text-danger">*</b> are mandatory</strong></span>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <hr>
                    </div>
                </div>
                <form action="/Registration" autocomplete="off" id="form1" method="post" novalidate="novalidate">
                    <div class="row">
                        <input name="__RequestVerificationToken" type="hidden" value="yUymTO63PkQPY4OfGpOwLHxYMKEs5FqvgBR-BPdZ7nnxwL0THd7VrukHRZ1kbYApMVSmg7GNRiBZF2uU2n1atLC37qibrRLS0GGDKri0ANsNmM4lr7sWj0DXtpG-3-sa0">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="col-12 col-md-12 required" for="Name">Name</label>
                                <div class="col-12 col-md-12">
                                    <input autocomplete="off" class="form-control text-box single-line" data-val="true" data-val-length="Name cannot be longer than 50 characters" data-val-length-max="50" data-val-onlywhitespace="Please provide a valid Model_Name" data-val-regex="Alphabet A-Z, a-z number 0-9 and special characters . - only are allowed." data-val-regex-pattern="^([A-Za-z0-9\.\-\s]+)$" data-val-required="Please enter name" id="Name" name="Name" type="text" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Name" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <div class="col-12 col-md-12">
                                    <fieldset>
                                        <legend class="required">Gender</legend>
                                        <div class="row">
                                            <div class="col-md-4">
                                                <div class="iradio_square-blue" style="position: relative;"><input data-val="true" data-val-required="Please select gender" id="Sex_M" name="Sex" type="radio" value="M" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label for="Male">Male</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="iradio_square-blue" style="position: relative;"><input id="Sex_F" name="Sex" type="radio" value="F" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label for="Female">Female</label>
                                            </div>
                                            <div class="col-md-4">
                                                <div class="iradio_square-blue" style="position: relative;"><input id="Sex_O" name="Sex" type="radio" value="O" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label for="Transgender">Transgender</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Sex" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="col-12 col-md-12 required" for="Address1">Address</label>
                                <div class="col-12 col-md-12">
                                    <input placeholder="Premise Number or Name" autocomplete="off" class="form-control text-box single-line" data-val="true" data-val-length="Address can not have more than 50 characters" data-val-length-max="50" data-val-onlywhitespace="Please provide a valid Model_Address" data-val-regex="Alphabet A-Z, a-z, number 0-9 and special characters  , .  - ( )  : &amp; / only are allowed in address." data-val-regex-pattern="^([A-Za-z0-9 \-,.():&amp;/ \s]+)$" data-val-required="Please enter  valid address" id="Address1" name="Address1" type="text" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Address1" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div>&nbsp;</div>
                            <div class="form-group">
                                <div class="col-12 col-md-12">
                                    <input placeholder="Sub-locality" autocomplete="off" class="form-control text-box single-line" data-val="true" data-val-length="Address can not have more than 50 characters" data-val-length-max="50" data-val-regex="Alphabet A-Z, a-z, number 0-9 and special characters  , .  - ( )  : &amp; / only are allowed in address." data-val-regex-pattern="^([A-Za-z0-9 \-,.():&amp;/ \s]+)$" id="Address2" name="Address2" type="text" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Address2" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <div>&nbsp;</div>
                                <div class="col-12 col-md-12">
                                    <input placeholder="Locality" autocomplete="off" class="form-control text-box single-line" data-val="true" data-val-length="Address can not have more than 50 characters" data-val-length-max="50" data-val-regex="Alphabet A-Z, a-z, number 0-9 and special characters  , .  - ( )  : &amp; / only are allowed in address." data-val-regex-pattern="^([A-Za-z0-9 \-,.():&amp;/ \s]+)$" id="Address3" name="Address3" type="text" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Address3" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="col-12 col-md-12 required" for="Country">Country</label>
                            <div class="form-group">
                                <div class="col-12 col-md-12">
                                    <select class="form-control select2-hidden-accessible" data-val="true" data-val-regex="Please select country" data-val-regex-pattern="^[\d]{3}$" data-val-required="Please select country" id="country" name="Country" data-select2-id="country" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="2">---Select Country ---</option>
                                        <option value="011">Afghanistan</option>
                                        <option value="012">Albania</option>
                                        <option value="013">Algeria</option>
                                        <option value="014">Andorra</option>
                                        <option value="015">Angola</option>
                                        <option value="016">Antigua and Barbuda</option>
                                        <option value="017">Argentina</option>
                                        <option value="018">Armenia</option>
                                        <option value="019">Australia</option>
                                        <option value="020">Austria</option>
                                        <option value="021">Azerbaijan</option>
                                        <option value="022">Bahamas</option>
                                        <option value="023">Bahrain</option>
                                        <option value="003">Bangladesh</option>
                                        <option value="025">Barbados</option>
                                        <option value="026">Belarus</option>
                                        <option value="027">Belgium</option>
                                        <option value="028">Belize</option>
                                        <option value="029">Benin</option>
                                        <option value="030">Bhutan</option>
                                        <option value="031">Bolivia</option>
                                        <option value="032">Bosnia and Herzegovina</option>
                                        <option value="033">Botswana</option>
                                        <option value="034">Brazil</option>
                                        <option value="035">Brunei</option>
                                        <option value="036">Bulgaria</option>
                                        <option value="037">Burkina Faso</option>
                                        <option value="038">Burundi</option>
                                        <option value="039">Cambodia</option>
                                        <option value="040">Cameroon</option>
                                        <option value="041">Canada</option>
                                        <option value="042">Cape Verde</option>
                                        <option value="043">Central African Republic</option>
                                        <option value="044">Chad</option>
                                        <option value="045">Chile</option>
                                        <option value="046">China</option>
                                        <option value="047">Colombia</option>
                                        <option value="048">Comoros</option>
                                        <option value="049">Congo, Democratic Republic of</option>
                                        <option value="050">Congo, Republic of the</option>
                                        <option value="051">Costa Rica</option>
                                        <option value="052">Cote d'Ivoire</option>
                                        <option value="053">Croatia</option>
                                        <option value="054">Cuba</option>
                                        <option value="055">Cyprus</option>
                                        <option value="056">Czech Republic</option>
                                        <option value="099">Democratic People's Republic o</option>
                                        <option value="057">Denmark</option>
                                        <option value="058">Djibouti</option>
                                        <option value="059">Dominica</option>
                                        <option value="060">Dominican Republic</option>
                                        <option value="061">Ecuador</option>
                                        <option value="062">Egypt</option>
                                        <option value="063">El Salvador</option>
                                        <option value="064">Equatorial Guinea</option>
                                        <option value="065">Eritrea</option>
                                        <option value="066">Estonia</option>
                                        <option value="067">Ethiopia</option>
                                        <option value="068">Fiji</option>
                                        <option value="069">Finland</option>
                                        <option value="070">France</option>
                                        <option value="071">Gabon</option>
                                        <option value="072">Georgia</option>
                                        <option value="073">Germany</option>
                                        <option value="074">Ghana</option>
                                        <option value="075">Greece</option>
                                        <option value="076">Grenada</option>
                                        <option value="077">Guatemala</option>
                                        <option value="078">Guinea</option>
                                        <option value="079">Guinea-Bissau</option>
                                        <option value="080">Guyana</option>
                                        <option value="081">Haiti</option>
                                        <option value="082">Honduras</option>
                                        <option value="083">Hong Kong</option>
                                        <option value="084">Hungary</option>
                                        <option value="085">Iceland</option>
                                        <option value="001" data-select2-id="9">India</option>
                                        <option value="087">Indonesia</option>
                                        <option value="088">Iran</option>
                                        <option value="089">Iraq</option>
                                        <option value="090">Ireland</option>
                                        <option value="091">Israel</option>
                                        <option value="092">Italy</option>
                                        <option value="093">Jamaica</option>
                                        <option value="094">Japan</option>
                                        <option value="095">Jordan</option>
                                        <option value="096">Kazakhstan</option>
                                        <option value="097">Kenya</option>
                                        <option value="098">Kiribati</option>
                                        <option value="101">Kuwait</option>
                                        <option value="102">Kyrgyzstan</option>
                                        <option value="103">Laos</option>
                                        <option value="104">Latvia</option>
                                        <option value="105">Lebanon</option>
                                        <option value="106">Lesotho</option>
                                        <option value="107">Liberia</option>
                                        <option value="108">Libyan Arab Jamahiriya</option>
                                        <option value="109">Liechtenstein</option>
                                        <option value="110">Lithuania</option>
                                        <option value="111">Luxembourg</option>
                                        <option value="112">Macedonia</option>
                                        <option value="113">Madagascar</option>
                                        <option value="114">Malawi</option>
                                        <option value="115">Malaysia</option>
                                        <option value="116">Maldives</option>
                                        <option value="117">Mali</option>
                                        <option value="118">Malta</option>
                                        <option value="119">Marshall Islands</option>
                                        <option value="120">Mauritania</option>
                                        <option value="121">Mauritius</option>
                                        <option value="122">Mexico</option>
                                        <option value="123">Micronesia, Federated States o</option>
                                        <option value="124">Moldova</option>
                                        <option value="125">Monaco</option>
                                        <option value="126">Mongolia</option>
                                        <option value="127">Montenegro</option>
                                        <option value="128">Morocco</option>
                                        <option value="129">Mozambique</option>
                                        <option value="130">Myanmar</option>
                                        <option value="131">Namibia</option>
                                        <option value="132">Nauru</option>
                                        <option value="004">Nepal</option>
                                        <option value="134">Netherlands</option>
                                        <option value="135">New Zealand</option>
                                        <option value="136">Nicaragua</option>
                                        <option value="137">Niger</option>
                                        <option value="138">Nigeria</option>
                                        <option value="139">Norway</option>
                                        <option value="140">Oman</option>
                                        <option value="999">Others</option>
                                        <option value="141">Pakistan</option>
                                        <option value="142">Palau</option>
                                        <option value="143">Panama</option>
                                        <option value="144">Papua New Guinea</option>
                                        <option value="145">Paraguay</option>
                                        <option value="146">Peru</option>
                                        <option value="147">Philippines</option>
                                        <option value="148">Poland</option>
                                        <option value="149">Portugal</option>
                                        <option value="150">Qatar</option>
                                        <option value="100">Republic of Korea</option>
                                        <option value="151">Romania</option>
                                        <option value="152">Russia</option>
                                        <option value="153">Rwanda</option>
                                        <option value="154">Saint Kitts and Nevis</option>
                                        <option value="155">Saint Lucia</option>
                                        <option value="156">Saint Vincent and the Grenadin</option>
                                        <option value="157">Samoa</option>
                                        <option value="158">San Marino</option>
                                        <option value="159">Sao Tome and Principe</option>
                                        <option value="160">Saudi Arabia</option>
                                        <option value="161">Senegal</option>
                                        <option value="162">Serbia</option>
                                        <option value="163">Seychelles</option>
                                        <option value="164">Sierra Leone</option>
                                        <option value="165">Singapore</option>
                                        <option value="166">Slovakia</option>
                                        <option value="167">Slovenia</option>
                                        <option value="168">Solomon Islands</option>
                                        <option value="169">Somalia</option>
                                        <option value="170">South Africa</option>
                                        <option value="203">South Sudan</option>
                                        <option value="171">Spain</option>
                                        <option value="172">Sri Lanka</option>
                                        <option value="173">Sudan</option>
                                        <option value="174">Suriname</option>
                                        <option value="175">Swaziland</option>
                                        <option value="176">Sweden</option>
                                        <option value="177">Switzerland</option>
                                        <option value="178">Syrian Arab Republic</option>
                                        <option value="179">Tajikistan</option>
                                        <option value="181">Thailand</option>
                                        <option value="182">Timor-Leste</option>
                                        <option value="183">Togo</option>
                                        <option value="184">Tonga</option>
                                        <option value="185">Trinidad and Tobago</option>
                                        <option value="186">Tunisia</option>
                                        <option value="187">Turkey</option>
                                        <option value="188">Turkmenistan</option>
                                        <option value="189">Tuvalu</option>
                                        <option value="190">Uganda</option>
                                        <option value="191">Ukraine</option>
                                        <option value="192">United Arab Emirates</option>
                                        <option value="193">United Kingdom and Northern Ir</option>
                                        <option value="180">United Republic of Tanzania</option>
                                        <option value="195">Uruguay</option>
                                        <option value="002">USA</option>
                                        <option value="196">Uzbekistan</option>
                                        <option value="197">Vanuatu</option>
                                        <option value="198">Venezuela, Bolivarian Republic</option>
                                        <option value="199">Vietnam</option>
                                        <option value="200">Yemen</option>
                                        <option value="201">Zambia</option>
                                        <option value="202">Zimbabwe</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="1" style="width: 439.6px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-country-container"><span class="select2-selection__rendered" id="select2-country-container" role="textbox" aria-readonly="true" title="India">India</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Country" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="stateAndDistrict" class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="col-12 col-md-12 required" for="State">State</label>
                                <div class="col-12 col-md-12">
                                    <select class="form-control select2-hidden-accessible" data-val="true" data-val-regex="Please select a valid state." data-val-regex-pattern="^[A-Z]{2}$" data-val-requiredif="Please select state" data-val-requiredif-dependentproperty="Country" data-val-requiredif-dependentvalue="001" data-val-requiredif-operator="EqualTo" id="state" name="State" data-select2-id="state" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="11">--Select a state--</option>
                                        <option value="AN">Andaman And Nicobar Islands</option>
                                        <option value="AP">Andhra Pradesh</option>
                                        <option value="AR">Arunachal Pradesh</option>
                                        <option value="AS">Assam</option>
                                        <option value="BH">Bihar</option>
                                        <option value="CH">Chandigarh</option>
                                        <option value="CG">Chhattisgarh</option>
                                        <option value="DN">Dadra and Nagar Haveli and Daman and Diu</option>
                                        <option value="DH">Delhi</option>
                                        <option value="GD">Goa</option>
                                        <option value="GJ">Gujarat</option>
                                        <option value="HY">Haryana</option>
                                        <option value="HP">Himachal Pradesh</option>
                                        <option value="JK">Jammu And Kashmir</option>
                                        <option value="JH">Jharkhand</option>
                                        <option value="KN">Karnataka</option>
                                        <option value="KL">Kerala</option>
                                        <option value="LK">Ladakh</option>
                                        <option value="LD">Lakshadweep</option>
                                        <option value="MP">Madhya Pradesh</option>
                                        <option value="MH">Maharashtra</option>
                                        <option value="MN">Manipur</option>
                                        <option value="MG">Meghalaya</option>
                                        <option value="MZ">Mizoram</option>
                                        <option value="NL">Nagaland</option>
                                        <option value="OR">Odisha</option>
                                        <option value="PC">Puducherry</option>
                                        <option value="PB">Punjab</option>
                                        <option value="RJ">Rajasthan</option>
                                        <option value="SK">Sikkim</option>
                                        <option value="TN">Tamil nadu</option>
                                        <option value="TG">Telangana</option>
                                        <option value="TR">Tripura</option>
                                        <option value="UP">Uttar Pradesh</option>
                                        <option value="UC">Uttarakhand</option>
                                        <option value="WB">West Bengal</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="3" style="width: 439.6px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-state-container"><span class="select2-selection__rendered" id="select2-state-container" role="textbox" aria-readonly="true" title="--Select a state--">--Select a state--</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>

                                    <span class="field-validation-valid text-danger" data-valmsg-for="State" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="col-12 col-md-12 required" for="District">District</label>
                            <div class="form-group">
                                <div class="col-12 col-md-12">
                                    <select class="form-control select2-hidden-accessible" data-val="true" data-val-number="The field District must be a number." data-val-regex="Please select a valid district." data-val-regex-pattern="^[\d]{1,3}$" data-val-requiredif="Please select District" data-val-requiredif-dependentproperty="Country" data-val-requiredif-dependentvalue="001" data-val-requiredif-operator="EqualTo" id="district" name="District" data-select2-id="district" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="6">---Select a state first---</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="5" style="width: 439.6px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-district-container"><span class="select2-selection__rendered" id="select2-district-container" role="textbox" aria-readonly="true" title="---Select a state first---">---Select a state first---</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="District" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="pincodeAndMobile" class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="col-12 col-md-12" for="Pincode">Pincode</label>
                                <div class="col-12 col-md-12">
                                    <input autocomplete="off" class="form-control text-box single-line" data-val="true" data-val-regex="Please enter valid pincode" data-val-regex-pattern="[0-9]{6}" id="Pincode" maxlength="6" name="Pincode" type="text" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Pincode" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <label class="col-12 col-md-12 required" for="MobileNo">Mobile number</label>
                            <div id="divDistrict" class="form-group">
                                <div class="col-12 col-md-12">
                                    <input autocomplete="off" class="form-control text-box single-line" data-val="true" data-val-regex="Please enter 10 digit valid Mobile number" data-val-regex-pattern="^[5|6|7|8|9]\d{9}$" data-val-remote="You cannot register with this mobile number. An user with this mobile number already exists." data-val-remote-additionalfields="*.MobileNo" data-val-remote-type="POST" data-val-remote-url="/Registration/CheckMobileAlreadyExist" data-val-requiredif="Please provide a valid indian mobile number." data-val-requiredif-dependentproperty="Country" data-val-requiredif-dependentvalue="001" data-val-requiredif-operator="EqualTo" id="MobileNo" name="MobileNo" type="text" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="MobileNo" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="col-12 col-md-12" for="PhoneNo">Phone number</label>
                                <div class="col-12 col-md-12">
                                    <input autocomplete="off" class="form-control text-box single-line" id="PhoneNo" maxlength="15" name="PhoneNo" placeholder="Phone number with STD code. (e.g 011XXXXXXXX)" type="tel" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="PhoneNo" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="col-12 col-md-12 required" for="EmailAddress">E-mail address</label>
                                <div class="col-12 col-md-12">
                                    <input autocomplete="off" class="form-control text-box single-line" data-val="true" data-val-length="Enter valid Email Address" data-val-length-max="250" data-val-remote="An user with this email already exist. if it's your email proceed to login on home page, if not enter your email address." data-val-remote-additionalfields="*.EmailAddress" data-val-remote-type="POST" data-val-remote-url="/Registration/CheckEmailAlreadyExist" data-val-required="Please enter email address" id="EmailAddress" name="EmailAddress" type="email" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="EmailAddress" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <div class="col-md-12">
                                    <fieldset>
                                        <legend class="required"><label for="ExService">Are you an Ex Servicemen?</label></legend>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="iradio_square-blue checked" style="position: relative;"><input checked="True" data-val="true" data-val-regex="Please Select Ex-Servicemen" data-val-regex-pattern="[N|Y]{1}" data-val-required="Please Select Ex-Servicemen" id="ExService_No" name="ExService" type="radio" value="N" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label for="No">No</label>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="iradio_square-blue" style="position: relative;"><input id="ExService_Yes" name="ExService" type="radio" value="Y" style="position: absolute; opacity: 0;"><ins class="iCheck-helper" style="position: absolute; top: 0%; left: 0%; display: block; width: 100%; height: 100%; margin: 0px; padding: 0px; background: rgb(255, 255, 255); border: 0px; opacity: 0;"></ins></div>
                                                <label for="Yes">Yes</label>
                                            </div>
                                        </div>
                                    </fieldset>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="ExService" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <div class="col-12 col-md-12">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="DefenceServiceAndServiceNo" class="row hidden">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="col-12 col-md-12 required" for="DServices">Defence Services</label>
                                <div class="col-12 col-md-12">

                                    <select class="form-control select2-hidden-accessible" data-val="true" data-val-number="The field Defence Services must be a number." data-val-regex="Please select a valid type of service." data-val-regex-pattern="[0-9]{1,2}" data-val-requiredif="Please select type of service." data-val-requiredif-dependentproperty="ExService" data-val-requiredif-dependentvalue="Y" data-val-requiredif-operator="EqualTo" id="DefenceServices" name="DServices" data-select2-id="DefenceServices" tabindex="-1" aria-hidden="true">
                                        <option value="" data-select2-id="8">---Select Defence Service---</option>
                                        <option value="1">Indian Air Force</option>
                                        <option value="2">Indian Army</option>
                                        <option value="3">Indian Navy</option>
                                    </select><span class="select2 select2-container select2-container--default" dir="ltr" data-select2-id="7" style="width: auto;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-disabled="false" aria-labelledby="select2-DefenceServices-container"><span class="select2-selection__rendered" id="select2-DefenceServices-container" role="textbox" aria-readonly="true" title="---Select Defence Service---">---Select Defence Service---</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>
                                    <span class="field-validation-valid text-danger" data-valmsg-for="DServices" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="col-12 col-md-12 required" for="EsmNumber">Service Number</label>
                                <div class="col-12 col-md-12">
                                    <input autocomplete="off" class="form-control text-box single-line" data-val="true" data-val-regex="Please enter a valid service number." data-val-regex-pattern="[A-Za-z0-9\-]{4,12}" data-val-requiredif="Please enter service number." data-val-requiredif-dependentproperty="ExService" data-val-requiredif-dependentvalue="Y" data-val-requiredif-operator="EqualTo" data-val-servicenumber="Please provide valid Service Number" id="EsmNumber" maxlength="12" name="EsmNumber" type="text" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="EsmNumber" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <label class="col-12 col-md-12 required" for="Security_Code">Security Code</label>
                                <div class="col-12 col-md-12">
                                    <input autocomplete="off" class="form-control text-box single-line" data-val="true" data-val-required="Please enter valid security code." id="Captcha" maxlength="10" name="Captcha" required="required" title="Please enter security code." type="text" value="">
                                    <span class="field-validation-valid text-danger" data-valmsg-for="Captcha" data-valmsg-replace="true"></span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <div>&nbsp;</div>
                                <div class="col-12 col-md-12">
                                    <img alt="Captcha" id="CaptchaImage" src="/Captcha/GetCaptcha" width="150" height="30">
                                    <a id="RefreshCaptcha" class="btn btn-default btn-social-icon"><i class="fa fa-refresh" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="offset-md-6 col-12 col-md-6">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-social">
                                    <i class="fa fa-save"></i> Submit
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<?php
include 'footer.php';
?>
