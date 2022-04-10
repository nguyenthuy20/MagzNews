<?php
include 'views/client/layouts/master.php';
require_once "connection.php";
require_once "Models/User.php";
?>

<?php startblock('title') ?>
Magz - Đăng ký
<?php endblock() ?>

<?php startblock('css') ?>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/css/bootstrapValidator.min.css"/>
    <style>
        span.help-block.fullname-validate.has-error, span.help-block.date_of-validate-validate.has-error,
        span.help-block.username-validate.has-error, span.help-block.email-validate.has-error,
        span.help-block.password-validate.has-error, span.help-block.confirm_password-validate.has-error {
            padding-top: 8px;
        }
        label.register-id {
            margin-left: -276px;
            text-align: left;
        }
        label.register-id-username {
            margin-left: -250px;
        }
        label.register-id-confirm-password {
            margin-left: -220px;
        }
    </style>
<?php endblock() ?>

<?php startblock('content') ?>
    <section class="login first grey">
        <div class="container">
            <div class="box-wrapper">
                <div class="box box-border">
                    <div class="box-body">
                        <h4>Register</h4>
                        <!-- Đăng ký form-->
                        <form class="user-form" action="<?php echo Route::name('login.register'); ?>" method="POST" id="register" style="text-align: center">
                            <div class="form-group">
                                <label class="register-id">Họ và tên</label>
                                <input class="form-control text-box single-line fullname" data-val="true" id="fullname" name="fullname" type="text" />
                                <span class="help-block fullname-validate" />
                            </div>

                            <div class="form-group">
                                <label class="register-id">Ngày sinh </label>
                                <input class="form-control text-box single-line date_of_birth" data-val="true"  id="date_of_birth" name="date_of_birth" type="text" />
                                <span class="help-block date-of-birth-validate" />
                            </div>
                            <div class="form-group">
                                <label class="register-id">Email </label>
                                <input class="form-control text-box single-line email" data-val="true"  id="email" name="email" type="email" />
                                <span class="help-block email-validate" />
                            </div>
                            <div class="form-group">
                                <label class="register-id-username">Tên tài khoản </label>
                                <input class="form-control text-box single-line user_name" data-val="true"  id="user_name" name="user_name" type="text" />
                                <span class="help-block username-validate" />
                            </div>

                            <div class="form-group">
                                <label class="register-id">Mật khẩu </label>
                                <input class="form-control text-box single-line password" data-val="true"  id="password" name="password" type="password" />
                                <span class="help-block password-validate" />
                            </div>

                            <div class="form-group">
                                <label class="register-id-confirm-password">Nhập lại mật khẩu </label>
                                <input class="form-control text-box single-line confirm_password" data-val="true" id="confirm_password" name="confirm_password"  type="password" />
                                <span class="help-block confirm-password-validate" />
                            </div>
                            <div class="form-button">
                                <button class="btn btn-primary btn-block" id="dang-ky-1" type="submit" >Đăng ký</button>
                            </div>
                        </form>

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
        function validateRegisterForm(){
            // var datepicker = $('#register').find('.date_of_birth').first();
            // initDatepicker(datepicker);
            $('#register').bootstrapValidator({
            // var options = {

                message: 'This value is not valid',
                feedbackIcons: {
                    valid: 'glyphicon glyphicon-ok',
                    invalid: 'glyphicon glyphicon-remove',
                    validating: 'glyphicon glyphicon-refresh'
                },
                fields: {
                    user_name: {
                        container: '.username-validate',
                        validators: {
                            notEmpty: {
                                message: 'Tên tài khoản không được để trống'
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
                                message: 'Tên tài khoản không được trùng mật khẩu'
                            },
                            remote: {
                                message: "Tên tài khoản đã tồn tại",
                                url: "<?php echo Route::name('login.check-username')?>",
                                data: {
                                    user_name: 'user_name'
                                },
                                dataType: 'JSON',
                                type: 'POST',
                                delay: 2000     // Send Ajax request every 2 seconds
                            }
                        }
                    },
                    email: {
                        container: '.email-validate',
                        validators: {
                            notEmpty: {
                                message: 'Email không được để trống'
                            },
                            emailAddress: {
                                message: 'Email phải đúng định dạng'
                            }
                        }
                    },
                    password: {
                        container: '.password-validate',
                        validators: {
                            notEmpty: {
                                message: 'Mật khẩu không được để trống'
                            },
                            identical: {
                                field: 'password',
                                message: "Mật khẩu nhập lại không trùng khớp",
                            }
                        }
                    },

                    confirm_password: {
                        container: '.confirm-password-validate',
                        validators: {
                            notEmpty: {
                                message: 'Vui lòng nhập lại mật khẩu'
                            },
                            identical: {
                                field: 'password',
                                message: "Mật khẩu nhập lại không trùng khớp",
                            }
                        }
                    },
                    fullname: {
                        container: '.fullname-validate',
                        validators: {
                            notEmpty: {
                                message: 'Họ tên không được để trống'
                            }
                        }
                    },

                    date_of_birth: {
                        container: '.date-of-birth-validate',
                        validators: {
                            notEmpty: {
                                message: 'Ngày sinh không được để trống'
                            }
                        }
                    }
                }
            });
            // $('#register').bootstrapValidator(options);
        }

        $(document).ready(function(){
            setTimeout(function(){
                validateRegisterForm();
            },2000);
        });
    </script>


<?php endblock()?>
















