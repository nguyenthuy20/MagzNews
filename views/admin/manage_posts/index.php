<?php include 'views/admin/layout/master.php' ?>

<?php startblock('title') ?>
Magz - Quản lý bài viết
<?php endblock() ?>

<?php startblock('content') ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Quản lý bài viết</h3>
                </div>
                <div class="col-auto text-right">
                    <button class="btn btn-outline-dark" data-toggle="modal" data-target="#create-post"
                            onclick="showFormCreatePost();">
<!--                    <a href="--><?php //echo Route::name('admin.posts.create')?><!--">-->
                    <i class="fas fa-plus"></i> Tạo bài viết
<!--                    </a>-->
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
                            <table class="table table-hover table-center mb-0 posts-table" id="list-posts">
                                <thead>
                                    <tr>
                                        <th>STT</th>
                                        <th id="th-title-post" style="width: 350px;">
                                            <input type="text" class="form-control" id="input-table-title" placeholder="Tiêu đề" />
                                        </th>
                                        <th>
                                            <input type="text" class="form-control" id="input-table-author-name" placeholder="Tác giả" />
                                        </th>
                                        <th>
                                            <input type="text" class="form-control" placeholder="Ngày đăng" />
                                        </th>
                                        <th style="text-align: center">
                                            Tùy chọn
                                        </th>
                                    </tr>
                                </thead>

                                <tbody>
                                <?php
                                foreach($posts as $post){
                                    ?>
                                    <tr id="post-row-<?php echo $post->id;?>">
                                        <td >
                                        </td>
                                        <td>
                                            <?php echo $post->title; ?>
                                        </td>
                                        <td>
                                            <?php echo Auth::user()->getFullName()?>
                                        </td>
                                        <td>
                                            <?php echo $post->created_at; ?>
                                        </td>
                                        <td class="text-right">
                                            <!--chi tiết-->
                                            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#detail-post">
                                                <i class="far fa-eye mr-1"></i>
                                            </button>
                                            <!--sửa-->
                                            <button type="button" class="btn btn-outline-dark" data-toggle="modal" data-target="#edit-post"
                                                    onclick="showFormPostEdit(<?php echo $post->id;?>);">
                                                <i class="far fa-edit mr-1"></i>
                                            </button>
                                            <!--xóa-->
                                            <button type="button" type="button" class="btn btn-outline-danger" data-toggle="modal"
                                                    onclick="deletePost(<?php echo $post->id;?>);">
                                                <i class="far fa-trash-alt mr-1"></i>
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
    <div class="modal fade bd-example-modal-lg" id="edit-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div>

    <!-- Modal create-->
    <div class="modal fade bd-example-modal-lg" id="create-post" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">

            </div>
        </div>
    </div>

<?php endblock() ?>

<?php startblock('script') ?>
    <script src="https://cdn.ckeditor.com/4.18.0/standard/ckeditor.js"></script>
    <?php include('views/admin/layout/admin_script.php')?>
    <?php include('views/admin/manage_posts/post_script.php') ?>

    <script>
        $(document).ready(function(){
            initDatatablePost($('#list-posts'));
        });
    </script>
<?php endblock() ?>
