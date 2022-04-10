<?php
include 'views/admin/layout/master.php';
require_once "connection.php";
require_once "Models/Category.php";
?>

<?php startblock('title') ?>
Magz - Quản lý chuyên mục
<?php endblock() ?>

<?php startblock('css') ?>
    <style>
        h3#category-title {
            padding-top: 30px;
            margin-bottom: -10px
        }
    </style>
<?php endblock() ?>

<?php startblock('content') ?>
    <div class="content container-fluid">
    <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Quản lý chuyên mục</h3>
                </div>
                <div class="col-auto">
                    <button type="button" class="btn btn-outline-dark" data-toggle="modal"
                            data-target="#create-category" onclick="showFormCreateCategory();">
                        <i class="fas fa-plus"></i> Thêm chuyên mục
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

    <!-- Datatables -->
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0 categories-table" id="list-categories">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th>Tên chuyên mục</th>
                                        <th>Chuyên mục gốc</th>
                                        <th>Thời gian tạo</th>
                                        <th>Thời gian chỉnh sửa</th>
                                        <th class="text-center">Hành động</th>
                                    </tr>
                                </thead>

                                <tbody>
                                    <?php
                                        foreach($categories as $category){
                                    ?>
                                        <tr id="category-row-<?php echo $category->id;?>">
                                            <td >

                                            </td>
                                            <td>
                                                <?php echo $category->name;?>
                                            </td>
                                            <td>
                                                <?php echo $category->parent_id;?>
                                            </td>
                                            <td >
                                                <?php echo $category->created_at;?>
                                            </td>
                                            <td >
                                                <?php echo $category->updated_at;?>
                                            </td>
                                            <td class="text-right">
                                                <button class="btn btn-outline-dark" data-toggle="modal" data-target="#edit-category"
                                                                        onclick="showFormCategoryEdit(<?php echo $category->id;?>);">
                                                    <i class="far fa-edit mr-1"></i> Sửa
                                                </button>
                                                <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                                        onclick="deleteCategory(<?php echo $category->id;?>);">
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
<div class="modal fade bd-example-modal-lg" id="edit-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>

<!-- Modal create-->
<div class="modal fade bd-example-modal-lg" id="create-category" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">

        </div>
    </div>
</div>
<?php endblock() ?>

<?php startblock('script') ?>
    <?php include('views/admin/layout/admin_script.php')?>
    <?php include('views/admin/manage_categories/category_script.php') ?>
    <script>
        $(document).ready(function(){
            initDatatableCategory($('#list-categories'));
        });

    </script>
<?php endblock() ?>


