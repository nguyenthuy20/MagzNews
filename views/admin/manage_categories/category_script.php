<script>
// Datatable
    var table;
    function initDatatableCategory(tableElement, showAll=false, config={}){ // table jquery element
        Object.assign(datatableConfig,config);
        table = $('#list-categories').DataTable(datatableConfig);

        // đánh stt
        table.on('order.dt search.dt', function () {
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

        // search trong cột
        table.columns().every(function() {
            var that = this;
            $('input', this.header()).on('keyup change', function () {
                if (that.search() !== this.value) {
                    that.search(this.value).draw();
                }
            });
        });

        if(showAll){
            showAllRowsDatatable(table)
        }
        return table;
    }

// Show form edit category
    function showFormCategoryEdit(categoryID){
        $.ajax({
            url: "<?php echo Route::name('admin.users.showFormCategoryEdit');?>",
            type: "POST",
            data: {
                category_id: categoryID
            },
            // dataType: 'JSON',
            success: function (data) {
                if(data.message == undefined){
                    $('#edit-category').find('.modal-content').html(data);
                }
                // else{
                //     alert(data.message, "error");
                // }
            },
            error: function (e) {
                // console.log(e);
                // alert("Vui lòng thực hiện lại", "error");
            }
        });
    }

// Update category
    function updateCategory(form, categoryId){
        // var form = $('#edit-category-form');
        var form = $(form);
        console.log(form);
        var data = {
            'id': categoryId,
            'name' : form.find('.name').first().val(),
            'parent_id' : form.find('.parent_id').first().val(),
        };
        console.log(data);

        $.ajax({
            url: "<?php echo Route::name('admin.categories.update');?>",
            type: "POST",
            data: data,
            success: function (data) {
                alert("Đã cập nhật!", "success");
                setTimeout(function(){
                    location.reload();
                }, 1000);

            },
            error: function () {

            }
        });
    }

// Delete category
    function deleteCategory(categoryId){
        var runFunction = function(){
            $.ajax({
                url: "<?php echo Route::name('admin.categories.delete');?>",
                type: "POST",
                data: {
                    category_id: categoryId
                },
                dataType: 'JSON',
                success: function (data) {
                    if(data.code == 200){
                        alert(data.message, "success");
                        $('#category-row-'+categoryId).remove();
                        // location.reload();
                    }else{
                        alert(data.message, "error");
                    }
                },
                error: function (e) {
                    alert("Vui lòng thực hiện lại", "error");
                }
            });
        };
        confirm("Bạn muốn xóa chuyên mục này ?", runFunction);
    }

// Show form create category
    function showFormCreateCategory(){
    $.ajax({
        url: "<?php echo Route::name('admin.categories.showFormCreateCategory');?>",
        type: "POST",
        data: {

        },
        // dataType: 'JSON',
        success: function (data) {
            if(data.message == undefined){
                $('#create-category').find('.modal-content').html(data);
            }
            // else{
            //     alert(data.message, "error");
            // }
        },
        error: function (e) {
            // console.log(e);
            // alert("Vui lòng thực hiện lại", "error");
        }
    });

}

// Create category
function createCategory(form){
    var form = $(form);
    // var form = $('#create-category-form');
    // console.log(form);

    var data = {
        'name': form.find('.name').first().val(),
        'parent_id' : form.find('.parent_id').first().val(),
    };
    console.log(data);
    $.ajax({
        url: "<?php echo Route::name('admin.categories.create');?>",
        type: "POST",
        data: data,
        // dataType: 'JSON',
        success: function (data) {
            alert("Tạo chuyên mục thành công!", "success");
            setTimeout(function(){
                location.reload();
            }, 2000);
            // console.log(data);
        },
        error: function () {
        }
    });



}
</script>
