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
                <h1 class="main-section-heading" data-aos="fade-right" data-aos-duration="500" data-aos-offset="300" data-aos-easing="ease-in-sine">Cart
                </h1>
            </div>
        </div>
    </div>
</section>
<section class="cart-product">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 mx-auto">
                <div class="row">
                    <div class="col-lg-7">
                        <div class="cart-main">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th scope="col"></th>
                                        <th scope="col"></th>
                                        <th scope="col">Product</th>
                                        <th scope="col">Price</th>
                                        <th scope="col">Quantity</th>
                                        <th scope="col">Subtotal</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td><i class="fa fa-times" aria-hidden="true"></i>
                                        </td>
                                        <td>
                                            <div class="img-table"> <img src="img/challenge-coin8.webp" class="img-fluid" alt=""></div>
                                        </td>
                                        <td>CUSTOM 3
                                        </td>
                                        <td>$15.00
                                        </td>
                                        <td>
                                            <div class="qty-container">
                                                <button class="qty-btn-minus btn-light" type="button"><i class="fa fa-minus"></i></button>
                                                <input type="text" name="qty" value="0" class="input-qty" />
                                                <button class="qty-btn-plus btn-light" type="button"><i class="fa fa-plus"></i></button>
                                            </div>
                                        </td>
                                        <td>$15.00
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <div class="table-btn">
                                <a href="" class="btn-table">Update Cart</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5">
                        <div class="checkout cart-main">
                            <h6>Cart Totals
                            </h6>
                            <div class="sub-total">
                                <h4>Subtotal</h4>
                                <h5>$15.00</h5>
                            </div>
                            <div class="sub-total">
                                <h4>total</h4>
                                <h5>$15.00</h5>
                            </div>
                            <div class="btn-wrapper-cart">
                                <a href="checkout.php" class="btn-total">
                                    Proceed to Checkout</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-7">
                        <form action="">
                            <div class="total-form">
                                <input type="text" placeholder="coupon code">
                                <a class="form-btn" href=""> apply coupon</a>
                            </div>
                        </form>
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