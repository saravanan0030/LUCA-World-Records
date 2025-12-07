 @include('inc/header')





<div class="container py-4">

    <h2 class="text-center mb-4 mx-3" style="color:#F4C04A">
        Luca World Records Submission Form
    </h2>

    <form id="individualForm" action="{{ route('send.form.email') }}" method="POST">
        @csrf

        <div class="form-section active-form mb-3 mx-3">
            <h3>Individual Details</h3>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Name</label>
                    <input type="text" name="name" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label>Date Of Birth</label>
                    <input type="date" name="dob" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>Mobile Number</label>
                    <input type="text" name="mobile" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label>Email</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>

            <h3 class="mt-4">Record Details</h3>

            <div class="row mt-3">
                <div class="col-md-6">

                    <label>Country</label>
                    <select name="country" class="form-control" required>
                        <option value="">Select Country</option>

                        <!-- Full Country List -->
                        <option value="Afghanistan">Afghanistan</option>
                        <option value="Albania">Albania</option>
                        <option value="Algeria">Algeria</option>
                        <option value="Andorra">Andorra</option>
                        <option value="Angola">Angola</option>
                        <option value="Argentina">Argentina</option>
                        <option value="Armenia">Armenia</option>
                        <option value="Australia">Australia</option>
                        <option value="Austria">Austria</option>
                        <option value="Azerbaijan">Azerbaijan</option>
                        <option value="Bahamas">Bahamas</option>
                        <option value="Bahrain">Bahrain</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Belgium">Belgium</option>
                        <option value="Bhutan">Bhutan</option>
                        <option value="Bolivia">Bolivia</option>
                        <option value="Bosnia">Bosnia</option>
                        <option value="Botswana">Botswana</option>
                        <option value="Brazil">Brazil</option>
                        <option value="Brunei">Brunei</option>
                        <option value="Bulgaria">Bulgaria</option>
                        <option value="Cambodia">Cambodia</option>
                        <option value="Cameroon">Cameroon</option>
                        <option value="Canada">Canada</option>
                        <option value="Chile">Chile</option>
                        <option value="China">China</option>
                        <option value="Colombia">Colombia</option>
                        <option value="Costa Rica">Costa Rica</option>
                        <option value="Croatia">Croatia</option>
                        <option value="Cuba">Cuba</option>
                        <option value="Cyprus">Cyprus</option>
                        <option value="Czech Republic">Czech Republic</option>
                        <option value="Denmark">Denmark</option>
                        <option value="Dominican Republic">Dominican Republic</option>
                        <option value="Ecuador">Ecuador</option>
                        <option value="Egypt">Egypt</option>
                        <option value="Estonia">Estonia</option>
                        <option value="Ethiopia">Ethiopia</option>
                        <option value="Finland">Finland</option>
                        <option value="France">France</option>
                        <option value="Germany">Germany</option>
                        <option value="Ghana">Ghana</option>
                        <option value="Greece">Greece</option>
                        <option value="Hong Kong">Hong Kong</option>
                        <option value="Hungary">Hungary</option>
                        <option value="Iceland">Iceland</option>
                        <option value="India">India</option>
                        <option value="Indonesia">Indonesia</option>
                        <option value="Iran">Iran</option>
                        <option value="Iraq">Iraq</option>
                        <option value="Ireland">Ireland</option>
                        <option value="Israel">Israel</option>
                        <option value="Italy">Italy</option>
                        <option value="Japan">Japan</option>
                        <option value="Jordan">Jordan</option>
                        <option value="Kenya">Kenya</option>
                        <option value="Kuwait">Kuwait</option>
                        <option value="Laos">Laos</option>
                        <option value="Latvia">Latvia</option>
                        <option value="Lebanon">Lebanon</option>
                        <option value="Liberia">Liberia</option>
                        <option value="Libya">Libya</option>
                        <option value="Lithuania">Lithuania</option>
                        <option value="Luxembourg">Luxembourg</option>
                        <option value="Madagascar">Madagascar</option>
                        <option value="Malaysia">Malaysia</option>
                        <option value="Maldives">Maldives</option>
                        <option value="Mali">Mali</option>
                        <option value="Mexico">Mexico</option>
                        <option value="Moldova">Moldova</option>
                        <option value="Monaco">Monaco</option>
                        <option value="Mongolia">Mongolia</option>
                        <option value="Morocco">Morocco</option>
                        <option value="Myanmar">Myanmar</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Netherlands">Netherlands</option>
                        <option value="New Zealand">New Zealand</option>
                        <option value="Nigeria">Nigeria</option>
                        <option value="North Korea">North Korea</option>
                        <option value="Norway">Norway</option>
                        <option value="Oman">Oman</option>
                        <option value="Pakistan">Pakistan</option>
                        <option value="Panama">Panama</option>
                        <option value="Paraguay">Paraguay</option>
                        <option value="Peru">Peru</option>
                        <option value="Philippines">Philippines</option>
                        <option value="Poland">Poland</option>
                        <option value="Portugal">Portugal</option>
                        <option value="Qatar">Qatar</option>
                        <option value="Romania">Romania</option>
                        <option value="Russia">Russia</option>
                        <option value="Saudi Arabia">Saudi Arabia</option>
                        <option value="Serbia">Serbia</option>
                        <option value="Singapore">Singapore</option>
                        <option value="Slovakia">Slovakia</option>
                        <option value="Slovenia">Slovenia</option>
                        <option value="South Africa">South Africa</option>
                        <option value="South Korea">South Korea</option>
                        <option value="Spain">Spain</option>
                        <option value="Sri Lanka">Sri Lanka</option>
                        <option value="Sudan">Sudan</option>
                        <option value="Sweden">Sweden</option>
                        <option value="Switzerland">Switzerland</option>
                        <option value="Syria">Syria</option>
                        <option value="Taiwan">Taiwan</option>
                        <option value="Tajikistan">Tajikistan</option>
                        <option value="Tanzania">Tanzania</option>
                        <option value="Thailand">Thailand</option>
                        <option value="Turkey">Turkey</option>
                        <option value="Turkmenistan">Turkmenistan</option>
                        <option value="Uganda">Uganda</option>
                        <option value="Ukraine">Ukraine</option>
                        <option value="United Arab Emirates">United Arab Emirates</option>
                        <option value="United Kingdom">United Kingdom</option>
                        <option value="United States">United States</option>
                        <option value="Uruguay">Uruguay</option>
                        <option value="Uzbekistan">Uzbekistan</option>
                        <option value="Venezuela">Venezuela</option>
                        <option value="Vietnam">Vietnam</option>
                        <option value="Yemen">Yemen</option>
                        <option value="Zambia">Zambia</option>
                        <option value="Zimbabwe">Zimbabwe</option>

                    </select>
                </div>

                <div class="col-md-6">
                    <label>State</label>
                    <input type="text" name="state" class="form-control" required>
                </div>
            </div>

            <div class="row mt-3">
                <div class="col-md-6">
                    <label>City</label>
                    <input type="text" name="city" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label>Zip Code</label>
                    <input type="text" name="zip" class="form-control" required>
                </div>
            </div>

            <div class="mt-3">
                <label>Description (in detail)</label>
                <textarea name="description" class="form-control" rows="4" required></textarea>
            </div>

            <div class="text-center mt-4">
                <button class="submit-btn" type="submit">SUBMIT</button>
            </div>
        </div>

    </form>

