<?php
    include 'views/admin/layout/master.php';
    require_once "connection.php";
    require_once "Models/User.php";
?>

<?php startblock('title') ?>
Magz - Quản lý tài khoản
<?php endblock() ?>

<?php startblock('css') ?>
    <style>
        #input-table-fullname {
            width: 140px;
        }
        input.form-control {
            width: 122px;
        }
        #list-users th input::placeholder {
            color: black;
            font-weight: 700;
        }

         .btn-outline-warning:hover {
             color: #fdfdfd;
         }
        img.avatar {
            object-fit: cover;
            border-radius: 50%;
            margin-left: 15px;
        }
    </style>

<?php endblock() ?>

<?php startblock('content') ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Quản lý tài khoản</h3>
                </div>
                <div class="col-auto text-right">
                    <button class="btn btn-outline-dark" data-toggle="modal" data-target="#create-user" onclick="showFormCreate();">
                        <i class="fas fa-plus"></i> Thêm tài khoản
                    </button>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Start alert -->
        <div class="row">
            <div class="col-4"></div>
            <div class="col-4">
                <div style="display: none" id="deletee" class="alert alert-danger text-center" role="alert"></div>
            </div>
            <div class="col-4"></div>
        </div>
        <!-- End alert -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive" style="width: 100%">
                            <table class="table table-hover table-center mb-0 users-table" id="list-users">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Ảnh đại diện</th>
                                        <th>
                                            <input type="text" class="form-control" id="input-table-fullname" placeholder="Tên người dùng" />
                                        </th>
                                        <th>
                                            <input type="text" class="form-control" placeholder="Tên tài khoản" />
                                        </th>
                                        <th>
                                            <input type="text" class="form-control" placeholder="Ngày sinh" />
                                        </th>
                                        <th>
                                            <input type="text" class="form-control" placeholder="Liên hệ" />
                                        </th>
                                        <th>Tùy chọn</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        foreach($users as $user){
                                    ?>
                                        <tr id="user-row-<?php echo $user->id;?>">
                                            <td >

                                            </td>
                                            <td>
                                                <img src="<?php echo $user->getAvatar();?>" class="avatar"/>
                                            </td>
                                            <td>
                                                <?php echo $user->getFullName(); ?>
                                            </td>
                                            <td>
                                                <?php echo $user->user_name;?>
                                            </td>
                                            <td>
                                                <?php echo $user->getDateOfBirth();?>
                                            </td>
                                            <td>
                                                <?php echo $user->email;?>
                                            </td>
                                            <td class="text-right">
                                                <button class="btn btn-outline-dark" data-toggle="modal" data-target="#edit-user" onclick="showFormEdit(<?php echo $user->id;?>);">
                                                    <i class="far fa-edit mr-1"></i> Sửa
                                                </button>
                                                <button type="button" class="btn btn-outline-danger" onclick="deleteUser(<?php echo $user->id;?>);">
                                                    <i class="far fa-trash-alt mr-1"></i> Xoá
                                                </button>
                                            </td>
                                        </tr>
                                    <?php
                                        }
                                    ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal edit-->
    <div class="modal fade bd-example-modal-lg" id="edit-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div>

    <!-- Modal create-->
    <div class="modal fade bd-example-modal-lg" id="create-user" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div>


<?php endblock() ?>

<?php startblock('script') ?>
    <?php include('views/admin/layout/admin_script.php')?>

    <script>
        $(document).ready(function(){
            initDatatable($('#list-users'),
            );
        });

    </script>
<?php endblock() ?>



