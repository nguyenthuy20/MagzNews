<script>
    var datatableConfig = {
        // paging: false,
        // searching: false
        // retrieve: true,

        bSort: false,
        responsive: !0,
        language  : {
            'sProcessing'  : 'Đang xử lý',
            'sLengthMenu'  : 'Xem _MENU_ bản ghi',
            'sZeroRecords' : 'Không tìm thấy dòng nào phù hợp',
            'sInfo'        : 'Đang xem _START_ đến _END_ trong tổng số _TOTAL_ bản ghi',
            'sInfoEmpty'   : 'Đang xem 0 đến 0 trong tổng số 0 bản ghi',
            'sInfoFiltered': '(được lọc từ _MAX_ bản ghi)',
            'sInfoPostFix' : '',
            'sSearch'      : 'Tìm kiếm',
            'sUrl'         : '',
            'oPaginate'    : {
                'sFirst'   : 'Đầu',
                'sPrevious': 'Trước',
                'sNext'    : 'Tiếp',
                'sLast'    : 'Cuối',

            },
            'select': {
                rows: {
                    _: 'Đã chọn %d bản ghi',
                    1: 'Đã chọn 1 bản ghi',
                },
            },
        },

        aLengthMenu: [
            [25, 50, 100, 200, -1],
            [5, 50, 100, 200, 'All'],
        ],

        iDisplayLength: 10,
    };

    function initDatatablePost(tableElement, showAll=false, config={}){ // table jquery element
        Object.assign(datatableConfig,config);
        var table = $('#list-posts').DataTable(datatableConfig);

        // đánh stt
        table.on('order.dt search.dt', function () {
            table.column(0, {search: 'applied', order: 'applied'}).nodes().each(function (cell, i) {
                cell.innerHTML = i + 1;
            });
        }).draw();

        // search trong cột
        table.columns().every(function () {
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

    // Show form create post
    function showFormCreatePost(){
        $.ajax({
            url: "<?php echo Route::name('admin.posts.showFormCreate');?>",
            type: "POST",
            data: {

            },
            // dataType: 'JSON',
            success: function (data) {
                if(data.message == undefined){
                    $('#create-post').find('.modal-content').html(data);
                }
            },
            error: function (e) {

            }
        });

    }

    // Create category
    function createPost(form){
        var form = $(form);
        // var form = $('#create-category-form');
        // console.log(form);

        var data = {
            'title': form.find('.title').first().val(),
            'content' : CKEDITOR.instances['content'].getData(),
        };

        console.log(data);
        $.ajax({
            url: "<?php echo Route::name('admin.posts.create');?>",
            type: "POST",
            data: data,
            // dataType: 'JSON',
            success: function (data) {
                // alert("Tạo chuyên mục thành công!", "success");
                // setTimeout(function(){
                //     location.reload();
                // }, 2000);
                // console.log(data);
            },
            error: function () {
            }
        });
    }
// delete post
    function deletePost(postId){
        var runFunction = function(){
            $.ajax({
                url: "<?php echo Route::name('admin.posts.delete');?>",
                type: "POST",
                data: {
                    post_id: postId
                },
                dataType: 'JSON',
                success: function (data) {
                    if(data.code == 200){
                        alert(data.message, "success");
                        $('#post-row-'+postId).remove();
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
        confirm("Bạn muốn xóa bài viết này ?", runFunction);
    }

// Show form edit post
    function showFormPostEdit(postID){
        $.ajax({
            url: "<?php echo Route::name('admin.posts.showFormEdit');?>",
            type: "POST",
            data: {
                post_id: postID
            },
            // dataType: 'JSON',
            success: function (data) {
                if(data.message == undefined){
                    $('#edit-post').find('.modal-content').html(data);
                }
            },
            error: function (e) {
            }
        });
    }

// Update category
    function updatePost(form, postId){
        var form = $(form);
        console.log(form);
        var data = {
            'id': postId,
            'title': form.find('.title').first().val(),
            'content' : CKEDITOR.instances['content'].getData(),
        };
        console.log(data);

        $.ajax({
            url: "<?php echo Route::name('admin.posts.update');?>",
            type: "POST",
            data: data,
            success: function (data) {
                // alert("Đã cập nhật!", "success");
                // setTimeout(function(){
                //     location.reload();
                // }, 1000);

            },
            error: function () {

            }
        });
    }


</script>