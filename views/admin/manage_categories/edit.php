<style>
</style>
<div class="content container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title" id="category-title">Chỉnh sửa chuyên mục</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="card">
                <div class="card-body">
                    <!-- Form -->
                    <form method="POST" action="" id="edit-category-form>
                        <div class="form-group">
                            <label>Mã danh mục</label>
                            <input class="form-control id" data-val="true" id="id" name="id" readonly="readonly" type="number" value="<?php echo $category->id ?>"/>
                            <label>Tên danh mục</label>
                            <input class="form-control name" data-val="true" id="name" value="<?php echo $category->name ?>" name="name" type="text"/>
                            <span class="field-validation-valid name-validate"></span>

                            <label>Danh mục gốc</label>
                            <input class="form-control id" data-val="true" id="id" name="id" readonly="readonly" type="number" value="<?php echo $category->parent_id ?>"/>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-primary" type="button"
                                    onclick="updateCategory(this.parentElement.parentElement, <?php echo $category->id ?>);">
                                Cập nhật
                            </button>
                            <button type="button" class="btn btn-secondary" data-dismiss="modal"
                                    href="<?php echo Route::name('admin.categories')?>"> Hủy
                            </button>
                        </div>
                    </form>
                    <!-- /Form -->
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>
<script>
    function initEditCategoryForm(){
        var form = $('#edit-category-form');
    }

    $(document).ready(function(){
        initEditCategoryForm();
    });

</script>










