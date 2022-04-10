
<style>
    input.form-control.user-name, input.form-control.fullname,
    input.form-control.date_of_birth, input.form-control.email{
        width: 450px;
    }
    /*input.form-control :focus{*/
    /*    outline: none;*/
    /*    box-shadow: 0px 0px 5px #61C5FA;*/
    /*    border-color: #b3d4fc;*/
    /*}*/
    /*input.form-control.fullname :hover {*/
    /*    border: 1px solid #999;*/
    /*    border-radius: 5px;*/
    /*}*/
    img.user-edit-avatar {
        width: 30%;
        margin-left: 155px;
    }
    h5#exampleModalLabel {
        font-size: 1.75rem;
        margin: 10px 10px 11px 0;
    }
    img.user-edit-avatar {
        margin-left: 115px;
        object-fit: cover;
        border-radius: 50%;
        width: 200px;
        height: 200px;
    }
</style>

<!-- Edit -->
    <div class="content container-fluid">
        <div class="row">
            <div class="col-xl-8 offset-xl-2">
                <!-- Page Header -->
                    <h5 class="modal-title" id="exampleModalLabel">
                        Sửa tài khoản
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                <!-- /Page Header -->

                <div class="card">
                    <div class="card-body">
                        <!-- Form Edit-->
                        <form method="POST" action="" id="edit-user-form">
                            <div class="form-group">
                                <img src="<?php echo $user->getAvatar() ?>" class="user-edit-avatar"/>
                                <input type="file" name="avatar"  class="input-avatar" style="display: none;"/>
                            </div>
                            <div class="form-group">
                                <p class="register-id">Tên tài khoản</p>
                                <input class="form-control user-name" name="user_name" type="text" value="<?php echo $user->user_name ?>" readonly="true"/>
                            </div>
                            <div class="form-group">
                                <p class="register-id">Email </p>
                                <input class="form-control email" data-val="true"  id="email" name="email" type="email" value="<?php echo $user->email ?>"/>
                                <span class="help-block email-validate" />
                            </div>
                            <div class="form-group">
                                <p class="register-id">Họ và tên</p>
                                <input class="form-control fullname" data-val="true" id="fullname" name="fullname" type="text" value="<?php echo $user->getFullName() ?>"/>
                                <span class="help-block fullname-validate" />
                            </div>
                            <div class="form-group">
                                <p class="register-id">Ngày sinh </p>
                                <input class="form-control date_of_birth" data-val="true"  id="date_of_birth" name="date_of_birth" type="text" value="<?php echo dateFormat($user->date_of_birth) ?>"/>
                                <span class="help-block date-of-birth-validate" />
                            </div>
                            <div class="mt-4">
                                <button class="btn btn-primary" type="button" onclick="updateUserAdmin(this.parentElement.parentElement, <?php echo $user->id ?>);">
                                    Cập nhật
                                </button>
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" href="<?php echo Route::name('admin.users')?>">Hủy</button>
                            </div>
                        </form>
                        <!-- /Form -->
                    </div>
                </div>
            </div>
        </div>
    </div>


<?php include 'views/client/layouts/auth_script.php' ?>
<script>
    function initEditUserForm(){
        var form = $('#edit-user-form');
        initDatepicker(form.find('.date_of_birth').first());

        var imageAvatar = form.find('.user-edit-avatar').first();
        var imageInput  = form.find('.input-avatar').first();

        initImageFile(imageAvatar, imageInput);
    }

    $(document).ready(function(){
        initEditUserForm();
    });

    function updateUserAdmin(form, userId){
        var form = $(form);
        console.log(form);
        var data = {
            'id': userId,
            'email' : form.find('.email').first().val(),
            'fullname' : form.find('.fullname').first().val(),
            'date_of_birth' : form.find('.date_of_birth').first().val(),
            'avatar' : form.find('.user-edit-avatar').first().attr('src')
        };
        console.log(data);

        $.ajax({
            url: "<?php echo Route::name('admin.users.update');?>",
            type: "POST",
            data: data,
            // dataType: 'JSON',
            success: function (data) {
                alert("Đã cập nhật!", "success");
                setTimeout(function(){
                    location.reload();
                }, 1000);
                //     if(data.message == undefined){
                //         $('#edit-user').find('.modal-content').html(data);
                //     }
                //     // else{
                //     //     alert(data.message, "error");
                //     // }
                // console.log(data);
            },
            error: function () {
                //     // console.log(e);
                //     // alert("Vui lòng thực hiện lại", "error");
            }
        });


    }
</script>





