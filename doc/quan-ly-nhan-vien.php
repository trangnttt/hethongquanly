<?php
include "../auth.php";
include "../includes/header.php";
include "../includes/sidebar.php";
require_once '../connect.php';
$status = '';
if (isset($_POST['update'])) {
  $id=$_POST['id'];
  $name =$_POST['name'];
  $sdt =$_POST['sdt'];
  $email =$_POST['email'];
  $diachi =$_POST['diachi'];
  $ngaysinh =$_POST['ngaysinh'];
  $chucvu =$_POST['chucvu'];
  $tinhtranghonnhan =$_POST['honnhan'];
  $bangcap =$_POST['bangcap'];
  $account =$_POST['account'];
  $password =$_POST['password'];
  $cccd =$_POST['cccd'];
  $ngaycap =$_POST['ngaycap'];
  $noicap =$_POST['noicap'];

  $update="UPDATE NhanVien SET FullName= '".$name."', SDT= '".$sdt."', Email= '".$email."', NgaySinh= '".$ngaysinh."',
  DiaChi='".$diachi."', ChucVu= '".$chucvu."', TinhTrangHonNhan= '".$tinhtranghonnhan."', BangCap= '".$bangcap."', AccountLogin= '".$account."',
  Password= '".$password."', CCCD= '".$cccd."', NgayCap= '".$ngaycap."', NoiCap= '".$noicap."' WHERE id= '".$id."'";

  mysqli_query($conn, $update) or die(mysqli_error($conn));
  $status = '<div id="alert-validate" class="alert" style="display: block;">
  Đã cập nhật dữ liệu thành công
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>';
  
}
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

                            <a class="btn btn-add btn-sm" href="form-add-nhan-vien.php" title="Thêm"><i
                                    class="fas fa-plus"></i>
                                Tạo mới nhân viên</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm print-file" type="button" title="In"
                                onclick="myApp.printTable()"><i class="fas fa-print"></i> In dữ liệu</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-excel btn-sm" href="" title="In"><i class="fas fa-file-excel"></i> Xuất
                                Excel</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-delete btn-sm pdf-file" type="button" title="In"
                                onclick="myFunction(this)"><i class="fas fa-file-pdf"></i> Xuất PDF</a>
                        </div>
                        <div class="col-sm-2">
                            <a class="btn btn-secondary btn-md" type="button" title="Xóa" onclick="myFunction(this)"><i
                                    class="fas fa-trash-alt"></i> Xóa tất cả </a>
                        </div>
                    </div>
                    <div style="overflow-x:auto;">
                        <table class="table table-hover table-bordered js-copytextarea" cellpadding="0" cellspacing="0"
                            border="0" id="sampleTable">
                            <thead>
                                <tr>
                                    <th width="10">Stt</th>
                                    <th>ID nhân viên</th>
                                    <th>Họ và tên</th>
                                    <th width="20">Ảnh thẻ</th>
                                    <th>Ngày sinh</th>
                                    <th>SĐT</th>
                                    <th>Chức vụ</th>
                                    <th>Tính năng</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                  $counter = 1;
                  $data = "SELECT * FROM NhanVien"; 
                  $result = $conn->query($data);                          
                  while($ser=mysqli_fetch_array($result)) { 
                ?>
                                <tr>
                                    <td><?php echo $counter;  $counter++; ?></td>
                                    <td><?php echo $ser['ID'];?></td>
                                    <td><?php echo $ser['FullName'];?></td>
                                    <td><img class='img-card-person' src='../images/<?php echo $ser['Avatar']; ?>'
                                            alt=''></td>
                                    <td><?php $date=date_create($ser['NgaySinh']); echo date_format($date,"d/m/Y"); ?>
                                    </td>
                                    <td><?php echo $ser['SDT'];?></td>
                                    <td><?php echo $ser['ChucVu'];?></td>
                                    <td>
                                        <a href="view-nhan-vien.php?id=<?php echo $ser['ID']; ?>"
                                            class="btn btn-info btn-sm edit"><i class='far fa-eye'></i></a>
                                        <button class='btn btn-save btn-sm edit' title='Sửa' id='show-emp'
                                            data-toggle='modal' data-target='#ModalEDit<?php echo $ser['ID'];?>'><i
                                                class='fas fa-edit'></i>
                                        </button>
                                        <button class='btn btn-md trash' title='Xóa' data-toggle='modal'
                                            data-target='#ModalDel<?php echo $ser['ID'];?>'><i
                                                class='fas fa-trash-alt'></i>
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
                                                                    <label class="control-label">Họ và tên</label>
                                                                    <input class="form-control" type="text" name="name"
                                                                        required value="<?php echo $ser['FullName'];?>">
                                                                </div>
                                                                <div class="form-group  col-md-6">
                                                                    <label class="control-label">Số điện thoại</label>
                                                                    <input class="form-control" type="number" name="sdt"
                                                                        required value="<?php echo $ser['SDT'];?>">
                                                                </div>
                                                                <div class="form-group col-md-6">
                                                                    <label class="control-label">Địa chỉ email</label>
                                                                    <input class="form-control" type="text" name="email"
                                                                        required value="<?php echo $ser['Email'];?>">
                                                                </div>
                                                                <div class="form-group col-md-12">
                                                                    <label class="control-label">Địa chỉ</label>
                                                                    <input class="form-control" type="text"
                                                                        name="diachi"
                                                                        value="<?php echo $ser['DiaChi'];?>">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="control-label">Ngày sinh</label>
                                                                    <input class="form-control" type="date"
                                                                        name="ngaysinh"
                                                                        value="<?php echo $ser['NgaySinh'];?>">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label for="exampleSelect1"
                                                                        class="control-label">Chức vụ</label>

                                                                    <select class="form-control" name="chucvu"
                                                                        id="exampleSelect1">
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
                                                                    <input class="form-control" type="text"
                                                                        name="honnhan"
                                                                        value="<?php echo $ser['TinhTrangHonNhan'];?>">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="control-label">Bằng Cấp</label>
                                                                    <input class="form-control" type="text"
                                                                        name="bangcap"
                                                                        value="<?php echo $ser['BangCap'];?>">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="control-label">Account</label>
                                                                    <input class="form-control" type="text"
                                                                        name="account"
                                                                        value="<?php echo $ser['AccountLogin'];?>">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="control-label">Password</label>
                                                                    <input class="form-control" type="text"
                                                                        name="password"
                                                                        value="<?php echo $ser['Password'];?>">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="control-label">CCCD</label>
                                                                    <input class="form-control" type="text" name="cccd"
                                                                        value="<?php echo $ser['CCCD'];?>">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="control-label">Ngày cấp</label>
                                                                    <input class="form-control" type="date"
                                                                        name="ngaycap"
                                                                        value="<?php echo $ser['NgayCap'];?>">
                                                                </div>
                                                                <div class="form-group col-md-4">
                                                                    <label class="control-label">Nơi cấp</label>
                                                                    <input class="form-control" type="text"
                                                                        name="noicap"
                                                                        value="<?php echo $ser['NoiCap'];?>">
                                                                </div>
                                                                <div class="modal-footer col-md-12">
                                                                    <button class="btn btn-save"
                                                                        name="update" type="submit">Lưu lại</button>
                                                                    <button type="reset" class="btn btn-cancel"
                                                                        id="btnReset" onclick="reSet()">Hủy bỏ</button>
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
                                                                <b><?php echo $ser['ID'];?></b> ???</p>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <a class="btn btn-delete" href="delete.php?id=<?php echo $ser['ID']; ?>&table=NhanVien">Xóa</a>
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
                </div>
            </div>
        </div>
    </div>

</main>

<?php include "../includes/footer.php" ?>