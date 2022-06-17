<?php
include "../../auth.php";
include "../../includes/header.php";
include "../../includes/sidebar.php";
require_once '../../connect.php';
include "controller.php";
?>
<main class="app-content">
    <div class="app-title">
        <ul class="app-breadcrumb breadcrumb">
            <li class="breadcrumb-item">Danh sách nhân viên</li>
            <li class="breadcrumb-item"><a href="#">Thêm nhân viên</a></li>
        </ul>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="tile">
                <h3 class="tile-title">Tạo mới nhân viên</h3>
                <div class="tile-body">
                    <?php 
                  if($alertCV == 1 || $alertNV == 1) {
                  ?>
                    <div id="alert-validate" class="alert" style="display:block;">
                        <?php echo $title; ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <?php } ?>

                    <div class="row element-button">
                        <div class="col-sm-2">
                            <a class="btn btn-add btn-sm" id='show-emp' data-toggle="modal"
                                data-target="#modalAddChucVu"><b><i class="fas fa-folder-plus"></i> Tạo chức vụ
                                    mới</b></a>
                        </div>

                        <!-- MODAL thêm chức vụ-->
                        <div class="modal fade" id="modalAddChucVu" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group  col-md-12">
                                                <span class="thong-tin-thanh-toan">
                                                    <h5>Tạo chức vụ mới</h5>
                                                </span>
                                            </div>
                                        </div>
                                        <form id="formAddChucVu" action="" method="post">
                                            <div class="form-group col-md-12">
                                                <label class="control-label">Nhập tên chức vụ mới</label>
                                                <input name="chucvuNew" class="form-control" type="text" required>
                                            </div>
                                            <div class="modal-footer col-md-12">
                                                <button class="btn btn-save" id="btnSave" name="addChucVu"
                                                    type="submit">Lưu lại</button>
                                                <button type="reset" class="btn btn-cancel" id="btnReset"
                                                    onclick="reSet()">Hủy bỏ</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end MODAL thêm chức vụ-->

                        <div class="col-sm-2">
                            <button class='btn btn-md trash' data-toggle='modal' data-target='#modalDeleteChucVu'><i
                                    class='fas fa-trash-alt'></i> Xóa chức vụ
                            </button>
                        </div>


                        <!-- MODAL xóa chức vụ-->
                        <div class="modal fade" id="modalDeleteChucVu" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-body">
                                        <div class="row">
                                            <div class="form-group  col-md-12">
                                                <span class="thong-tin-thanh-toan">
                                                    <h5>Chọn chức vụ cần xóa</h5>
                                                </span>
                                            </div>
                                        </div>
                                        <form id="formDeleteChucVu" action="" method="post">
                                            <div class="row">
                                                <div class="form-group col-md-12">
                                                    <input type="checkbox" id="checkAll" name="checkAll"
                                                        value="Check All">
                                                    <label for="checkAll"><b>Check All</b></label>
                                                </div>
                                                <?php
                  $dataCV = "SELECT * FROM chucvu"; 
                  $resultCV = $conn->query($dataCV);                          
                  while($serCV=mysqli_fetch_array($resultCV)) { 
                ?>
                                                <div class="form-group col-md-4">
                                                    <input class="messageCheckbox" type="checkbox" id="<?php echo $serCV['ChucVu'];?>"
                                                        name="checkbox[]" value="<?php echo $serCV['ChucVu'];?>">
                                                    <label for="<?php echo $serCV['ChucVu'];?>">
                                                        <?php echo $serCV['ChucVu'];?></label>
                                                </div>
                                                <?php } ?>
                                            </div>
                                            <?php
                            if (isset($_SESSION['validate'])) {
                                echo '<i class="validate">' .$_SESSION['validate']. '</i>';
                            }
                        ?>
                                            <div class="modal-footer col-md-12">
                                                <button type="submit" class="btn btn-delete"
                                                    name="delChucVu">Xóa</button>
                                                <button type="reset" class="btn btn-cancel" id="btnReset"
                                                    onclick="reSet()">Hủy bỏ</button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- end MODAL xóa chức vụ-->
                    </div>
                    <form id="formAdd" class="row" action="" name="form" method="post" enctype="multipart/form-data">
                        <div class="form-group col-md-4">
                            <label class="control-label">ID nhân viên</label>
                            <input class="form-control" name="id" type="text" value="<?php $digits = 4;
                echo 'NV' .rand(pow(10, $digits-1), pow(10, $digits)-1); ?>">
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Họ và tên <sup class="sup-imp">*</sup></label>
                            <input name="name" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ email <sup class="sup-imp">*</sup></label>
                            <input name="email" class="form-control" type="email" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Địa chỉ thường trú <sup class="sup-imp">*</sup></label>
                            <input name="diachi" class="form-control" type="text" required>
                        </div>
                        <div class="form-group  col-md-4">
                            <label class="control-label">Số điện thoại <sup class="sup-imp">*</sup></label>
                            <input type="tel" class="form-control" name="sdt" pattern="[0-9]{4}[0-9]{2}[0-9]{4}"
                                required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Ngày sinh <sup class="sup-imp">*</sup></label>
                            <input name="ngaysinh" class="form-control" type="date" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Số CCCD <sup class="sup-imp">*</sup></label>
                            <input class="form-control" name="cccd" type="number" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Ngày cấp <sup class="sup-imp">*</sup></label>
                            <input name="ngaycap" class="form-control" type="date" required>
                        </div>
                        <div class="form-group col-md-4">
                            <label class="control-label">Nơi cấp <sup class="sup-imp">*</sup></label>
                            <input name="noicap" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Ngày vào làm <sup class="sup-imp">*</sup></label>
                            <input name="ngayvaolam" class="form-control" type="date" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Giới tính <sup class="sup-imp">*</sup></label>
                            <select name="gioitinh" class="form-control">
                                <option>-- Chọn giới tính --</option>
                                <option value="Nam">Nam</option>
                                <option value="Nữ">Nữ</option>
                            </select>
                        </div>

                        <div class="form-group  col-md-3">
                            <label for="exampleSelect1" class="control-label">Chức vụ <sup class="sup-imp">*</sup></label>
                            <select name="chucvu" class="form-control" required>
                                <option>-- Chọn chức vụ --</option>
                                <?php
                    $dataCV = "SELECT * FROM chucvu"; 
                    $resultCV = $conn->query($dataCV);                          
                    while($serCV=mysqli_fetch_array($resultCV)) { 
                  ?>
                                <option value="<?php echo $serCV['ChucVu'];?>"><?php echo $serCV['ChucVu'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Bằng cấp <sup class="sup-imp">*</sup></label>
                            <select name="bangcap" class="form-control">
                                <option>-- Chọn bằng cấp --</option>
                                <option value="Đại Học">Đại Học</option>
                                <option value="Cao Đẳng">Cao Đẳng</option>
                                <option value="Phổ Thông">Phổ Thông</option>
                                <option value="Chưa tốt nghiệp">Chưa tốt nghiệp</option>
                                <option value="Không bằng cấp">Không bằng cấp</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Tình trạng hôn nhân <sup class="sup-imp">*</sup></label>
                            <select name="honnhan" class="form-control" id="exampleSelect2">
                                <option>-- Chọn tình trạng hôn nhân --</option>
                                <option value="Độc thân">Độc thân</option>
                                <option value="Đã kết hôn">Đã kết hôn</option>
                                <option value="Khác">Khác</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Account <sup class="sup-imp">*</sup></label>
                            <input name="account" class="form-control" type="text" required>
                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Password <sup class="sup-imp">*</sup></label>
                            <div class="box-password">
                                <input autocomplete="off" class="input100 form-control" type="password"
                                    placeholder="Password" name="password" id="password-field" min="4" max="8" value=""
                                    required>
                                <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
                            </div>

                        </div>
                        <div class="form-group col-md-3">
                            <label class="control-label">Rule <sup class="sup-imp">*</sup></label>
                            <select name="rule" class="form-control" id="exampleSelect3" required>
                                <option value="0">0</option>
                                <option value="1">1</option>
                            </select>
                        </div>
                        <div class="form-group col-md-12">
                            <label class="control-label">Ảnh 3x4 nhân viên <sup class="sup-imp">*</sup></label>
                            <div id="myfileupload">
                                <input type="file" id="uploadfile" name="ImageUpload" onchange="readURL(this);"
                                    required />
                            </div>
                            <div id="thumbbox">
                                <img height="300" width="300" alt="Thumb image" id="thumbimage" style="display: none" />
                                <a class="removeimg" href="javascript:"></a>
                            </div>
                            <div id="boxchoice">
                                <a href="javascript:" class="Choicefile"><i class='bx bx-upload'></i></a>
                                <p style="clear:both"></p>
                            </div>
                        </div>
                </div>
                <button class="btn btn-save" name="addNV" type="submit">Lưu lại</button>
                <button class="btn btn-cancel" type="reset">Hủy bỏ</button>
                <a class="btn btn-info" href="../quan-ly-nhan-vien"><i class="fas fa-reply-all"></i> Quay
                    lại</a>
            </div>
        </div>
    </div>
</main>

<?php include "../../includes/footer.php" ?>