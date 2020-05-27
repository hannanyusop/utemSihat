
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
                        <h1 class="text-white">Welcome!</h1>
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
        <div class="row justify-content-center">
            <div class="col-lg-5 col-md-7">
                <div class="card bg-secondary border-0 mb-0">
                    <div class="card-body px-lg-5 py-lg-5">
                        <div class="text-center text-muted mb-4">
                            <small>Sign In</small>
                        </div>
                        <form role="form" method="post" action="login-verify.php">
                            <div class="form-group mb-3">
                                <input class="form-control" id="email" name="email" placeholder="Email" type="email">
                            </div>
                            <div class="form-group">
                                <input class="form-control" id="password" name="password" placeholder="Password" type="password">
                            </div>
                            <div class="custom-control custom-control-alternative custom-checkbox">
                                <input class="custom-control-input" id=" customCheckLogin" type="checkbox">
                                <label class="custom-control-label" for=" customCheckLogin">
                                    <span class="text-muted">Remember me</span>
                                </label>
                            </div>
                            <div class="text-center">
                                <button onclick="check()" type="submit" class="btn btn-primary my-4">Sign in</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="row mt-3">
                    <div class="col-6">
                        <a href="#" class="text-light"><small>Forgot password?</small></a>
                    </div>
                    <div class="col-6 text-right">
                        <a href="register.php" class="text-light"><small>Create new account</small></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>

<?php include('include/footer.php'); ?>
<script type="text/javascript">
    var $form = $("form"),
        $successMsg = $(".alert");
    $form.validate({
        rules: {
            password: {
                required: true,
                minlength: 3,
            },
            email: {
                required: true,
                email: true
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