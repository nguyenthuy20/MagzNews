<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Fowler - Thanh toán
<?php endblock() ?>

<?php startblock('content') ?>
    <!-- BANNER AREA STRAT -->
    <section class="bannerhead-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="banner-heading">
                        <h1>THANH TOÁN</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- BANNER AREA END -->
    <!-- CHECKOUT AREA START -->
    <section class="checkout-area">
        <div class="container">
            <div class="row">
                <div class="col-md-9 res-mr-btm">
                    <div class="checkout-left-area">
                        <div class="panel-group" id="accordion">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">
                                            <span>1</span>Checkout Method</a>
                                    </h4>
                                </div>
                                <div id="collapse1" class="panel-collapse collapse in">
                                    <div class="panel-body">
                                        <div class="log-in-left">
                                            <h3>CHECKOUT AS A GUEST OR REGISTER</h3>
                                            <div class="left-content">
                                                <p>Register with us for future convenience:</p>
                                                <span><i class="fa fa-dot-circle-o"></i>Checkout as Guest</span>
                                                <span><i class="fa fa-dot-circle-o"></i>Register</span>
                                                <p>Register and save time!</p>
                                                <p>Register with us for future convenience:</p>
                                                <p>Fast and easy check out</p>
                                                <p>Easy access to your order history and status</p>
                                                <p class="login-btn-left"><a href="#">CONTINUE</a></p>
                                            </div>
                                        </div>
                                        <div class="log-in-right">
                                            <h3>LOG IN</h3>
                                            <div class="right-content">
                                                <p>Already registered?</p>
                                                <div class="log-in-from">
                                                    <p>Please log in below:</p>
                                                    <p>
                                                        <span>Email Address*</span>
                                                        <input type="text" />
                                                    </p>
                                                    <p>
                                                        <span>Password*</span>
                                                        <input type="text" />
                                                    </p>
                                                    <p class="login-btn">forgot your password?<a href="#">LOGIN</a></p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                                            <span>2</span>Billing Information</a>
                                    </h4>
                                </div>
                                <div id="collapse2" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="country-select">
                                                    <label>Country <span class="required">*</span></label>
                                                    <select>
                                                        <option value="volvo">bangladesh</option>
                                                        <option value="saab">Algeria</option>
                                                        <option value="mercedes">Afghanistan</option>
                                                        <option value="audi">Ghana</option>
                                                        <option value="audi2">Albania</option>
                                                        <option value="audi3">Bahrain</option>
                                                        <option value="audi4">Colombia</option>
                                                        <option value="audi5">Dominican Republic</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>First Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Last Name <span class="required">*</span></label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Company Name</label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Address <span class="required">*</span></label>
                                                    <input type="text" placeholder="Street address" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list">
                                                    <label>Town / City <span class="required">*</span></label>
                                                    <input type="text" placeholder="Town / City" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>State / County <span class="required">*</span></label>
                                                    <input type="text" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Postcode / Zip <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Email Address <span class="required">*</span></label>
                                                    <input type="email" placeholder="" />
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="checkout-form-list">
                                                    <label>Phone  <span class="required">*</span></label>
                                                    <input type="text" placeholder="Postcode / Zip" />
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="checkout-form-list create-acc">
                                                    <input id="cbox" type="checkbox" />
                                                    <label>Create an account?</label>
                                                </div>
                                                <div id="cbox_info" class="checkout-form-list create-account">
                                                    <p>Create an account by entering the information below. If you are a returning customer please login at the top of the page.</p>
                                                    <label>Account password  <span class="required">*</span></label>
                                                    <input type="password" placeholder="password" />
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                                            <span>3</span>Shopping Method</a>
                                    </h4>
                                </div>
                                <div id="collapse3" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="different-address">
                                            <div class="ship-different-title">
                                                <h3>
                                                    <label>Ship to a different address?</label>
                                                    <input id="ship-box" type="checkbox" />
                                                </h3>
                                            </div>
                                            <div id="ship-box-info" class="row">
                                                <div class="col-md-12">
                                                    <div class="country-select">
                                                        <label>Country <span class="required">*</span></label>
                                                        <select>
                                                            <option value="volvo">bangladesh</option>
                                                            <option value="saab">Algeria</option>
                                                            <option value="mercedes">Afghanistan</option>
                                                            <option value="audi">Ghana</option>
                                                            <option value="audi2">Albania</option>
                                                            <option value="audi3">Bahrain</option>
                                                            <option value="audi4">Colombia</option>
                                                            <option value="audi5">Dominican Republic</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list">
                                                        <label>First Name <span class="required">*</span></label>
                                                        <input type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list">
                                                        <label>Last Name <span class="required">*</span></label>
                                                        <input type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="checkout-form-list">
                                                        <label>Company Name</label>
                                                        <input type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="checkout-form-list">
                                                        <label>Address <span class="required">*</span></label>
                                                        <input type="text" placeholder="Street address" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="checkout-form-list">
                                                        <input type="text" placeholder="Apartment, suite, unit etc. (optional)" />
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="checkout-form-list">
                                                        <label>Town / City <span class="required">*</span></label>
                                                        <input type="text" placeholder="Town / City" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list">
                                                        <label>State / County <span class="required">*</span></label>
                                                        <input type="text" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list">
                                                        <label>Postcode / Zip <span class="required">*</span></label>
                                                        <input type="text" placeholder="Postcode / Zip" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list">
                                                        <label>Email Address <span class="required">*</span></label>
                                                        <input type="email" placeholder="" />
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="checkout-form-list">
                                                        <label>Phone  <span class="required">*</span></label>
                                                        <input type="text" placeholder="Postcode / Zip" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="order-notes">
                                                <div>
                                                    <label>Order Notes</label>
                                                    <textarea id="checkout-mess" cols="30" rows="10" placeholder="Notes about your order, e.g. special notes for delivery." ></textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                                            <span>4</span>Payment Information</a>
                                    </h4>
                                </div>
                                <div id="collapse4" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="payment-met">
                                            <form action="#" id="payment-form">
                                                <ul class="form-list">
                                                    <li class="control">
                                                        <input type="radio" id="p_method_checkmo" name="payment[method]" title="Check / Money order" class="radio">
                                                        <label for="p_method_checkmo">Check / Money order </label>
                                                    </li>
                                                    <li class="control">
                                                        <input type="radio" id="p_method_ccsave" name="payment[method]" title="Credit Card (saved)" class="radio">
                                                        <label for="p_method_ccsave">Credit Card (saved) </label>
                                                    </li>
                                                </ul>
                                            </form>
                                            <div class="buttons-set">
                                                <button class="button" type="submit"><span>Continue</span></button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    <h4 class="panel-title">
                                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">
                                            <span>5</span>Order Review</a>
                                    </h4>
                                </div>
                                <div id="collapse5" class="panel-collapse collapse">
                                    <div class="panel-body">
                                        <div class="order-review" id="checkout-review">
                                            <div class="table-responsive" id="checkout-review-table-wrapper">
                                                <table class="data-table" id="checkout-review-table">
                                                    <thead>
                                                    <tr>
                                                        <th rowspan="1">Product Name</th>
                                                        <th colspan="1">Price</th>
                                                        <th rowspan="1">Qty</th>
                                                        <th colspan="1">Subtotal</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td><h3 class="product-name">Cras neque metus</h3></td>
                                                        <td><span class="cart-price"><span class="price">$155.00</span></span></td>
                                                        <td>1</td>
                                                        <!-- sub total starts here -->
                                                        <td><span class="cart-price"><span class="price">$155.00</span></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td><h3 class="product-name">Nunc facilisis</h3></td>
                                                        <td><span class="cart-price"><span class="price">$222.00</span></span></td>
                                                        <td>1</td>
                                                        <!-- sub total starts here -->
                                                        <td><span class="cart-price"><span class="price">$222.00</span></span></td>
                                                    </tr>
                                                    </tbody>
                                                    <tfoot>
                                                    <tr>
                                                        <td colspan="3">Subtotal</td>
                                                        <td><span class="price">$377.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3">Shipping Handling (Flat Rate - Fixed)</td>
                                                        <td><span class="price">$10.00</span></td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="3"><strong>Grand Total</strong></td>
                                                        <td><strong><span class="price">$387.00</span></strong></td>
                                                    </tr>
                                                    </tfoot>
                                                </table>
                                            </div>
                                            <div id="checkout-review-submit">
                                                <div class="cart-btn-3" id="review-buttons-container">
                                                    <p class="left">Forgot an Item? <a href="#">Edit Your Cart</a></p>
                                                    <button type="submit" title="Place Order" class="button btn-checkout"><span>Place Order</span></button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="checkout-right-area">
                        <p>YOUR CHECKOUT PROGRESS</p>
                        <ul>
                            <li><a href="#"> Billing Address</a></li>
                            <li><a href="#"> Shipping Address</a></li>
                            <li><a href="#"> Shipping Method</a></li>
                            <li><a href="#"> Payment Method</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- CHECKOUT AREA END -->
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


