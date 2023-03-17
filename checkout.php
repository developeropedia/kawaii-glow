<?php

$active = "products";

include_once "includes/header.php";

if(!isset($_GET['id'])) {
    redirect("index.php");
}

$product = findById("products", $_GET['id']);

?>

    <main>




        <div class="container-fluid mt-3">
            <form action="" method="post" id="checkout-form" class="row">
                <div class="col-lg-8 mx-auto mb-3 ">

                    <div class="form-checkout">
                        <div class="d-flex align-items-center justify-content-center">
                            <h1 class="main-heading3">
                                Purchase
                            </h1>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label text-gray  ">Name </label>
                            <input required name="name" type="text" class="form-control sign-input" id="name">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label text-gray  ">Email</label>
                            <input required name="email" type="email" class="form-control sign-input" id="email">
                        </div>
                        <div class="mb-3">
                            <label for="address" class="form-label text-gray  ">Address</label>
                            <input required name="address" type="text" class="form-control sign-input" id="address" placeholder="Address">
                        </div>
                        <div class="d-flex">
                            <div class="mb-3 me-2">
                                <label for="zip" class="form-label text-gray  ">Postal Code</label>
                                <input required name="zip" type="text" class="form-control sign-input" id="zip">
                            </div>
                            <div class="mb-3 w-100">
                                <label for="city" class="form-label text-gray  ">City</label>
                                <input required name="city" type="text" class="form-control sign-input" id="city">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="country" class="form-label text-gray">Country</label>
                            <select id="country" name="country" class="form-select">
                                <option value="AF">Afghanistan</option>
                                <option value="AX">Aland Islands</option>
                                <option value="AL">Albania</option>
                                <option value="DZ">Algeria</option>
                                <option value="AS">American Samoa</option>
                                <option value="AD">Andorra</option>
                                <option value="AO">Angola</option>
                                <option value="AI">Anguilla</option>
                                <option value="AQ">Antarctica</option>
                                <option value="AG">Antigua and Barbuda</option>
                                <option value="AR">Argentina</option>
                                <option value="AM">Armenia</option>
                                <option value="AW">Aruba</option>
                                <option value="AU">Australia</option>
                                <option value="AT">Austria</option>
                                <option value="AZ">Azerbaijan</option>
                                <option value="BS">Bahamas</option>
                                <option value="BH">Bahrain</option>
                                <option value="BD">Bangladesh</option>
                                <option value="BB">Barbados</option>
                                <option value="BY">Belarus</option>
                                <option value="BE">Belgium</option>
                                <option value="BZ">Belize</option>
                                <option value="BJ">Benin</option>
                                <option value="BM">Bermuda</option>
                                <option value="BT">Bhutan</option>
                                <option value="BO">Bolivia</option>
                                <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                <option value="BA">Bosnia and Herzegovina</option>
                                <option value="BW">Botswana</option>
                                <option value="BV">Bouvet Island</option>
                                <option value="BR">Brazil</option>
                                <option value="IO">British Indian Ocean Territory</option>
                                <option value="BN">Brunei Darussalam</option>
                                <option value="BG">Bulgaria</option>
                                <option value="BF">Burkina Faso</option>
                                <option value="BI">Burundi</option>
                                <option value="KH">Cambodia</option>
                                <option value="CM">Cameroon</option>
                                <option value="CA">Canada</option>
                                <option value="CV">Cape Verde</option>
                                <option value="KY">Cayman Islands</option>
                                <option value="CF">Central African Republic</option>
                                <option value="TD">Chad</option>
                                <option value="CL">Chile</option>
                                <option value="CN">China</option>
                                <option value="CX">Christmas Island</option>
                                <option value="CC">Cocos (Keeling) Islands</option>
                                <option value="CO">Colombia</option>
                                <option value="KM">Comoros</option>
                                <option value="CG">Congo</option>
                                <option value="CD">Congo, Democratic Republic of the Congo</option>
                                <option value="CK">Cook Islands</option>
                                <option value="CR">Costa Rica</option>
                                <option value="CI">Cote D'Ivoire</option>
                                <option value="HR">Croatia</option>
                                <option value="CU">Cuba</option>
                                <option value="CW">Curacao</option>
                                <option value="CY">Cyprus</option>
                                <option value="CZ">Czech Republic</option>
                                <option value="DK">Denmark</option>
                                <option value="DJ">Djibouti</option>
                                <option value="DM">Dominica</option>
                                <option value="DO">Dominican Republic</option>
                                <option value="EC">Ecuador</option>
                                <option value="EG">Egypt</option>
                                <option value="SV">El Salvador</option>
                                <option value="GQ">Equatorial Guinea</option>
                                <option value="ER">Eritrea</option>
                                <option value="EE">Estonia</option>
                                <option value="ET">Ethiopia</option>
                                <option value="FK">Falkland Islands (Malvinas)</option>
                                <option value="FO">Faroe Islands</option>
                                <option value="FJ">Fiji</option>
                                <option value="FI">Finland</option>
                                <option value="FR">France</option>
                                <option value="GF">French Guiana</option>
                                <option value="PF">French Polynesia</option>
                                <option value="TF">French Southern Territories</option>
                                <option value="GA">Gabon</option>
                                <option value="GM">Gambia</option>
                                <option value="GE">Georgia</option>
                                <option value="DE">Germany</option>
                                <option value="GH">Ghana</option>
                                <option value="GI">Gibraltar</option>
                                <option value="GR">Greece</option>
                                <option value="GL">Greenland</option>
                                <option value="GD">Grenada</option>
                                <option value="GP">Guadeloupe</option>
                                <option value="GU">Guam</option>
                                <option value="GT">Guatemala</option>
                                <option value="GG">Guernsey</option>
                                <option value="GN">Guinea</option>
                                <option value="GW">Guinea-Bissau</option>
                                <option value="GY">Guyana</option>
                                <option value="HT">Haiti</option>
                                <option value="HM">Heard Island and Mcdonald Islands</option>
                                <option value="VA">Holy See (Vatican City State)</option>
                                <option value="HN">Honduras</option>
                                <option value="HK">Hong Kong</option>
                                <option value="HU">Hungary</option>
                                <option value="IS">Iceland</option>
                                <option value="IN">India</option>
                                <option value="ID">Indonesia</option>
                                <option value="IR">Iran, Islamic Republic of</option>
                                <option value="IQ">Iraq</option>
                                <option value="IE">Ireland</option>
                                <option value="IM">Isle of Man</option>
                                <option value="IL">Israel</option>
                                <option value="IT">Italy</option>
                                <option value="JM">Jamaica</option>
                                <option value="JP">Japan</option>
                                <option value="JE">Jersey</option>
                                <option value="JO">Jordan</option>
                                <option value="KZ">Kazakhstan</option>
                                <option value="KE">Kenya</option>
                                <option value="KI">Kiribati</option>
                                <option value="KP">Korea, Democratic People's Republic of</option>
                                <option value="KR">Korea, Republic of</option>
                                <option value="XK">Kosovo</option>
                                <option value="KW">Kuwait</option>
                                <option value="KG">Kyrgyzstan</option>
                                <option value="LA">Lao People's Democratic Republic</option>
                                <option value="LV">Latvia</option>
                                <option value="LB">Lebanon</option>
                                <option value="LS">Lesotho</option>
                                <option value="LR">Liberia</option>
                                <option value="LY">Libyan Arab Jamahiriya</option>
                                <option value="LI">Liechtenstein</option>
                                <option value="LT">Lithuania</option>
                                <option value="LU">Luxembourg</option>
                                <option value="MO">Macao</option>
                                <option value="MK">Macedonia, the Former Yugoslav Republic of</option>
                                <option value="MG">Madagascar</option>
                                <option value="MW">Malawi</option>
                                <option value="MY">Malaysia</option>
                                <option value="MV">Maldives</option>
                                <option value="ML">Mali</option>
                                <option value="MT">Malta</option>
                                <option value="MH">Marshall Islands</option>
                                <option value="MQ">Martinique</option>
                                <option value="MR">Mauritania</option>
                                <option value="MU">Mauritius</option>
                                <option value="YT">Mayotte</option>
                                <option value="MX">Mexico</option>
                                <option value="FM">Micronesia, Federated States of</option>
                                <option value="MD">Moldova, Republic of</option>
                                <option value="MC">Monaco</option>
                                <option value="MN">Mongolia</option>
                                <option value="ME">Montenegro</option>
                                <option value="MS">Montserrat</option>
                                <option value="MA">Morocco</option>
                                <option value="MZ">Mozambique</option>
                                <option value="MM">Myanmar</option>
                                <option value="NA">Namibia</option>
                                <option value="NR">Nauru</option>
                                <option value="NP">Nepal</option>
                                <option value="NL">Netherlands</option>
                                <option value="AN">Netherlands Antilles</option>
                                <option value="NC">New Caledonia</option>
                                <option value="NZ">New Zealand</option>
                                <option value="NI">Nicaragua</option>
                                <option value="NE">Niger</option>
                                <option value="NG">Nigeria</option>
                                <option value="NU">Niue</option>
                                <option value="NF">Norfolk Island</option>
                                <option value="MP">Northern Mariana Islands</option>
                                <option value="NO">Norway</option>
                                <option value="OM">Oman</option>
                                <option value="PK">Pakistan</option>
                                <option value="PW">Palau</option>
                                <option value="PS">Palestinian Territory, Occupied</option>
                                <option value="PA">Panama</option>
                                <option value="PG">Papua New Guinea</option>
                                <option value="PY">Paraguay</option>
                                <option value="PE">Peru</option>
                                <option value="PH">Philippines</option>
                                <option value="PN">Pitcairn</option>
                                <option value="PL">Poland</option>
                                <option value="PT">Portugal</option>
                                <option value="PR">Puerto Rico</option>
                                <option value="QA">Qatar</option>
                                <option value="RE">Reunion</option>
                                <option value="RO">Romania</option>
                                <option value="RU">Russian Federation</option>
                                <option value="RW">Rwanda</option>
                                <option value="BL">Saint Barthelemy</option>
                                <option value="SH">Saint Helena</option>
                                <option value="KN">Saint Kitts and Nevis</option>
                                <option value="LC">Saint Lucia</option>
                                <option value="MF">Saint Martin</option>
                                <option value="PM">Saint Pierre and Miquelon</option>
                                <option value="VC">Saint Vincent and the Grenadines</option>
                                <option value="WS">Samoa</option>
                                <option value="SM">San Marino</option>
                                <option value="ST">Sao Tome and Principe</option>
                                <option value="SA">Saudi Arabia</option>
                                <option value="SN">Senegal</option>
                                <option value="RS">Serbia</option>
                                <option value="CS">Serbia and Montenegro</option>
                                <option value="SC">Seychelles</option>
                                <option value="SL">Sierra Leone</option>
                                <option value="SG">Singapore</option>
                                <option value="SX">Sint Maarten</option>
                                <option value="SK">Slovakia</option>
                                <option value="SI">Slovenia</option>
                                <option value="SB">Solomon Islands</option>
                                <option value="SO">Somalia</option>
                                <option value="ZA">South Africa</option>
                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                <option value="SS">South Sudan</option>
                                <option value="ES">Spain</option>
                                <option value="LK">Sri Lanka</option>
                                <option value="SD">Sudan</option>
                                <option value="SR">Suriname</option>
                                <option value="SJ">Svalbard and Jan Mayen</option>
                                <option value="SZ">Swaziland</option>
                                <option value="SE">Sweden</option>
                                <option value="CH">Switzerland</option>
                                <option value="SY">Syrian Arab Republic</option>
                                <option value="TW">Taiwan, Province of China</option>
                                <option value="TJ">Tajikistan</option>
                                <option value="TZ">Tanzania, United Republic of</option>
                                <option value="TH">Thailand</option>
                                <option value="TL">Timor-Leste</option>
                                <option value="TG">Togo</option>
                                <option value="TK">Tokelau</option>
                                <option value="TO">Tonga</option>
                                <option value="TT">Trinidad and Tobago</option>
                                <option value="TN">Tunisia</option>
                                <option value="TR">Turkey</option>
                                <option value="TM">Turkmenistan</option>
                                <option value="TC">Turks and Caicos Islands</option>
                                <option value="TV">Tuvalu</option>
                                <option value="UG">Uganda</option>
                                <option value="UA">Ukraine</option>
                                <option value="AE">United Arab Emirates</option>
                                <option value="GB">United Kingdom</option>
                                <option value="US">United States</option>
                                <option value="UM">United States Minor Outlying Islands</option>
                                <option value="UY">Uruguay</option>
                                <option value="UZ">Uzbekistan</option>
                                <option value="VU">Vanuatu</option>
                                <option value="VE">Venezuela</option>
                                <option value="VN">Viet Nam</option>
                                <option value="VG">Virgin Islands, British</option>
                                <option value="VI">Virgin Islands, U.s.</option>
                                <option value="WF">Wallis and Futuna</option>
                                <option value="EH">Western Sahara</option>
                                <option value="YE">Yemen</option>
                                <option value="ZM">Zambia</option>
                                <option value="ZW">Zimbabwe</option>
                            </select>
                        </div>

                    </div>

                </div>
                <div class="col-lg-4  mb-3 ms-auto">
                    <div class="row">
                        <div class="form-checkout mb-4">
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                <h1 class="main-heading3">
                                    Payment Details
                                </h1>
                            </div>
                            <div class="data-row">
                                <div style="background-color: white; padding: 10px; border: 1px solid #ced4da; border-radius: 5px" id="card-element"></div>
                            </div>
                            <p id="stripe-error" class="text-danger text-center my-2" style="display: none"></p>
                        </div>
                        <div class="form-checkout">
                            <div class="d-flex align-items-center justify-content-center mb-4">
                                <h1 class="main-heading3">
                                    Summary
                                </h1>
                            </div>
                            <div class="data-row">
                                <div class="d-flex align-items-center justify-content-between">

                                    <p class="summary-text ms-2 text-gray">
                                        SubTotal
                                    </p>
                                    <p class="summary-text ms-2 text-gray">
                                        $<?php echo $product->price ?>
                                    </p>
                                </div>
                            </div>
                            <hr class="border">
                            <div class="data-row">
                                <div class="d-flex align-items-center justify-content-between">

                                    <p class="summary-text ms-2 mb-0 pb-0 text-gray">
                                        Total
                                    </p>
                                    <p class="summary-text ms-2  mb-0 pb-0 text-gray">
                                        $<?php echo $product->price ?>
                                    </p>
                                </div>

                            </div>

                            <input type="hidden" name="price" value="<?php echo $product->price ?>">
                            <button class="video-btn-sm mt-4 w-100" type="submit" >Checkout</button>
                        </div>
                    </div>

                </div>
            </form>


        </div>

        <div class="live-chat-btn">
            <img src="assets/images/live-chat.jpg" alt="" class="img-fluid">
        </div>
        <div class="live-chat live-chat2">

            <div class="chat-blink chat-blink2">
                <div class="container-chat">
                    <div class="chatbox">
                        <div class="top-bar">
                            <div class="d-flex align-items-center">
                                <div class="avatar">
                                    <p class="mb-0 pb-0">V</p>
                                </div>
                                <div class="name text-white">Voldemort</div>
                            </div>
                            <div class="icons">
                                <i class="bi bi-x-circle text-white close-chat close-chat2"></i>
                            </div>
                        </div>
                        <div class="middle">

                            <div class="voldemort">
                                <div class="incoming">
                                    <div class="bubble">Hi</div>
                                    <div class="bubble">Hey, Father's Day is coming up..j</div>
                                </div>
                                <div class="outgoing ms-auto">
                                    <div class="bubble ">Hello.</div>
                                </div>
                                <div class="incoming">

                                    <div class="bubble">What are you getting.. Oh, oops sorry dude.</div>
                                </div>
                                <div class="outgoing ms-auto">
                                    <div class="bubble ">Nah, it's cool.</div>
                                    <div class="bubble">Well you should get your Dad a cologne. Here smell it. Oh wait!
                                        ...</div>
                                </div>
                                <div class="typing">
                                    <div class="bubble">
                                        <div class="ellipsis one"></div>
                                        <div class="ellipsis two"></div>
                                        <div class="ellipsis three"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="bottom-bar">
                            <div class="chat">
                                <input type="text" class="input" placeholder="Type a message..." />
                                <button type="submit" class="button"><i class="bi bi-send"></i></button>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
            <!-- <div class="click-blink">
        click to Chat Live
    </div> -->
            <img src="assets/images/footer-teddy.png" alt="" class="chat-icon2" width="100">
        </div>
        <div class="modal fade" id="thankYou" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content thank-you-content">
                    <div class="modal-header pb-0">
                        <h1 class="main-heading3 text-center w-100 pb-0">
                            Thank You For Your Purchase!
                        </h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="">
                            <p class="text-gray summary-text text-center">We want to send you a GIFT!</p>
                            <p class="text-gray summary-text text-center">LETS TEXT</p>

                            <div class="d-flex justify-content-center align-items-center flex-wrap">
                                <div>
                                    <img src="assets/images/thankyou.png" alt="" class="img-fluid thankyou-img">
                                </div>
                                <div>
                                    <input type="text" class="form-control thankyou-input w-100" placeholder="Type...">
                                </div>

                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </main>

