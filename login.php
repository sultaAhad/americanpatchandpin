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
                <a href=""><img src="img/app-logo.png" class="img-fluid" alt=""></a>
            </div>
        </div>
        <div class="row align-items-center">
            <div class="col-lg-6 mx-auto col-md-6 justify-content-center">
                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <div class="auth-form">
                            <div class="row">
                                <div class="col-lg-12 text-center">
                                    <h3 class="membership-contectus-heading">Sign In</h3>
                                </div>
                            </div>
                            <form action="">
                                <div class="form-contect-wrapper">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-outline  man">
                                                <input type="email" id="form1Example1" placeholder="Email"
                                                    class="form-control">
                                                <!-- <i class="fa fa-user" aria-hidden="true"></i> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <div class="input-group" id="show_hide_passwordtwo">
                                                    <input class="form-control" type="password" placeholder="Password">
                                                    <div class="input-group-addon">
                                                        <a href=""><i class="fa fa-eye-slash"
                                                                aria-hidden="true"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row mt-4">
                                        <div class="col-lg-12 text-center ">
                                            <div class="banner">
                                                <a href="home.php" class="butn butn__new mb-4"><span>Sign In
                                                        <i class="fa fa-long-arrow-right"
                                                            aria-hidden="true"></i></span></a>
                                                <p class="sign-in-wrapper">Dont Have An Account? <span> <a
                                                            href="signup.php"> ( Sign Up ) </a> </span></p>
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
    $("#show_hide_passwordtwo a").on('click', function(event) {
        event.preventDefault();
        if ($('#show_hide_passwordtwo input').attr("type") == "text") {
            $('#show_hide_passwordtwo input').attr('type', 'password');
            $('#show_hide_passwordtwo i').addClass("fa-eye-slash");
            $('#show_hide_passwordtwo i').removeClass("fa-eye");
        } else if ($('#show_hide_passwordtwo input').attr("type") == "password") {
            $('#show_hide_passwordtwo input').attr('type', 'text');
            $('#show_hide_passwordtwo i').removeClass("fa-eye-slash");
            $('#show_hide_passwordtwo i').addClass("fa-eye");
        }
    });
});
</script>