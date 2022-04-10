
        <style>
            form#create-post-form {
                margin: 10px 66px;
            }
        </style>
        <h2 style="margin-top: 22px;margin-left: 58px;">Tạo bài viết</h2>
        <form method="POST" action="" enctype="multipart/form-data" id="create-post-form">
            <div class="form-group">
                <label>Danh mục</label>
                <input type="text" name="name" class="form-control"/>
<!--                <select>-->
<!--                    --><?php //foreach ($post_cate as $category) { ?>
<!--                        <option>-->
<!--                            --><?php //echo $category->name ?>
<!--                        </option>-->
<!--                    --><?php //} ?>
<!--                </select>-->
            </div>
            <div class="form-group">
                <label>Tác giả</label>
                <input type="text" name="id_create" class="form-control id_create" value="<?php echo Auth::user()->getFullName()?>" readonly/>
            </div>
            <div class="form-group">
                <label>Tiêu đề</label>
                <input type="text" name="title" class="form-control title"/>
            </div>
            <div class="form-group">
                <label>Ảnh bìa</label>
                <input type="file" name="cover_img" class="form-control" id="cover_img"/>
                <!--        <img src="#" id="cover_img" style="display: none" width="100" height="100"/>-->
            </div>
            <div class="form-group">
                <label>Nội dung</label>
                <textarea class="form-control content" name="content" id="content" style="min-height: 200px">

                </textarea>
            </div>
            <div class="form-group">
                <button class="btn btn-dark" type="button" id="create-post-button"
                        onclick="createPost(this.parentElement.parentElement);">
                    Đăng bài
                </button>
                <button type="button" class="btn btn-light" data-dismiss="modal"
                        href="<?php echo Route::name('admin.categories')?>"> Huỷ
                </button>
            </div>
        </form>


        <script>
            function initCreatePostForm(){
                var form = $('#create-post-form');
            }

            $(document).ready(function(){
                initCreatePostForm();
                // CKeditor
                CKEDITOR.replace( 'content' );
            });
        </script>

