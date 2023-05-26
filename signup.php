<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/variable.css">
<link rel="stylesheet" href="css/auth-main.css">

<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->



<section class="rocky-mountain auth">
    <div class="container-fluid">
        <div class="col-lg-6 mx-auto p-0">
            <div class="img-logo-main">
                <a href=""><img src="img/app-logo.webp" class="img-fluid" alt=""></a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto col-md-6 justify-content-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="auth-form">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h3 class="membership-contectus-heading">Sign Up</h3>
                                </div>
                            </div>
                            <form action="">
                                <div class="form-contect-wrapper">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-outline  man">
                                                <input type="text" id="form1Example1" placeholder="Full Name" class="form-control">
                                                <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-outline email">
                                                <input type="email" id="form1Example1" placeholder="Email" class="form-control">
                                                <!-- <i class="fa fa-envelope" aria-hidden="true"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row ">
                                        <div class="col-xxl-12 col-lg-12">
                                            <div class="form-outline phone ">
                                                <input type="number" id="form1Example1" placeholder="Contact Number" class="form-control">
                                                <!-- <i class="fa fa-phone" aria-hidden="true"></i> -->
                                                <!-- <img src="img/phone-icon.webp" class="img-fluid" alt=""> -->
                                            </div>
                                        </div>
                                        <div class="col-xxl-12 col-lg-12">
                                            <div class="form-outline paddingzero ">
                                                <input type="text" id="form1Example1" placeholder="Company Name" class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group" id="show_hide_passwordten">
                                                    <input class="form-control" type="password" placeholder="Password">
                                                    <div class="input-group-addon">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group" id="show_hide_passwordone">
                                                    <input class="form-control" type="password" placeholder="Re-Enter Password">
                                                    <div class="input-group-addon">
                                                        <a href=""><i class="fa fa-eye-slash" aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12 text-center ">
                                            <div class="banner">
                                                <a href="login.php" class="butn butn__new mb-4"><span>Get Sign Up
                                                        <i class="fa fa-long-arrow-right" aria-hidden="true"></i></span></a>
                                                <p class="sign-in-wrapper">Already have an account? <span> <a href="login.php"> ( Sign In ) </a> </span></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->

<script>
    $(document).ready(function() {
        $("#show_hide_passwordten a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_passwordten input').attr("type") == "text") {
                $('#show_hide_passwordten input').attr('type', 'password');
                $('#show_hide_passwordten i').addClass("fa-eye-slash");
                $('#show_hide_passwordten i').removeClass("fa-eye");
            } else if ($('#show_hide_passwordten input').attr("type") == "password") {
                $('#show_hide_passwordten input').attr('type', 'text');
                $('#show_hide_passwordten i').removeClass("fa-eye-slash");
                $('#show_hide_passwordten i').addClass("fa-eye");
            }
        });
    });
    $(document).ready(function() {
        $("#show_hide_passwordone a").on('click', function(event) {
            event.preventDefault();
            if ($('#show_hide_passwordone input').attr("type") == "text") {
                $('#show_hide_passwordone input').attr('type', 'password');
                $('#show_hide_passwordone i').addClass("fa-eye-slash");
                $('#show_hide_passwordone i').removeClass("fa-eye");
            } else if ($('#show_hide_passwordone input').attr("type") == "password") {
                $('#show_hide_passwordone input').attr('type', 'text');
                $('#show_hide_passwordone i').removeClass("fa-eye-slash");
                $('#show_hide_passwordone i').addClass("fa-eye");
            }
        });
    });
</script>