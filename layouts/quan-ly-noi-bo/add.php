<?php
include "../../auth.php";
include "../../includes/header.php";
include "../../includes/sidebar.php";
require_once '../../connect.php';
// include "controller.php";
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Quản lý nội bộ</li>
            <li class="breadcrumb-item"><a href="#">Tạo mới</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới danh sách nội bộ</h3>
                <div class="tile-body">
                    <form class="row">
                        <div class="form-group col-md-4">
                            <label class="control-label">Họ và tên</label>
                            <input class="form-control" type="text">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Ngày sinh</label>
                            <input class="form-control" type="date">
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Chức vụ</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>-- Chọn chức vụ --</option>
                                <option>Bán hàng</option>
                                <option>Tư vấn</option>
                                <option>Dịch vụ</option>
                                <option>Thu Ngân</option>
                                <option>Quản kho</option>
                                <option>Bảo trì</option>
                                <option>Kiểm hàng</option>
                                <option>Bảo vệ</option>
                                <option>Tạp vụ</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Nhập lý do</label>
                            <textarea class="form-control" rows="4"></textarea>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="exampleSelect1" class="control-label">Tình trạng</label>
                            <select class="form-control" id="exampleSelect1">
                                <option>-- Chọn tình trạng --</option>
                                <option>Khiển trách</option>
                                <option>Cảnh cáo</option>
                                <option>Hạ bậc lương</option>
                                <option>Sa thải</option>
                            </select>
                        </div>

                        <div class="tile-footer">
                        </div>
                </div>
                <button class="btn btn-save" name="addNV" type="submit">Lưu lại</button>
                <button class="btn btn-cancel" type="reset">Hủy bỏ</button>
                <a class="btn btn-info" href="../quan-ly-noi-bo"><i class="fas fa-reply-all"></i> Quay
                    lại</a>
            </div>
</main>



<?php include "../../includes/footer.php" ?>