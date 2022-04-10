<?php require_once "Models/Category.php"; ?>
<div class="content container-fluid">
    <div class="row">
        <div class="col-xl-8 offset-xl-2">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col">
                        <h3 class="page-title" id="category-title">Thêm danh mục</h3>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="card">
                <div class="card-body">
                    <!-- Form -->
                    <form method="POST" action="" id="create-category-form">
                        <div class="form-group">
                            <label>Tên danh mục</label>
                            <input class="form-control name" data-val="true" id="name" name="name" type="text"/>
                            <span class="field-validation-valid name-validate"></span>
                        </div>
                        <div class="form-group">
                            <label>Danh mục gốc</label>
                            <input class="form-control parent_id" data-val="true" id="parent_id" name="parent_id" type="text"/>
                            <span class="field-validation-valid parent_id-validate"></span>
                        </div>
                        <div class="mt-4">
                            <button class="btn btn-dark" type="button" id="create-category-button"
                                    onclick="createCategory(this.parentElement.parentElement);">
                                Thêm
                            </button>
                            <button type="button" class="btn btn-light" data-dismiss="modal"
                                    href="<?php echo Route::name('admin.categories')?>"> Huỷ
                            </button>
                        </div>
                    </form>
                    <!-- Form -->
                </div>
            </div>
        </div>
    </div>
</div>

</div>
</div>

<script>
    function initEditUserForm(){
        var form = $('#edit-category-form');
    }

    $(document).ready(function(){
        initEditUserForm();
    });
</script>




