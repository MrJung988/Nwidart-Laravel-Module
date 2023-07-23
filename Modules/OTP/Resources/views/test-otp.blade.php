@extends('common.common')

@section('title', 'OTP Test')

@section('card-body')

    <div class="container mt-5" style="max-width: 550px">
        <div class="alert alert-danger" id="error" style="display: none;"></div>
        <h3>Add Phone Number</h3>
        <div class="alert alert-success" id="successAuth" style="display: none;"></div>
        <form>
            <label>Phone Number:</label>
            <input type="tel" id="number" class="form-control" placeholder="+977 ********" value="+977">
            <br>
            <div id="recaptcha-container"></div>
            <button type="button" class="btn btn-primary mt-3" onclick="sendOTP();">Send OTP</button>
        </form>

        <div class="mb-5 mt-5">
            <h3>Add verification code</h3>
            <div class="alert alert-success" id="successOtpAuth" style="display: none;"></div>
            <form>
                <input type="text" id="verification" class="form-control" placeholder="Verification code">
                <button type="button" class="btn btn-danger mt-3" onclick="verify()">Verify code</button>
            </form>
        </div>
    </div>



@endsection


@push('js')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

    <script src="https://www.gstatic.com/firebasejs/6.0.2/firebase.js"></script>
    <script>
        const firebaseConfig = {
            apiKey: "AIzaSyDKoNINujmNaTBq7ZJcBDSek1riSFbjTuI",
            authDomain: "otp-test-b64e3.firebaseapp.com",
            projectId: "otp-test-b64e3",
            storageBucket: "otp-test-b64e3.appspot.c",
            messagingSenderId: "826182949128",
            appId: "1:826182949128:web:5b5677c7e99b5c62cdf4bd",
            measurementId: "G-7MMNMYV8LC"
        };
        firebase.initializeApp(firebaseConfig);
    </script>
    <script type="text/javascript">
        window.onload = function() {
            render();
        };

        function render() {
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }

        function sendOTP() {
            var number = $("#number").val();
            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;
                $("#successAuth").text("Message sent");
                $("#successAuth").show();
            }).catch(function(error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }

        function verify() {
            var code = $("#verification").val();
            coderesult.confirm(code).then(function(result) {
                var user = result.user;
                $("#successOtpAuth").text("Verification successful");
                $("#successOtpAuth").show();
            }).catch(function(error) {
                $("#error").text(error.message);
                $("#error").show();
            });
        }
    </script>
@endpush
