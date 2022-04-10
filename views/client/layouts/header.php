<style>
    a.dang-nhap-header {
        float: left;
        text-transform: uppercase;
        font-weight: 500;
        letter-spacing: 1px;
        margin-top: 3px;
    }
    img.header-avatar {
        object-fit: cover;
        width: 44px;
        height: 44px;
        border-radius: 50%;
    }
    .col-md-3.col-sm-12.text-left {
        width: 300px;
    }
    a.logout-button {
        padding-top: 11px;
    }
</style>
<header class="primary">
    <div class="firstbar">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-12">
                    <div class="brand">
                        <a href="/">
                            <img src="assets/client/images/logo.png" alt="Magz Logo">
                        </a>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <form class="search" autocomplete="off">
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" name="q" class="form-control" placeholder="Tìm kiếm ">
                                <div class="input-group-btn">
                                    <button class="btn btn-primary"><i class="ion-search"></i></button>
                                </div>
                            </div>
                        </div>
                        <div class="help-block">
                            <div>#HOT:</div>
                            <ul>
                                <li><a href="#">Covid-19</a></li>
                                <li><a href="#">Điều trị</a></li>
                                <li><a href="#">Omicron</a></li>
                                <li><a href="#">Ukraina</a></li>
                                <li><a href="#">Chiến tranh</a></li>
                                <li><a href="#">Hà Nội</a></li>
                            </ul>
                        </div>
                    </form>
                </div>
                <div class="col-md-3 col-sm-12 text-left">
                    <ul class="nav-icons" id="nav-login">
                        <li>
                            <?php
                            if(Auth::checkAuth()){
                                ?>
                                <img src="<?php echo Auth::user()->getAvatar(); ?>" class="header-avatar">
                                <a href="<?php echo Route::name('edit-profile')?>">
                                    <?php
                                    echo Auth::user()->getFullName();
                                    ?>
                                </a>

                                <?php
                            }else{
                                ?>
                                <a href="<?php echo Route::name('login.show-login')?>" class="dang-nhap-header">
                                    <i class="ion-person" id="icon-nav-login" style="margin-top: -3px;"></i>
                                    Đăng nhập
                                </a>
                                <?php
                            }
                            ?>
                        </li>

                        <li class="li-logout">
                            <label class="right-logout-label">
                                <?php
                                if(Auth::checkAuth()){
                                    ?>
                                    <a class="logout-button" href="<?php echo Route::name('logout')?>" style="font-family: 'Lato', sans-serif;;font-size: 15px;font-weight: 300;">
                                        Đăng xuất
                                    </a>
                                    <?php
                                }
                                ?>
                            </label>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

<!-- Start nav -->
    <nav class="menu">
        <div class="container">
            <div class="brand">
                <a href="#">
                    <img src="assets/client/images/logo.png" alt="Magz Logo">
                </a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="menu" data-target="#menu-list"><i class="ion-navicon-round"></i></a>
            </div>
            <div class="mobile-toggle">
                <a href="#" data-toggle="sidebar" data-target="#sidebar"><i class="ion-ios-arrow-left"></i></a>
            </div>

        <!-- Menu -->
            <div id="menu-list">
                <ul class="nav-list">
                    <li><a href="/">Trang chủ</a></li>
                    <?php foreach ($categories as $category){ ?>
                        <li class="dropdown magz-dropdown">
                            <?php if ($category->parent_id == 0){ ?>
                                <a href=""> <?php echo $category->name ?><i class="ion-ios-arrow-right"></i></a>
                                <ul class="dropdown-menu">
                                    <?php foreach ($categories as $parent){ ?>
                                        <?php if($parent->parent_id == $category->id){ ?>
                                            <li><a href="#"><?php echo $parent->name ?></a></li>
                                        <?php } ?>
                                    <?php } ?>
                                </ul>
                            <?php } ?>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </nav>
<!-- End nav -->
</header>




