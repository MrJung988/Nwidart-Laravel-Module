@extends('common.common')

@section('card-header', 'OTP Send')

@section('card-body')
    <div class="container w-50">
        <div class="card">
            <div class="card-header">
                <h5 class="text-center">Enter your mobile to receive OTP</h5>
            </div>
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <label for="">Mobile Number:</label>
                        <input type="text" name="mobile" id="mobile" class="form-control"
                            placeholder="+977 9816641520">
                    </div>
                    <div class="form-group mt-4">
                        <label for="">Recaptcha:</label>
                        <div id="recaptcha-container"></div>
                    </div>
                    <div class="mt-5">
                        <button type="button" class="btn btn-dark w-100" onclick="sendCode()">Send Code</button>
                    </div>
                </form>
                <div id="error" style="color: red; display:none;"></div>
                <div id="sentMessage" style="color:green; display:none;"></div>
            </div>
        </div>
    </div>
@endsection

@push('js')
{{-- Firebase Cdn --}}
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-app.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.8/firebase-auth.js"></script>


<script>
        var firebaseConfig = {
            apiKey: "AIzaSyDKoNINujmNaTBq7ZJcBDSek1riSFbjTuI",
            authDomain: "otp-test-b64e3.firebaseapp.com",
            databaseURL: "https://otp-test-b64e3-default-rtdb.asia-southeast1.firebasedatabase.app",
            projectId: "otp-test-b64e3",
            storageBucket: "otp-test-b64e3.appspot.com",
            messagingSenderId: "826182949128",
            appId: "1:826182949128:web:5b5677c7e99b5c62cdf4bd",
            measurementId: "G-7MMNMYV8LC"
        };

        // Initialize Firebase
        const app = initializeApp(firebaseConfig);
    </script>

    <script type="text/javascript">
        window.onload = function() {
            render();
        }

        function render() {
            window.recaptchaVerifier = new firebase.auth.RecaptchaVerifier('recaptcha-container');
            recaptchaVerifier.render();
        }

        function sendCode() {
            var number = $('#mobile').val();

            firebase.auth().signInWithPhoneNumber(number, window.recaptchaVerifier).then(function(confirmationResult) {
                window.confirmationResult = confirmationResult;
                coderesult = confirmationResult;

                $(#sentMessage).text('Message sent successfully !');
                $(#sentMessage).show

            }).catch(function(error){
                $(#error).text(error.message);
                $(#error).show();
            });
        }
    </script>
@endpush
