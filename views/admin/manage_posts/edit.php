
<style>
    form#edit-post-form {
        margin: 10px 40px;
    }
</style>
<h2 style="margin-top: 22px;margin-left: 58px;">Sửa bài viết</h2>
<form method="POST" action="" enctype="multipart/form-data" id="edit-post-form">
    <div class="form-group">
        <label>Danh mục</label>
        <input type="text" name="name" class="form-control"/>
    </div>
    <div class="form-group">
        <label>Tác giả</label>
        <input type="text" name="id_create" class="form-control id_create" value="<?php echo Auth::user()->getFullName()?>" readonly/>
    </div>
    <div class="form-group">
        <label>Cập nhật cuối bởi</label>
        <input type="text" name="id_lastUpdate" class="form-control id_lastUpdate" value="<?php echo Auth::user()->getFullName()?>" readonly/>
    </div>
    <div class="form-group">
        <label>Link</label>
        <input type="text" name="link" class="form-control link"/>
    </div>
    <div class="form-group">
        <label>Tiêu đề</label>
        <input type="text" name="title" class="form-control title" value="<?php echo $post->title ?>"/>
    </div>
    <div class="form-group">
        <label>Ảnh bìa</label>
        <input type="file" name="cover_img" class="form-control" id="cover_img"/>
    </div>
    <div class="form-group">
        <label>Nội dung</label>
        <textarea class="form-control content" name="content" id="content" style="min-height: 200px"
                  value="<?php echo $post->content ?>">
        </textarea>
    </div>
    <div class="form-group">
        <button class="btn btn-primary" type="button"
<!--                onclick="updatePost(this.parentElement.parentElement, --><?php //echo $post->id ?>//);"
        >
            Cập nhật
        </button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal"
                href="<?php echo Route::name('admin.posts')?>"> Hủy
        </button>
    </div>
</form>


<script>
    function initEditPostForm(){
        var form = $('#edit-post-form');
    }

    $(document).ready(function(){
        initEditPostForm();
        CKEDITOR.replace( 'content' );
    });
</script>





