
<style>
    input.form-control.user_name, input.form-control.fullname,
    input.form-control.date_of_birth, input.form-control.email,
    input.form-control.password, input.form-control.confirm_password{
        width: 450px;
    }
    img.user-create-avatar {
        margin-left: 115px;
        object-fit: cover;
        border-radius: 50%;
        width: 200px;
        height: 200px;
    }
    h3.page-title {
        font-size: 1.75rem;
        margin: 10px 10px 11px 0;
    }
</style>

<div class="content container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title">Thêm tài khoản</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <div class="card">
                <div class="card-body">
                    <!-- Form -->
                    <form method="POST" id="admin-create-user" action="">
                        <div class="form-group">
<!--                            <img src="--><?php //echo $user->getAvatar() ?><!--" class="user-create-avatar"/>-->
                            <img src="http://mvcprj.test/public/avatar/NoImage.png" class="user-create-avatar"/>
                            <input type="file" name="avatar"  class="input-avatar" style="display: none;"/>
                        </div>
                        <div class="form-group">
                            <label>Tên tài khoản</label>
                            <input class="form-control text-box single-line user_name" id="user_name" name="user_name" type="text" />
                            <span class="help-block username-validate" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input class="form-control text-box single-line email" id="email" name="email" type="email" />
                            <span class="help-block email-validate" />
                        </div>
                        <div class="form-group">
                            <label>Mật khẩu</label>
                            <input class="form-control text-box single-line password" id="password" name="password" type="password" />
                            <span class="help-block password-validate" />
                        </div>
                        <div class="form-group">
                            <label>Nhập lại mật khẩu</label>
                            <input class="form-control text-box single-line confirm_password" id="confirm_password" name="confirm_password" type="password" />
                            <span class="help-block confirm-password-validate" />
                        </div>
                        <div class="form-group">
                            <label>Họ và tên</label>
                            <input class="form-control text-box single-line fullname" id="fullname" name="fullname" type="text" />
                            <span class="help-block fullname-validate" />
                        </div>
                        <div class="form-group">
                            <label>Ngày sinh </label>
                            <input class="form-control date_of_birth" data-val="true" id="date_of_birth" name="date_of_birth" type="text"/>
                            <span class="help-block date-of-birth-validate" />
                        </div>

                        <div class="mt-4">
                            <button class="btn btn-dark" type="button" id="create-user-button" onclick="createUserAdmin(this.parentElement.parentElement);">
                                Thêm
                            </button>
                            <button href="<?php echo Route::name('admin.users')?>" class="btn btn-light">
                                Huỷ
                            </button>
                        </div>
                    </form>
                    <!-- Form -->
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'views/client/layouts/auth_script.php' ?>
<script>
    function validateCreateForm1(){
        var datepicker = $('#admin-create-user').find('.date_of_birth').first();
        initDatepicker(datepicker);

        var options = {
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
                            url: "<?php echo Route::name('admin.users.check-username')?>",
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
        };
        $('#admin-create-user').bootstrapValidator(options);
    }

    function validateCreateForm2(){
        var form = $('#admin-create-user');
        // initDatepicker(form.find('.date_of_birth').first());

        var imageAvatar = form.find('.user-create-avatar').first();
        var imageInput  = form.find('.input-avatar').first();

        initImageFile(imageAvatar, imageInput);

    }

    $(document).ready(function(){
        setTimeout(function(){
            validateCreateForm1();
            validateCreateForm2();
        },2000);
    });

    function createUserAdmin(form){
        var form = $(form);
        // console.log(form);

        var data = {
            'user_name': form.find('.user_name').first().val(),
            'email' : form.find('.email').first().val(),
            'password' : form.find('.password').first().val(),
            'confirm_password' : form.find('.confirm_password').first().val(),
            'fullname' : form.find('.fullname').first().val(),
            'date_of_birth' : form.find('.date_of_birth').first().val(),
            'avatar' : form.find('.user-create-avatar').first().attr('src')
        };
        console.log(data);
        $.ajax({
            url: "<?php echo Route::name('admin.users.create');?>",
            type: "POST",
            data: data,
            // dataType: 'JSON',
            success: function (data) {
                alert("Tạo tài khoản thành công!", "success");
                setTimeout(function(){
                    location.reload();
                }, 2000);
                // console.log(data);
            },
            error: function () {
            }
        });



    }



</script>