<?php

include_once "includes/footer.php";

?>

<script src="https://js.stripe.com/v3/"></script>
<script>
    // Create a Stripe client
    var stripe = Stripe("<?php echo PUBLISHABLE_KEY; ?>");

    // Create an instance of Elements
    var elements = stripe.elements();

    // Custom styling can be passed to options when creating an Element.
    var style = {
        base: {
            // Add your base input styles here. For example:
            fontSize: '16px',
            color: '#000000',

        }
    };

    var displayError = document.getElementById('stripe-error');

    // Create an instance of the card Element
    var card = elements.create('card', {hidePostalCode: true, style: style});

    // Add an instance of the card Element into the `card-element` <div>
    card.mount('#card-element');

    // Handle real-time validation errors from the card Element.
    card.addEventListener('change', function(event) {
        if (event.error) {
            displayError.textContent = event.error.message;
            displayError.style.display = 'block';
        } else {
            displayError.style.display = 'none';
        }
    });

    // Handle form submission
    var form = document.getElementById('checkout-form');
    form.addEventListener('submit', function(event) {
        event.preventDefault();

        stripe.createToken(card).then(function(result) {
            if (result.error) {
                // Inform the user if there was an error
                var errorElement = document.getElementById('stripe-error');
                errorElement.textContent = result.error.message;
                errorElement.style.display = 'block';
            } else {
                // Send the token to your server
                stripeTokenHandler(result.token);
            }
        });
    });

    function stripeTokenHandler(token) {
        // Insert the token ID into the form so it gets submitted to the server
        var form = document.getElementById('checkout-form');
        var hiddenInput = document.createElement('input');
        hiddenInput.setAttribute('type', 'hidden');
        hiddenInput.setAttribute('name', 'stripeToken');
        hiddenInput.setAttribute('value', token.id);
        form.appendChild(hiddenInput);

        // Submit the form
        // form.submit();

        $.ajax({
            url: "includes/payment.php",
            method: "post",
            data: $('form').serialize(),
            success: function (response) {
                if(response == "success") {
                    $('#thankYou').modal('show')

                    var errorElement = document.getElementById('stripe-error');
                    errorElement.style.display = 'none';
                } else {
                    var errorElement = document.getElementById('stripe-error');
                    errorElement.textContent = response;
                    errorElement.style.display = 'block';
                }
            }
        })
    }
</script>
