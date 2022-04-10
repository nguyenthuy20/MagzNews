<?php
    include 'views/client/layouts/master.php';
    require_once "connection.php";
    require_once "Models/User.php";
?>

<?php startblock('title') ?>
Magz - Đăng nhập
<?php endblock() ?>

<?php startblock('css') ?>
    <style>
        p#login-register {
            margin: 15px 0px 15px;
        }
        span.help-block.login-username-validate.has-error, span.help-block.login-password-validate.has-error {
            padding-top: 8px;
        }
    </style>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
<?php endblock() ?>

<?php startblock('content') ?>
    <section class="login first grey">
        <div class="container">
            <div class="box-wrapper">
                <div class="box box-border">
                    <div class="box-body">
                        <h4>Login</h4>
                        <form class="user-form" action="<?php echo Route::name('login.login') ?>" method="POST" id="login-form">
                            <div class="form-group">
                                <label class="login-label-class">Nhập tên tài khoản</label>
                                <input type="text" name="user_name" class="form-control" ="Nhập tên tài khoản" />
                                <span class="help-block login-username-validate" />
                            </div>
                            <div class="form-group">
                                <label class="login-label-class">Nhập mật khẩu</label>
                                <input type="password" name="password" class="form-control" ="Nhập mật khẩu" />
                                <span class="help-block login-password-validate" />
                            </div>
                            <div class="form-button">
                                <button id="dang-nhap-1" type="submit" class="btn btn-primary btn-block">Đăng nhập</button>
                            </div>
                        </form>
                        <div class="user-form-remind">
                            <p id="login-register"> Bạn chưa có tài khoản?
                                <a href="<?php echo Route::name('register.show-register'); ?>">Đăng ký</a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php endblock() ?>

<?php startblock('script') ?>

    <!-- Validate form Register -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js" integrity="sha512-Vp2UimVVK8kNOjXqqj/B0Fyo96SDPj9OCSm1vmYSrLYF3mwIOBXh/yRZDVKo8NemQn1GUjjK0vFJuCSCkYai/A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <?php include 'views/client/layouts/auth_script.php' ?>
    <script>
        function validateLoginForm(){
            $('#login-form').bootstrapValidator({
                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    user_name: {
                        container: '.login-username-validate',
                        validators: {
                            notEmpty: {
                                message: 'Bạn cần phải nhập tên tài khoản'
                            },
                            stringLength: {
                                min: 6,
                                max: 30,
                                message: 'Tên tài khoản phải từ 6-30 ký tự'
                            },
                            regexp: {
                                regexp: /^[a-zA-Z0-9_\.]+$/,
                                message: 'Tên tài khoản không được chứa ký tự đặc biệt'
                            },
                            different: {
                                field: 'password',
                                message: 'Tên tài khoản không được giống mật khẩu'
                            }
                        }
                    },
                    password: {
                        container: '.login-password-validate',
                        validators: {
                            notEmpty: {
                                message: 'Bạn cần phải nhập mật khẩu'
                            }
                        }
                    }
                }
            });
        }
        $(document).ready(function(){
            setTimeout(function(){
                validateLoginForm();
            },2000);
        });
    </script>
<?php endblock()?>















