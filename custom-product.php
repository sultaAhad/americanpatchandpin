<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/variable.css">
<link rel="stylesheet" href="css/cart.css">
<link rel="stylesheet" href="css/pricing.css">

<!-- App Include Here -->
<?php include 'inc/app.php'; ?>
<!-- App Include Here -->




<!-- SECTION START -->
<section class="main-heading-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 align-items-center justify-content-center d-flex">
                <h1 class="main-section-heading" data-aos="fade-right" data-aos-duration="500" data-aos-offset="300"
                    data-aos-easing="ease-in-sine">CUSTOM 4
                </h1>
            </div>
        </div>
    </div>
</section>
<section class="product-detail">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-lg-5">
                        <div class="img-wrapper-product">
                            <img src="img/card2.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-lg-7">
                        <div class="heading-para-product">
                            <h3>CUSTOM 3
                            </h3>
                            <div class="border-bottom" data-aos="fade-right" data-aos-duration="600"
                                data-aos-offset="300" data-aos-easing="ease-in-sine"></div>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Ut elit tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo.
                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec
                                ullamcorper mattis, pulvinar dapibus leo. Ut elit tellus, luctus nec ullamcorper mattis,
                                pulvinar dapibus leo. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit
                                tellus, luctus nec ullamcorper mattis, pulvinar dapibus leo. Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit.

                            </p>
                            <h6>$15.00
                            </h6>
                            <div class="qtn-wrapper">
                                <div class="qty-container">
                                    <button class="qty-btn-minus btn-light" type="button"><i
                                            class="fa fa-minus"></i></button>
                                    <input type="text" name="qty" value="0" class="input-qty" />
                                    <button class="qty-btn-plus btn-light" type="button"><i
                                            class="fa fa-plus"></i></button>
                                </div>
                                <a class="btn-card" href="">ADD TO CARD</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- SECTION END -->



<!-- CONTACT section start -->
<?php include 'inc/contect-sec.php'; ?>
<!-- CONTACT section end -->

<!-- Footer Include Here -->
<?php include 'inc/footer.php'; ?>
<!-- Footer Include Here -->

<script>
var buttonPlus = $(".qty-btn-plus");
var buttonMinus = $(".qty-btn-minus");

var incrementPlus = buttonPlus.click(function() {
    var $n = $(this)
        .parent(".qty-container")
        .find(".input-qty");
    $n.val(Number($n.val()) + 1);
});

var incrementMinus = buttonMinus.click(function() {
    var $n = $(this)
        .parent(".qty-container")
        .find(".input-qty");
    var amount = Number($n.val());
    if (amount > 0) {
        $n.val(amount - 1);
    }
});
</script>