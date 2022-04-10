<?php
include 'views/admin/layout/master.php';
require_once "connection.php";
require_once "Models/Category.php";
?>

<?php startblock('title') ?>
Fowler - Quản lý chuyên mục
<?php endblock() ?>

<?php startblock('css') ?>
    <link rel="stylesheet" href="assets/admin/css/nestable.css"></>
    <style>
        h3#category-title {
            padding-top: 30px;
            margin-bottom: -10px
        }
        .dd-handle {
            width: 490px;
            height: 40px
        }
        button.btn.btn-outline-danger, button.btn.btn-outline-dark {
            height: 1.8125rem;
            font-size: .8125rem;
            margin-top: -31px;
        }
        button#button-children {
            height: 1.8125rem;
            font-size: .8125rem;
            margin-top: -69px;
            margin-right: -56px;
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
                <!-- Nestable -->
                    <menu id="nestable-menu">
                        <button type="button" data-action="expand-all">Hiển thị tất cả</button>
                        <button type="button" data-action="collapse-all">Thu gọn</button>
                    </menu>

                    <div class="cf nestable-lists">
                        <div class="dd" id="nestable">
                            <ol class="dd-list">
                                <?php foreach ($categories as $category){ ?>
                                    <li class="dd-item" data-id="2">
                                        <?php if ($category->parent_id == 0 ) {?>
                                            <div class="dd-handle">
                                                <?php echo $category->name ?>
                                                <div class="text-right button">
                                                    <button class="btn btn-outline-dark" data-toggle="modal" data-target="#edit-category"
                                                            onclick="showFormCategoryEdit(<?php echo $category->id;?>);">
                                                        <i class="far fa-edit mr-1"></i> Sửa
                                                    </button>
                                                    <button type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                            onclick="deleteCategory(<?php echo $category->id;?>);">
                                                        <i class="far fa-trash-alt mr-1"></i> Xoá
                                                    </button>
                                                </div>
                                            </div>
                                            <ol class="dd-list">
                                                <?php foreach ($categories as $pr){ ?>
                                                    <?php if ($category->id == $pr->parent_id){ ?>
                                                        <li class="dd-item" data-id="3">
                                                            <div class="dd-handle">
                                                                <?php echo $pr->name ?>
                                                            </div>
<!--                                                            <div class="text-right button">-->
<!--                                                                <button class="btn btn-outline-dark" id="button-children" data-toggle="modal" data-target="#edit-category">-->
<!--                                                                    <i class="far fa-edit mr-1"></i> Sửa-->
<!--                                                                </button>-->
<!--                                                                <button type="button" class="btn btn-outline-danger" id="button-children-danger" data-toggle="modal">-->
<!--                                                                    <i class="far fa-trash-alt mr-1"></i> Xoá-->
<!--                                                                </button>-->
<!--                                                            </div>-->
                                                        </li>
                                                    <?php } ?>
                                                <?php } ?>
                                            </ol>
                                        <?php } ?>
                                    </li>
                                <?php } ?>
                            </ol>
                        </div>


                    </div>
                </div>

            </div>
        </div>
    </div>
</div>
<?php endblock() ?>

<?php startblock('script') ?>
    <?php include('views/admin/layout/admin_script.php')?>
    <?php include('views/admin/manage_categories/category_script.php') ?>

    <script src="assets/admin/js/jquery.nestable.js"></script>
    <script>
        $(document).ready(function()
        {
            var updateOutput = function(e)
        {
            var list   = e.length ? e : $(e.target),
                output = list.data('output');

            // $.ajax({
            //     url: '/nestable.php',
            //     type: "POST",
            //     data: {
            //         data:list.nestable('serialize')
            //     },
            //     dataType: 'JSON',
            //     success: function (data) {
            //         console.log(data);
            //     },
            //     error: function (e) {
            //     }
            // });

            if (window.JSON) {
                output.val(window.JSON.stringify(list.nestable('serialize')));//, null, 2));
            } else {
                output.val('JSON browser support required for this demo.');}
            };

        // activate Nestable for list 1
            $('#nestable').nestable({
            group: 1
            })
            .on('change', updateOutput);

        // output initial serialised data
            updateOutput($('#nestable').data('output', $('#nestable-output')));

            $('#nestable-menu').on('click', function(e) {
                var target = $(e.target),
                action = target.data('action');
                if (action === 'expand-all') {
                    $('.dd').nestable('expandAll');
                }
                if (action === 'collapse-all') {
                    $('.dd').nestable('collapseAll');
                }
            });

            // $('#nestable3').nestable();

        });
    </script>
    <script>
        $('.dd').nestable({ /* config options */ });
    </script>

<?php endblock() ?>


