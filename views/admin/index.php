<!-- Admin Login -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0">
    <title>Magz - Login Admin</title>
    <!-- Favicons -->
    <link rel="shortcut icon" href="assets/admin/favicon.ico">

    <!-- Fontawesome CSS -->
    <link href="assets/admin/plugins/fontawesome/css/fontawesome.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="assets/admin/plugins/fontawesome/css/all.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="assets/admin/plugins/bootstrap/css/bootstrap.min.css">

    <!-- Main CSS -->
    <link rel="stylesheet" href="assets/admin/css/admin.css">
</head
<body>
<div class="main-wrapper">

    <div class="login-page">
        <div class="login-body container">
            <div class="loginbox">
                <div class="login-right-wrap">
                    <div class="account-header">
                        <div class="account-logo text-center mb-4">
                            <a href="index.html">
                                <img src="assets/client/images/logo.png" alt="" class="img-fluid">
                            </a>
                        </div>
                    </div>
                    <div class="login-header">

                        <h3 style="text-align: center; margin:30px 20px">Hệ thống quản trị</span></h3>
                    </div>
                    <form  action="<?php echo Route::name('admin.home') ?>">
                        <div class="form-group">
                            <label class="control-label">Email</label>
                            <input name="email" class="form-control" type="text" placeholder="Nhập địa chỉ email">
                        </div>
                        <div class="form-group mb-4">
                            <label class="control-label">Mật khẩu</label>
                            <input name="password" class="form-control" type="password" placeholder="Nhập mật khẩu">
                        </div>
                        <div class="text-center">
                            <button class="btn bg-vascara btn-block account-btn" >Đăng nhập</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- jQuery -->
<script src="assets/admin/js/jquery-3.5.0.min.js"></script>
<!-- Bootstrap Core JS -->
<script src="assets/admin/js/popper.min.js"></script>
<script src="assets/admin/plugins/bootstrap/js/bootstrap.min.js"></script>
<!-- Custom JS -->
<script src="assets/admin/js/admin.js"></script>

</body>
</html>