<?php include 'views/client/layouts/master.php' ?>

<?php startblock('title') ?>
Magz - Sửa thông tin tài khoản
<?php endblock() ?>

<?php startblock('css') ?>
    <style>
        form#edit-profile-form {
            padding: 207px 62px;
            margin: 0 25%;
            width: 40%;
        }

        img.avatar {
            object-fit: cover;
            width: 200px;
            height: 200px;
            border-radius: 50%;
        }

        #cap-nhat, #cap-nhat-ajax{
            margin-top: 10px;
            padding: 8px 20px;
            font-size: 14px;
            font-weight: 600;
            color: #fff;
            background: #ef7676;
            border: none;
            cursor: pointer;
            border-radius: 9px;
        }
        p.register-id {
            text-align: left;
        }
    </style>
<?php endblock() ?>

<?php startblock('content') ?>

<form class="user-form" action=" <?php echo Route::name('update-profile'); ?>" method="POST" id="edit-profile-form" enctype="multipart/form-data" style="text-align: center">
    <div class="form-group">
        <img src="<?php echo $user->getAvatar() ?>" class="avatar"/>
        <input type="file" name="avatar" class="input-avatar" style="display: none;"/>
    </div>

    <div class="form-group">
        <p class="register-id">Tên tài khoản</p>
        <input class="form-control text-box single-line user_name" name="user_name" type="text" value="<?php echo $user->user_name ?>" readonly="true"/>
    </div>

    <div class="form-group">
        <p class="register-id">Email </p>
        <input class="form-control text-box single-line email" data-val="true"  id="email" name="email" type="email" value="<?php echo $user->email ?>"/>
        <span class="help-block email-validate" />
    </div>

    <div class="form-group">
        <p class="register-id">Họ và tên</p>
        <input class="form-control text-box single-line fullname" data-val="true" id="fullname" name="fullname" type="text" value="<?php echo $user->getFullName() ?>"/>
        <span class="help-block fullname-validate" />
    </div>

    <div class="form-group">
        <p class="register-id">Ngày sinh </p>
        <input class="form-control text-box single-line date_of_birth" data-val="true"  id="date_of_birth" name="date_of_birth" type="text" value="<?php echo dateFormat($user->date_of_birth) ?>"/>
        <span class="help-block date-of-birth-validate" />
    </div>
    <div class="form-button">
       <button id="cap-nhat" type="submit" >CẬP NHẬT</button>
<!--       <button id="cap-nhat-ajax" type="button" onclick="updateUser(this.parentElement.parentElement);">CẬP NHẬT AJAX</button>-->
    </div>
</form>
<?php endblock() ?>


<?php startblock('script') ?>
<!--    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.3/js/bootstrapValidator.min.js"></script>-->
    <?php include 'views/client/layouts/auth_script.php' ?>

    <script type="text/javascript">
        function initEditUserForm(){
            var form = $('#edit-profile-form');
            // initDatepicker(form.find('.date_of_birth').first());

            var imageAvatar = form.find('.avatar').first();
            var imageInput  = form.find('.input-avatar').first();

            initImageFile(imageAvatar, imageInput);
        }

        function updateUser(form){
            var form = $(form);
            console.log(form);
            var data = {
                'email' : form.find('.email').first().val(),
                'fullname' : form.find('.fullname').first().val(),
                'date_of_birth' : form.find('.date_of_birth').first().val(),
                'avatar' : form.find('.avatar').first().attr('src'),
            };

            // gửi ajax
            $.ajax({
                url: "<?php echo Route::name('update-profile');?>",
                type: "POST",
                data: data,
                success: function (data) {
                    console.log(data);
                },
                error: function () {
                }
            });
        }

        $(document).ready(function(){
            initEditUserForm();
        });

</script>
<?php endblock() ?>


