
<?php include ('include/header.php'); ?>

<body class="bg-default">
<!-- Main content -->
<div class="main-content">
    <!-- Header -->
    <div class="header bg-gradient-primary py-7 py-lg-8 pt-lg-9">
        <div class="container">
            <div class="header-body text-center mb-7">
                <div class="row justify-content-center">
                    <div class="col-xl-5 col-lg-6 col-md-8 px-5">
                        <h1 class="text-white">Create an account</h1>
                        <p class="text-lead text-white">Use these awesome forms to login or create new account in your project for free.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>
    <!-- Page content -->
    <div class="container mt--8 pb-5">
        <!-- Table -->
        <div class="row justify-content-center">
            <div class="col-lg-6 col-md-8">
                <div class="card bg-secondary border-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Sign up</small>
                        </div>
                        <form role="form" method="post" action="register-verify.php">
                            <div class="form-group">
                                <input class="form-control" name="name" placeholder="Name" type="text">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="email" placeholder="Email" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password" id="password" onKeyUp="checkPasswordStrength();" placeholder="Password" type="password">
                            </div>
                            <div class="form-group">
                                <input class="form-control" name="password_confirm" placeholder="Confirm Password" type="password">
                            </div>
                            <div class="text-muted font-italic"><small>Password strength: <b id="password-strength-status" class="font-weight-bold"></b></small></div>
                            <div class="row my-4">
                                <div class="col-12">
                                    <div class="custom-control custom-control-alternative custom-checkbox">
                                        <input class="custom-control-input" name="agree" id="agree" type="checkbox">
                                        <label class="custom-control-label" for="customCheckRegister">
                                            <span class="text-muted">I agree with the <a href="#!">Privacy Policy</a></span>
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="text-center">
                                <button type="submit" name="register" class="btn btn-primary mt-4">Create account</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="#" class="text-light"><small>Forgot password?</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="login.php" class="text-light"><small>Already Have Account? Login</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php include('include/footer.php'); ?>
<script type="text/javascript">
    function checkPasswordStrength() {
        var number = /([0-9])/;
        var alphabets = /([a-zA-Z])/;
        var special_characters = /([~,!,@,#,$,%,^,&,*,-,_,+,=,?,>,<])/;
        if($('#password').val().length<6) {
            $('#password-strength-status').removeClass();
            $('#password-strength-status').addClass('text-danger');
            $('#password-strength-status').html("Weak (should be atleast 6 characters.)");
        } else {
            if($('#password').val().match(number) && $('#password').val().match(alphabets) && $('#password').val().match(special_characters)) {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('text-success');
                $('#password-strength-status').html("Strong");
            } else {
                $('#password-strength-status').removeClass();
                $('#password-strength-status').addClass('text-indigo');
                $('#password-strength-status').html("Medium (should include alphabets, numbers and special characters.)");
            }
        }
    }

    var $form = $("form"),
        $successMsg = $(".alert");
    $.validator.addMethod("letters", function(value, element) {
        return this.optional(element) || value == value.match(/^[a-zA-Z\s]*$/);
    });
    $form.validate({
        rules: {
            name: {
                required: true,
                minlength: 3,
                letters: true
            },
            email: {
                required: true,
                email: true,
                // remote: {
                //     message: 'The email is not available',
                //     method: 'POST',
                //     url: 'check-email.php',
                // }
            },
            password : {
                required : true,
                minlength: 5,
            },
            password_confirm : {
                equalTo : '#password',
                required : true
            }
        },
        messages: {
            name: "Please specify your name (only letters and spaces are allowed)",
            email: "Please specify a valid email address"
        },
        submitHandler: function() {
            $successMsg.show();
        }
    });
</script>
</html>