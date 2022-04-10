<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Fowler - Giỏ hàng
<?php endblock() ?>

<?php startblock('content') ?>
    <!-- BANNER AREA STRAT -->
    <section class="bannerhead-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-heading">
                        <h1>GIỎ HÀNG</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER AREA END -->
    <!-- SHOPING CART AREA START -->
    <section class="shoping-cart-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="wishlist-table-area table-responsive">
                        <table>
                            <thead>
                            <tr>
                                <th class="product-remove">Remove</th>
                                <th class="product-image">Image</th>
                                <th class="product-name">Product Name</th>
                                <th class="product-edit">Edit</th>
                                <th class="product-unit-price">Unit Price</th>
                                <th class="product-quantity">Quantity</th>
                                <th class="product-subtotal">Subtotal</th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr>
                                <td class="product-remove">
                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td class="product-image">
                                    <a href="#"><img alt="#" src="assets/client/img/other-pg/shop-cart.jpg"></a>
                                </td>
                                <td class="product-name">
                                    <h3><a href="#">Men Shoe</a></h3>
                                </td>
                                <td class="product-edit">
                                    <p><a href="#">Edit</a></p>
                                </td>
                                <td class="product-unit-price">
                                    <p>$ 100</p>
                                </td>
                                <td class="product-quantity product-cart-details">
                                    <input type="number" value="1">
                                </td>
                                <td class="product-quantity">
                                    <p>$ 100</p>
                                </td>
                            </tr>
                            <tr>
                                <td class="product-remove">
                                    <a href="#"><i class="fa fa-trash-o"></i></a>
                                </td>
                                <td class="product-image">
                                    <a href="#"><img alt="#" src="assets/client/img/other-pg/shop-cart-1.jpg"></a>
                                </td>
                                <td class="product-name">
                                    <h3><a href="#">Women Shoe</a></h3>
                                </td>
                                <td class="product-edit">
                                    <p><a href="#">Edit</a></p>
                                </td>
                                <td class="product-unit-price">
                                    <p>$ 100</p>
                                </td>
                                <td class="product-quantity product-cart-details">
                                    <input type="number" value="1">
                                </td>
                                <td class="product-quantity">
                                    <p>$ 100</p>
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="shopingcart-bottom-area">
                        <a href="#" class="bottoma">CONTINUE SHOPPING</a>
                        <div class="bottom-button">
                            <a href="#" class="bottomb">CLEAR SHOPPING CART</a>
                            <a href="#" class="bottomb">UPDATE SHOPPING CART</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- SHOPING CART AREA END -->
    <!-- DISCOUNT SUBTOTAL AREA STRAT -->
    <section class="discount-area">
        <div class="container">
            <div class="row">
                <div class="col-md-6 res-mr-btm xs-res-mrbtm">
                    <div class="discount-main-area">
                        <div class="discount-top">
                            <h3>DISCOUNT CODE</h3>
                            <p>Enter your coupon code if have one</p>
                        </div>
                        <div class="discount-middle">
                            <input type="text" placeholder=""/>
                            <a href="#" class="">APPLY COUPON</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="subtotal-main-area">
                        <div class="subtotal-area">
                            <h2>SUBTOTAL<span>$ 200</span></h2>
                        </div>
                        <div class="subtotal-area">
                            <h2>GRAND TOTAL<span>$ 200</span></h2>
                        </div>
                        <a href="#">CHECKOUT</a>
                        <p>Checkout With Multiple Addresses</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- DISCOUNT SUBTOTAL AREA END -->
    <!-- OUR BRAND AREA START -->
    <section class="our-brand-area">
        <div class="container">
            <div class="text-center">
                <div class="section-titel">
                    <h3>OUR BRANDS</h3>
                </div>
            </div>
            <div class="row blog-area">
                <div id="ourbrand-owl">
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-1.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-2.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-3.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-4.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-5.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-3.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-1.jpg" alt="" /></div>
                    <div class="col-md-12"><img src="assets/client/img/other-pg/brand-logo-2.jpg" alt="" /></div>
                </div>
            </div>
        </div>
    </section>
    <!-- OUR BRAND AREA END -->
<?php endblock() ?>

