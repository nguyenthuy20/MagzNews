<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Fowler - Chi tiết sản phẩm
<?php endblock() ?>

<?php startblock('content') ?>
    <!-- PRODUCT SINGLE AREA START -->
    <div class="product-simple-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-product-image">
                        <div class="single-product-tab">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><img alt="" src="assets/client/img/single-product/s1.jpg"></a></li>
                                <li role="presentation"><a href="#profile" aria-controls="profile" role="tab" data-toggle="tab"><img alt="" src="assets/client/img/single-product/s2.jpg"></a></li>
                                <li role="presentation"><a href="#messages" aria-controls="messages" role="tab" data-toggle="tab"><img alt="" src="assets/client/img/single-product/s3.jpg"></a></li>
                                <li role="presentation"><a href="#settings" aria-controls="settings" role="tab" data-toggle="tab"><img alt="" src="assets/client/img/single-product/s4.jpg"></a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="home"><img alt="" src="assets/client/img/single-product/1.jpg"></div>
                                <div role="tabpanel" class="tab-pane" id="profile"><img alt="" src="assets/client/img/single-product/2.jpg"></div>
                                <div role="tabpanel" class="tab-pane" id="messages"><img alt="" src="assets/client/img/single-product/3.jpg"></div>
                                <div role="tabpanel" class="tab-pane" id="settings"><img alt="" src="assets/client/img/single-product/4.jpg"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12">
                    <div class="single-product-info">
                        <div class="product-nav">
                            <a href="#"><i class="fa fa-angle-right"></i></a>
                        </div>
                        <h1 class="product_title">Integer consequat ante lectus</h1>
                        <div class="price-box">
                            <span class="new-price">£150.00</span>
                            <span class="old-price">£190.00</span>
                        </div>
                        <div class="pro-rating">
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                            <a href="#"><i class="fa fa-star"></i></a>
                        </div>
                        <div class="short-description">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                        </div>
                        <div class="stock-status">
                            <label>Availability</label>: <strong>In stock</strong>
                        </div>
                        <form action="#">
                            <div class="quantity">
                                <input type="number" value="1" />
                                <button type="submit">Add to cart</button>
                            </div>
                        </form>
                        <div class="add-to-wishlist">
                            <a href="#" data-toggle="tooltip" title="Add to Wishlist"><i class="fa fa-star"></i></a>
                            <a href="#" data-toggle="tooltip" title="Compare"><i class="fa fa-exchange"></i></a>
                        </div>
                        <div class="share_buttons">
                            <a href="#"><img src="assets/client/img/share-img.png" alt="" /></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT SINGLE AREA END -->
    <!-- PRODUCT TAB AREA START -->
    <div class="product-tab-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-md-9">
                    <div class="product-tabs">
                        <div>
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#tab-desc" aria-controls="tab-desc" role="tab" data-toggle="tab">Description</a></li>
                                <li role="presentation"><a href="#page-comments" aria-controls="page-comments" role="tab" data-toggle="tab">Reviews (1)</a></li>
                            </ul>
                            <!-- Tab panes -->
                            <div class="tab-content">
                                <div role="tabpanel" class="tab-pane active" id="tab-desc">
                                    <div class="product-tab-desc">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi, vulputate adipiscing cursus eu, suscipit id nulla.</p>
                                        <p>Pellentesque aliquet, sem eget laoreet ultrices, ipsum metus feugiat sem, quis fermentum turpis eros eget velit. Donec ac tempus ante. Fusce ultricies massa massa. Fusce aliquam, purus eget sagittis vulputate, sapien libero hendrerit est, sed commodo augue nisi non neque. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed tempor, lorem et placerat vestibulum, metus nisi posuere nisl, in accumsan elit odio quis mi. Cras neque metus, consequat et blandit et, luctus a nunc. Etiam gravida vehicula tellus, in imperdiet ligula euismod eget.</p>
                                    </div>
                                </div>
                                <div role="tabpanel" class="tab-pane" id="page-comments">
                                    <div class="product-tab-desc">
                                        <div class="product-page-comments">
                                            <h2>1 review for Integer consequat ante lectus</h2>
                                            <ul>
                                                <li>
                                                    <div class="product-comments">
                                                        <img src="assets/client/img/blog/avatar.png" alt="" />
                                                        <div class="product-comments-content">
                                                            <p><strong>admin</strong> -
                                                                <span>March 7, 2015:</span>
                                                                <span class="pro-comments-rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </span>
                                                            </p>
                                                            <div class="desc">
                                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla augue nec est tristique auctor. Donec non est at libero vulputate rutrum.
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="review-form-wrapper">
                                                <h3>Add a review</h3>
                                                <form action="#">
                                                    <input type="text" placeholder="your name"/>
                                                    <input type="email" placeholder="your email"/>
                                                    <div class="your-rating">
                                                        <h5>Your Rating</h5>
                                                        <span>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                            </span>
                                                        <span>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                            </span>
                                                        <span>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                            </span>
                                                        <span>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                                <a href="#"><i class="fa fa-star"></i></a>
                                                            </span>
                                                    </div>
                                                    <textarea id="product-message" cols="30" rows="10" placeholder="Your Rating"></textarea>
                                                    <input type="submit" value="submit" />
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <div class="upsells_products_widget">
                        <div class="text-center">
                            <div class="section-titel">
                                <h3>Featured Products</h3>
                            </div>
                        </div>
                        <div class="row">
                            <!-- single-product start -->
                            <div class="col-md-4 col-sm-4">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a class="product-img" href="#">
                                            <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                            <img class="secondary-img" src="assets/client/img/home-1/fp-2.jpg" alt="" />
                                        </a>
                                    </div>
                                    <span class="onsale">
                                                <span class="sale-text">Sale</span>
                                            </span>
                                    <div class="product-action">
                                        <h4><a href="#">Sanita Shoes</a></h4>
                                        <ul class="pro-rating">
                                            <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                            <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                            <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="price">$ 180</span>
                                    </div>
                                    <div class="pro-action">
                                        <ul>
                                            <li>
                                                <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                    <i class="fa fa-retweet" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="col-md-4 col-sm-4">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a class="product-img" href="#">
                                            <img class="primary-img" src="assets/client/img/home-1/fp-3.jpg" alt="" />
                                            <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                        </a>
                                    </div>
                                    <span class="onsale">
                                                <span class="sale-text">Sale</span>
                                            </span>
                                    <div class="product-action">
                                        <h4><a href="#">Sanita Shoes</a></h4>
                                        <ul class="pro-rating">
                                            <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                            <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                            <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="price">$ 180</span>
                                    </div>
                                    <div class="pro-action">
                                        <ul>
                                            <li>
                                                <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                    <i class="fa fa-retweet" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                            <!-- single-product start -->
                            <div class="col-md-4 col-sm-4">
                                <div class="single-product">
                                    <div class="product-image">
                                        <a class="product-img" href="#">
                                            <img class="primary-img" src="assets/client/img/home-1/fp-1.jpg" alt="" />
                                            <img class="secondary-img" src="assets/client/img/home-1/fp-4.jpg" alt="" />
                                        </a>
                                    </div>
                                    <span class="onsale red">
                                                <span class="sale-text">50%</span>
                                            </span>
                                    <div class="product-action">
                                        <h4><a href="#">Sanita Shoes</a></h4>
                                        <ul class="pro-rating">
                                            <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                            <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                            <li class="pro-ratcolor"><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                            <li><i class="fa fa-star"></i></li>
                                        </ul>
                                        <span class="price">$ 180</span>
                                    </div>
                                    <div class="pro-action">
                                        <ul>
                                            <li>
                                                <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top"  data-original-title="Shop Cart">
                                                    <i class="fa fa-retweet" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Add Wishlist">
                                                    <i class="fa fa-heart" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                            <li>
                                                <a class="test all_src_icon" href="#" title="" data-toggle="tooltip" data-placement="top" data-original-title="Compare">
                                                    <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <!-- single-product end -->
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-3">
                    <!-- widget-recent start -->
                    <aside class="widget top-product-widget">
                        <h3 class="sidebar-title">Recent</h3>
                        <ul>
                            <li>
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image" src="assets/client/img/single-product/r1.jpg" alt="" />
                                            <img class="secondary-image" src="assets/client/img/single-product/r2.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="productsngl-content">
                                        <div class="pro-info">
                                            <h2 class="product-name"><a href="#">Curabitur vulputate</a></h2>
                                            <div class="price-box">
                                                <span class="new-price">£90.00</span>
                                                <span class="old-price">£120.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image" src="assets/client/img/single-product/r3.jpg" alt="" />
                                            <img class="secondary-image" src="assets/client/img/single-product/r4.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="productsngl-content">
                                        <div class="pro-info">
                                            <h2 class="product-name"><a href="#">Aliquam lobortis est</a></h2>
                                            <div class="price-box">
                                                <span class="new-price">£70.00</span>
                                                <span class="old-price">£100.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image" src="assets/client/img/single-product/r2.jpg" alt="" />
                                            <img class="secondary-image" src="assets/client/img/single-product/r1.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="productsngl-content">
                                        <div class="pro-info">
                                            <h2 class="product-name"><a href="#">Nulla sed libero</a></h2>
                                            <div class="price-box">
                                                <span class="new-price">£80.00</span>
                                                <span class="old-price">£120.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="single-product">
                                    <div class="product-img">
                                        <a href="#">
                                            <img class="primary-image" src="assets/client/img/single-product/r4.jpg" alt="" />
                                            <img class="secondary-image" src="assets/client/img/single-product/r3.jpg" alt="" />
                                        </a>
                                    </div>
                                    <div class="productsngl-content">
                                        <div class="pro-info">
                                            <h2 class="product-name"><a href="#">Pellentesque posuere</a></h2>
                                            <div class="price-box">
                                                <span class="new-price">£50.00</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </aside>
                    <!-- widget-recent end -->
                </div>
            </div>
        </div>
    </div>
    <!-- PRODUCT TAB AREA START -->
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