</div>


 <div id="formSuccess" class="alert alert-success text-center"
     style="display:none; position:fixed; top:20px; left:50%; transform:translateX(-50%); z-index:9999;">
    Form submitted successfully!
</div>
 <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

 <script>
// ✅ Show popup if Laravel session has success message
@if(session('success'))
$(function() {
    $("#formSuccess").fadeIn();
    setTimeout(() => $("#formSuccess").fadeOut(), 2000); // 2 seconds
});
@endif

// ✅ AJAX Submit – No Page Reload
$("#individualForm").submit(function(e) {
    e.preventDefault();

    $.ajax({
        url: $(this).attr("action"),
        method: "POST",
        data: $(this).serialize(),
        success: function() {

            // Show success popup
            $("#formSuccess").fadeIn();

            // Hide popup after 2 seconds
            setTimeout(() => $("#formSuccess").fadeOut(), 2000);

            // Clear form inputs
            $("#individualForm")[0].reset();
        },
        error: function() {
            alert("Something went wrong!");
        }
    });
});
</script>


    <style>
        .form-section {
            display: none;
            animation: fadeIn 0.6s ease-in-out;
            background: #fff;
            padding: 25px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .active-form { display: block !important; }

        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(10px); }
            to   { opacity: 1; transform: translateY(0); }
        }

        h3 { color: #1D3F60; font-weight: 600; }
        label { font-weight: 500; color: #333; }

        .submit-btn {
            background: #1D3F60;
            color: #fff;
            padding: 10px 40px;
            border-radius: 25px;
            border: none;
        }

        header .btn,
        .navbar .btn {
            background-color: #F4C04A !important;
            color: #000 !important;
            border: none !important;
        }

        .form-success {
            display: none;
            position: fixed;
            top: 20px;
            left: 50%;
            transform: translateX(-50%);
            background-color: #d4edda;
            color: #155724;
            padding: 15px 30px;
            border-radius: 8px;
            box-shadow: 0 4px 10px rgba(0,0,0,0.1);
            z-index: 9999;
            opacity: 0;
            transition: 0.5s;
        }
        .form-success.show { display:block; opacity:1; }
    </style>

@include('inc/footer')

