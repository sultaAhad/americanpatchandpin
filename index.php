<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/variable.css">

<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->

<section class="form-wrapper">
    <div class="container">
        <div class="col-lg-10 mx-auto">
            <div class="heading-image">
                <img src="img/app-logo.png" class="img-fluid" alt="">
            </div>
            <div class="form-heading">
                <h1>Website under Maintenance</h1>
                <p>Please email <a href=""> sales@americanpatchandpin.com </a> with any quotes, or general questions
                    that you may have.
                </p>
            </div>
            <div class="form-wrapper-main">
                <form action="">
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="form-outline">
                                <input type="text" name="first_name" placeholder="First Name" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="form-outline">
                                <input type="text" name="first_name" placeholder="Last Name" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="form-outline">
                                <input type="number" name="first_name" placeholder="Phone Number" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="form-outline">
                                <input type="email" name="first_name" placeholder="Email" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="select-control">
                                <select name="driving_habit[miles_do_you_drive]" class="form-select "
                                    aria-label="Default select example">
                                    <option value="">Select Quantity
                                    </option>
                                    <option value="1">6</option>
                                    <option value="2">12</option>
                                    <option value="3">25</option>
                                    <option value="3">50</option>
                                    <option value="3">100</option>
                                    <option value="3">200</option>
                                    <option value="3">300</option>
                                    <option value="3">500</option>
                                    <option value="3">1000</option>
                                    <option value="3">2000</option>
                                    <option value="3">3000</option>
                                    <option value="3">5000</option>
                                    <option value="3">5000+</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="select-control">
                                <select name="driving_habit[miles_do_you_drive]" class="form-select "
                                    aria-label="Default select example">
                                    <option>Select product
                                    </option>
                                    <option value="1">Embroidered Patches</option>
                                    <option value="2">Lapel Pins</option>
                                    <option value="3">Trading Pins</option>
                                    <option value="3">Challenge Coins</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="form-outline">
                                <input type="size" name="first_name" placeholder="Size" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-6 p-0">
                            <div class="form-outline">
                                <input id="date" name="date" placeholder="Date Needed" class="form-control">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 p-0">
                            <div class="file-upload">
                                <div class="file-select">
                                    <div class="file-select-button" id="fileName">Choose File</div>
                                    <div class="file-select-name" id="noFile">No file chosen...</div>
                                    <input type="file" name="chooseFile" id="chooseFile">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 p-0">
                            <div class="form-outline">
                                <textarea class="form-control" id="exampleFormControlTextarea1"
                                    placeholder="Write a message to us?"></textarea>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 p-0">
                            <div class="btn-wrapper">
                                <a class="btn" href="">Submit</a>
                            </div>
                        </div>
                    </div>
                    <nav>
                        <div class="nav nav-tabs mt-3" id="nav-tab" role="tablist">
                            <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home"
                                aria-selected="true">Patches</button>
                            <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile"
                                aria-selected="false">Trading Pins</button>
                            <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab"
                                data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact"
                                aria-selected="false">Medals</button>
                        </div>
                    </nav>
                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                            aria-labelledby="nav-home-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/patches/patches1.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/patches/patches2.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/patches/patches3.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/patches/patches4.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/patches/patches5.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/patches/patches6.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/patches/patches7.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/patches/patches8.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/patches/patches9.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            <div class="row">
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins1.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins2.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins3.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins4.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins5.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins6.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins7.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins8.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins9.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins10.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins11.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins12.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins13.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins14.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins15.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins16.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins17.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins18.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins19.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins20.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins21.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins22.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins23.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins24.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4 second__pane">
                                    <figure>
                                        <img src="img/pin/pins25.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                            </div>
                            
                            <div class="text-center">
                                <a class="loadmore" href="javascript:void(0)" id="more">Load More</a>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                            <div class="row">
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/medals/medals1.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/medals/medals2.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/medals/medals3.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/medals/medals4.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/medals/medals5.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/medals/medals6.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                                <div class="col-md-4">
                                    <figure>
                                        <img src="img/medals/medals7.jpg" class="img-fluid w-100" alt="">
                                    </figure>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-12">
                            <div class="social-icon-wrapper">
                                <a href="https://www.facebook.com/people/American-Patch-and-Pin/100088864336727/"> <img
                                        src="img/facebook.png" class="img-fluid" alt=""></a>
                                <a href="https://www.instagram.com/americanpatchandpin/"> <img src="img/instagram.png"
                                        class="img-fluid" alt=""></a>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->


<script>
$(document).ready(function() {
    $('.second__pane').hide();
    $('.second__pane').each(function(index, value) {
        if (index < 6) {
            $(this).show();
        }
    });
    if ($('.second__pane:hidden').length) {
        $('#more').show();
    }
    if (!$('.second__pane:hidden').length) {
        $('#more').hide();
    }

});

$('#more').on('click', function() {
    $('.second__pane:hidden').each(function(index, value) {
        if (index < 3) {
            $(this).show();
        }
    });
    if (!$('.second__pane:hidden').length) {
        $('#more').hide();
    }
});
</script>