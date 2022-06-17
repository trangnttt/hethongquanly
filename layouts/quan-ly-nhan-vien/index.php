<?php
include "../../auth.php";
include "../../includes/header.php";
include "../../includes/sidebar.php";
require_once '../../connect.php';
include "controller.php";
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb side">
            <li class="breadcrumb-item active"><a href="#"><b>Danh sách nhân viên</b></a></li>
        </ul>
        <div id="clock"></div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <div class="tile-body">
                    <?php
              if(!empty($status)){
                echo $status;
              }
            ?>
                    <div class="row element-button">
                        <div class="col-sm-2">

                            <a class="btn btn-add btn-sm" href="add.php"><i class="fas fa-plus"></i>
                                Tạo mới nhân viên</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file" type="button" onclick="printTable()"><i
                                    class="fas fa-print"></i> In dữ liệu</a>
                        </div>
                        <div class="col-sm-2">
                            <button class="btn btn-excel btn-sm" onclick="excelTable('NhanVien')"><i
                                    class="fas fa-file-excel"></i>
                                Xuất
                                Excel</button>
                        </div>
                        <div class="col-sm-2">
                            <button class='btn btn-secondary btn-md' data-toggle='modal' data-target='#ModalDelAll'><i
                                    class='fas fa-trash-alt'></i> Xóa tất cả
                            </button>
                        </div>
                        <div class="col-sm-4">
                            <input type="text" id="searchTable" placeholder="Tìm kiếm theo tên..." title="Tìm kiếm">

                        </div>
                    </div>
                    <div style="overflow-x: auto;">
                    <table class="table table-hover table-bordered" cellpadding="0" cellspacing="0"
                        border="0" id="sampleTable" width="100%">
                        <thead>
                            <tr>
                                <th>Stt</th>
                                <th>ID nhân viên</th>
                                <th>Họ và tên</th>
                                <th class="noExl">Ảnh thẻ</th>
                                <th>Ngày sinh</th>
                                <th>SĐT</th>
                                <th>Chức vụ</th>
                                <th class="noExl">Tính năng</th>
                            </tr>
                        </thead>
                        <tbody id="table-tbody">
                            <?php
                  $counter = 1;
                  $data = "SELECT * FROM NhanVien ORDER BY FullName"; 
                  $result = $conn->query($data);                          
                  while($ser=mysqli_fetch_array($result)) { 
                ?>
                            <tr>
                                <td class="td-ite"><?php echo $counter;  $counter++; ?></td>
                                <td class="td-ite"><?php echo $ser['ID'];?></td>
                                <td class="td-ite"><?php echo $ser['FullName'];?></td>
                                <td class="noExl"><img class='img-card-person'
                                        src='../../images/img-anhthe/<?php echo $ser['Avatar']; ?>' alt=''>
                                </td>
                                <td class="td-ite">
                                    <?php $date=date_create($ser['NgaySinh']); echo date_format($date,"d/m/Y"); ?>
                                </td>
                                <td class="td-ite"><?php echo $ser['SDT'];?></td>
                                <td class="td-ite"><?php echo $ser['ChucVu'];?></td>
                                <td class="noExl">
                                    <a href="view.php?id=<?php echo $ser['ID']; ?>" class="btn btn-info btn-sm edit"><i
                                            class='far fa-eye'></i></a>
                                    <button class='btn btn-save btn-sm edit' title='Sửa' id='show-emp'
                                        data-toggle='modal' data-target='#ModalEDit<?php echo $ser['ID'];?>'><i
                                            class='fas fa-edit'></i>
                                    </button>
                                    <button class='btn btn-md trash' title='Xóa' data-toggle='modal'
                                        data-target='#ModalDel<?php echo $ser['ID'];?>'><i class='fas fa-trash-alt'></i>
                                    </button>

                                    <!--MODAL EDIT-->
                                    <div class="modal fade" id="ModalEDit<?php echo $ser['ID'];?>" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group  col-md-12">
                                                            <span class="thong-tin-thanh-toan">
                                                                <h5>Chỉnh sửa thông tin nhân viên cơ bản</h5>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <form id="formUpdate" action="" name="form" method="post">
                                                        <input name="id" type="hidden"
                                                            value="<?php echo $ser['ID'];?>" />
                                                        <div class="row">
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">ID nhân viên</label>
                                                                <input class="form-control" type="text" required
                                                                    value="<?php echo $ser['ID'];?>" disabled>
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Họ và tên <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="text" name="name"
                                                                    required value="<?php echo $ser['FullName'];?>">
                                                            </div>
                                                            <div class="form-group  col-md-6">
                                                                <label class="control-label">Số điện thoại <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="number" name="sdt"
                                                                    required value="<?php echo $ser['SDT'];?>">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Địa chỉ email <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="text" name="email"
                                                                    required value="<?php echo $ser['Email'];?>">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Địa chỉ <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="text" name="diachi"
                                                                    value="<?php echo $ser['DiaChi'];?>">
                                                            </div>
                                                            <div class="form-group col-md-6">
                                                                <label class="control-label">Ngày sinh <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="date" name="ngaysinh"
                                                                    required value="<?php echo $ser['NgaySinh'];?>">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label for="exampleSelect1" class="control-label">Chức
                                                                    vụ <sup class="sup-imp">*</sup></label>
                                                                <select class="form-control" name="chucvu"
                                                                    id="exampleSelect1" required>
                                                                    <option value="<?php echo $ser['ChucVu'];?>">
                                                                        <?php echo $ser['ChucVu'];?></option>
                                                                    <?php
                  $chucvuOld = $ser['ChucVu'];
                  $dataCV = "SELECT * FROM chucvu WHERE ChucVu NOT LIKE N'$chucvuOld'"; 
                  $resultCV = $conn->query($dataCV);                          
                  while($serCV=mysqli_fetch_array($resultCV)) { 
                ?>
                                                                    <option value="<?php echo $serCV['ChucVu'];?>">
                                                                        <?php echo $serCV['ChucVu'];?></option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Tình trạng hôn
                                                                    nhân</label>
                                                                <select name="honnhan" class="form-control"
                                                                    id="exampleSelect2">
                                                                    <option><?php echo $ser['TinhTrangHonNhan'];?>
                                                                    </option>
                                                                    <option value="Độc thân">Độc thân</option>
                                                                    <option value="Đã kết hôn">Đã kết hôn</option>
                                                                    <option value="Khác">Khác</option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Bằng Cấp</label>
                                                                <select name="bangcap" class="form-control">
                                                                    <option><?php echo $ser['BangCap'];?></option>
                                                                    <option value="Đại Học">Đại Học</option>
                                                                    <option value="Cao Đẳng">Cao Đẳng</option>
                                                                    <option value="Phổ Thông">Phổ Thông</option>
                                                                    <option value="Chưa tốt nghiệp">Chưa tốt nghiệp
                                                                    </option>
                                                                    <option value="Không bằng cấp">Không bằng cấp
                                                                    </option>
                                                                </select>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Account <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="text" name="account"
                                                                    value="<?php echo $ser['AccountLogin'];?>" required>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Password <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="text" name="password"
                                                                    value="<?php echo $ser['Password'];?>" required>
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">CCCD <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="number" name="cccd"
                                                                    required value="<?php echo $ser['CCCD'];?>">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Ngày cấp <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="date" name="ngaycap"
                                                                    required value="<?php echo $ser['NgayCap'];?>">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Nơi cấp <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="text" name="noicap"
                                                                    required value="<?php echo $ser['NoiCap'];?>">
                                                            </div>
                                                            <div class="form-group col-md-4">
                                                                <label class="control-label">Rule <sup
                                                                        class="sup-imp">*</sup></label>
                                                                <input class="form-control" type="number" name="rule"
                                                                    required value="<?php echo $ser['Rule'];?>">
                                                            </div>
                                                            <div class="modal-footer col-md-12">
                                                                <button class="btn btn-save" name="update"
                                                                    type="submit">Lưu lại</button>
                                                                <button class="btn btn-cancel" type="reset">Hủy
                                                                    bỏ</button>
                                                                <button type="reset" class="btn btn-delete"
                                                                    id="btnReset" onclick="reSet()">Đóng</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL EDIT-->

                                    <!--MODAL DELETE-->
                                    <div class="modal fade" id="ModalDel<?php echo $ser['ID'];?>" tabindex="-1"
                                        role="dialog" aria-hidden="true">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">

                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="form-group  col-md-12">
                                                            <span class="thong-tin-thanh-toan">
                                                                <h5>Xóa nhân viên</h5>
                                                            </span>
                                                        </div>
                                                    </div>
                                                    <div class="txt-delete">
                                                        <p>Bạn có chắc chắn muốn xóa nhân viên <br>
                                                            <b><?php echo $ser['FullName'];?></b> mã số
                                                            <b><?php echo $ser['ID'];?></b> ???
                                                        </p>
                                                    </div>
                                                </div>
                                                <div class="modal-footer">
                                                    <a class="btn btn-delete"
                                                        href="../../layouts/delete.php?id=<?php echo $ser['ID']; ?>&table=NhanVien">Xóa</a>
                                                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy
                                                        bỏ</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- END MODAL DELETE-->
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    </div>
                    <p id="table-notify"></p>    
                    <div id="pagination"></div>
                    <!-- MODAL DELETE ALL-->
                    <div class="modal fade" id="ModalDelAll" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered" role="document">
                            <div class="modal-content">

                                <div class="modal-body">
                                    <div class="row">
                                        <div class="form-group  col-md-12">
                                            <span class="thong-tin-thanh-toan">
                                                <h5>Xóa tất cả dữ liệu</h5>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="txt-delete">
                                        <p>Bạn có chắc chắn muốn xóa</p>
                                    </div>
                                </div>
                                <div class="modal-footer">
                                    <a class="btn btn-delete" href="delete.php?table=NhanVien">Xóa</a>
                                    <a class="btn btn-cancel" data-dismiss="modal" href="#">Hủy
                                        bỏ</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END MODAL DELETE ALL-->
                </div>
            </div>
        </div>
    </div>
</main>

<?php include "../../includes/footer.php" ?>