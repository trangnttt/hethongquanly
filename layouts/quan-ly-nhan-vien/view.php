<?php
include "../../auth.php";
include "../../includes/header.php";
include "../../includes/sidebar.php";
require_once '../../connect.php';
?>
  <main class="app-content">
    <div class="app-title">
      <ul class="app-breadcrumb breadcrumb side">
        <li class="breadcrumb-item active"><a href="#"><b>Thông tin nhân viên</b></a></li>
      </ul>
      <div id="clock"></div>
    </div>
    <div class="row">
    <?php
        $counter = 1;
        $data = "SELECT * FROM NhanVien WHERE id='".$_GET['id']."'"; 
        $result = $conn->query($data);                          
        while($ser=mysqli_fetch_array($result)) { 
    ?>  
        <div class="form-group col-md-6">
            <img src="../../images/img-anhthe/<?php echo $ser['Avatar'];?>" alt="" width="250px">
        </div>
        <div class="col-md-6">
            <div class="form-group">
                <label class="control-label">ID nhân viên</label>
                <input class="form-control" type="text" required value="<?php echo $_GET['id'] ?>" disabled>
            </div>
            <div class="form-group">
                <label class="control-label">Họ và tên</label>
                <input class="form-control" type="text" required value="<?php echo $ser['FullName'];?>" disabled>
            </div>
            <div class="form-group">
                <label class="control-label">Số điện thoại</label>
                <input class="form-control" type="number" required value="<?php echo $ser['SDT'];?>" disabled>
            </div>
        </div>
        <div class="form-group col-md-12">
            <label class="control-label">Địa chỉ</label>
            <input class="form-control" type="text" required value="<?php echo $ser['DiaChi'];?>" disabled>
        </div>
        <div class="form-group col-md-4">
            <label class="control-label">Email</label>
            <input class="form-control" type="text" required value="<?php echo $ser['Email'];?>" disabled>
        </div>
        <div class="form-group col-md-4">
            <label class="control-label">Ngày sinh</label>
            <input class="form-control" type="text" value="<?php $date=date_create($ser['NgaySinh']); echo date_format($date,"d/m/Y"); ?>" disabled>
        </div>
        <div class="form-group col-md-4">
            <label class="control-label">Chức vụ</label>
            <input class="form-control" type="text" value="<?php echo $ser['ChucVu'];?>" disabled>
        </div>
        <div class="form-group col-md-3">
            <label class="control-label">CCCD</label>
            <input class="form-control" type="text" value="<?php echo $ser['CCCD'];?>" disabled>
        </div>
        <div class="form-group col-md-3">
            <label class="control-label">Ngày cấp</label>
            <input class="form-control" type="text" value="<?php $date=date_create($ser['NgayCap']); echo date_format($date,"d/m/Y");?> " disabled>
        </div>
        <div class="form-group col-md-3">
            <label class="control-label">Nơi cấp</label>
            <input class="form-control" type="text" value="<?php echo $ser['NoiCap'];?>" disabled>
        </div>
        <div class="form-group col-md-3">
            <label class="control-label">Giới tính</label>
            <input class="form-control" type="text" value="<?php echo $ser['GioiTinh'];?>" disabled>
        </div>
        <div class="form-group col-md-3">
            <label class="control-label">Tình trạng hôn nhân</label>
            <input class="form-control" type="text" value="<?php echo $ser['TinhTrangHonNhan'];?>" disabled>
        </div>
        <div class="form-group col-md-3">
            <label class="control-label">Bằng cấp</label>
            <input class="form-control" type="text" value="<?php echo $ser['BangCap'];?>" disabled>
        </div>
        <div class="form-group col-md-3">
            <label class="control-label">Account</label>
            <input class="form-control" type="text" value="<?php echo $ser['AccountLogin'];?>" disabled>
        </div>
        <div class="form-group col-md-3">
            <label class="control-label">Password</label>
            <input class="form-control" type="text" value="<?php echo $ser['Password'];?>" disabled>
        </div>
        <div class="col-md-12">
        <!-- href="../../layouts/delete.php?id=<?php echo $ser['ID']; ?>&table=NhanVien"> -->
            <a href="../../layouts/quan-ly-nhan-vien" class="btn btn-info btn-sm"><i class='fas fa-reply-all'></i> Quay lại</a>
            <a href="../../layouts/quan-ly-noi-bo/add.php&id=<?php echo $ser['ID']; ?>&FullName=<?php echo $ser['FullName'];?>" 
            class="btn btn-primary btn-md"><i class='fa fa-warning'></i> Kỷ luật nội bộ</a>
        </div>
        
    <?php } ?>
    </div>
  </main>

<?php include "../../includes/footer.php" ?>