<?php include 'views/admin/layout/master.php' ?>

<?php startblock('title') ?>
Fowler - Chi tiết đơn hàng
<?php endblock() ?>

<?php startblock('content') ?>
    <div class="content container-fluid">
        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col">
                    <h3 class="page-title">Chi tiết đơn hàng #3</h3>
                </div>

            </div>
        </div>
        <!-- /Page Header -->

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <p><b>Người mua: </b> <span>Khách hàng 1</span></p>
                                <p><b>Địa chỉ: </b> <span> Địa chỉ khách hàng</span></p>
                                <p><b>Số điện thoại: </b> <span>0123456789</span></p>
                            </div>
                            <div class="col-md-3">
                                <p><b>Mã đơn hàng: </b> <span>3</span></p>
                                <p><b>Ngày tạo: </b> <span>10/3/2021 9:15:03 PM</span></p>
                                <p><b>Trạng thái: </b> <span>Đang giao</span></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-hover table-center mb-0">
                                <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Tên sản phẩm</th>
                                    <th>Giá</th>
                                    <th>Số lượng</th>
                                    <th>Tổng tiền</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td>34</td>
                                    <td>

                                        <img class="rounded service-img mr-1"
                                             src="https://product.hstatic.net/1000284478/product/41_ck1-60280084_1_fdafcd5de1fa476c9e1565b9e5e4f1fe_master.jpg"
                                             alt="" />
                                        Sản phẩm 1
                                    </td>
                                    <td>340 400 vnđ</td>
                                    <td>1</td>
                                    <td>340 400 vnđ</td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                        <div class="row mt-5">
                            <div class="col-md-9"></div>
                            <div class="col-md-3">
                                <p><b>Thành tiền: </b> <span>340 000 vnđ</span></p>
                            </div>
                        </div>
                        <div class="mt-4">
                            <a href="/index_orders" class="btn btn-link">Quay lại</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    </div>
<?php endblock() ?>







