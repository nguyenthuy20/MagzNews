
<style>
    span {
        font-size: 20px;
    }
</style>
<body>
<div class="main-wrapper">
    <!-- HEADER -->
    <div class="header">
        <div class="header-left">
            <a href="<?php echo Route::name('admin.home')?>" class="logo logo-small">
                <img src="assets/client/images/logo.png" alt="Logo" width="30" height="30" />
            </a>
        </div>
        <a href="javascript:void(0);" id="toggle_btn">
            <i class="fas fa-align-left"></i>
        </a>
        <a class="mobile_btn" id="mobile_btn" href="javascript:void(0);">
            <i class="fas fa-align-left"></i>
        </a>

        <ul class="nav user-menu">
        <!-- MENU START -->
            <li class="nav-item dropdown">
                <a class="dropdown-toggle user-link nav-link" data-toggle="dropdown">
                        <span class="user-img">
                            <img class="rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/9/99/Sample_User_Icon.png" width="45px" alt="Admin" />
                        </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="index.php">Đăng xuất</a>
                </div>
            </li>
        <!-- END MENU -->
        </ul>
    </div>
    <!-- HEADER END -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-logo">
            <a href="<?php //echo Route::name('admin.home')?>">
                <img src="assets/client/images/logo.png" style="margin-bottom:20px; max-height: 70px;" class="img-fluid" alt="" />
            </a>
        </div>
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="active">
                        <a href="<?php echo Route::name('admin.home')?>"><i class="fas fa-columns"></i> <span>Thống kê</span></a>
                    </li>
                    <li class="">
                        <a href="<?php echo Route::name('admin.categories')?>">
                            <i class="fas fa-layer-group"></i>
                            <span>Quản lý chuyên mục</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo Route::name('admin.posts')?>">
                            <i class="fab fa-buffer"></i>
                            <span>Quản lý bài viết</span>
                        </a>
                    </li>
                    <li class="">
                        <a href="<?php echo Route::name('admin.orders')?>">
                            <i class="fas fa-shopping-cart"></i>
                            <span>Quản lý truy cập</span>
                        </a>
                    </li>
                    <li class="">
                        <?php include_once ('views/admin/menu.php')?>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Sidebar -->

    <div class="page-wrapper">


