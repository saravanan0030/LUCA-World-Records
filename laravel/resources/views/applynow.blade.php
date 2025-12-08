 @include('inc/header')


<head>
    <meta name="csrf-token" content="{{ csrf_token() }}">

</head>

<div class="container py-4">
    <h2 class="text-center mb-4" style="color:#F4C04A">Luca World Records Submission Form</h2>

    <form id="lucaForm" action="{{ route('send.form.email') }}" method="POST">
    @csrf

        <div class="form-section active-form mb-3">
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
                        @foreach(["India","USA","UK","Canada"] as $country)
                            <option value="{{ $country }}">{{ $country }}</option>
                        @endforeach
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
              <button type="submit" class="submit-btn">SUBMIT</button>

            </div>
        </div>
    </form>
</div>

<div id="formSuccess" class="alert alert-success text-center" style="display:none; position:fixed; top:20px; left:50%; transform:translateX(-50%); z-index:9999;">
    Form submitted successfully!
</div>

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<style>
.form-section { display:none; background:#fff; padding:25px; border-radius:10px; box-shadow:0 0 10px rgba(0,0,0,0.1); }
.active-form { display:block !important; }
.submit-btn { background:#1D3F60; color:#fff; padding:10px 40px; border-radius:25px; border:none; cursor:pointer; }
</style>

<script>
$(document).ready(function(){

    // Set CSRF token for AJAX
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#lucaForm').on('submit', function(e){
        e.preventDefault();

        $.ajax({
            url: "{{ route('send.form.email') }}",
            type: "POST",
            data: $(this).serialize(),
            success: function(response){
                $('#formSuccess').fadeIn().delay(3000).fadeOut();
                $('#lucaForm')[0].reset();
            },
            error: function(xhr){
                if(xhr.status === 419){
                    alert('Session expired. Please refresh the page and try again.');
                } else if(xhr.responseJSON && xhr.responseJSON.errors){
                    let msg = '';
                    $.each(xhr.responseJSON.errors, function(key, value){
                        msg += value + "\n";
                    });
                    alert(msg);
                } else {
                    alert('Something went wrong!');
                }
            }
        });
    });

});




</script>

@include('inc/footer')
