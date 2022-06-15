<?php 
// sửa thông tin nhân viên
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
  $rule =$_POST['rule'];

  $update="UPDATE NhanVien SET FullName= '".$name."', SDT= '".$sdt."', Email= '".$email."', NgaySinh= '".$ngaysinh."',
  DiaChi='".$diachi."', ChucVu= '".$chucvu."', TinhTrangHonNhan= '".$tinhtranghonnhan."', BangCap= '".$bangcap."', AccountLogin= '".$account."',
  Password= '".$password."', CCCD= '".$cccd."', NgayCap= '".$ngaycap."', NoiCap= '".$noicap."', Rule= '".$rule."' WHERE id= '".$id."'";

  mysqli_query($conn, $update) or die(mysqli_error($conn));
  $status = '<div id="alert-validate" class="alert" style="display: block;">
  Đã cập nhật dữ liệu thành công
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>'; 
}
$alertCV = 0;
$alertNV = 0;
if (isset($_SESSION['validate'])){
    unset($_SESSION['validate']);
}

// thêm chức vụ
if (isset($_POST['addChucVu'])) {
  $chucvuNew=$_POST['chucvuNew'];
  $maxId = "SELECT * FROM chucvu ORDER BY id DESC LIMIT 1"; 
  $result = $conn->query($maxId);
  if (mysqli_num_rows($result) < 1) {
    $sql="INSERT INTO chucvu VALUES(1,'".$chucvuNew."')";
    $query = mysqli_query($conn,$sql);
          if(!$query)
          {
            echo "Query does not work.".mysqli_error($conn);die;
          }
          else
          {
            $alertCV = 1;
            $title= "Thêm chức vụ mới thành công";
          }
  } 
  else {
    while($ser=mysqli_fetch_array($result)) { 
        $id = $ser['id'] + 1;
        $chucvuOld = $ser['ChucVu'];
        if($chucvuOld !== $chucvuNew) {
          $sql="INSERT INTO chucvu VALUES($id,'".$chucvuNew."')";
          $query = mysqli_query($conn,$sql);
          if(!$query)
          {
            echo "Query does not work.".mysqli_error($conn);die;
          }
          else
          {
            $alertCV = 1;
            $title= "Thêm chức vụ mới thành công";
          }
        }
    
      }
  }                           
  
}

// xóa chức vụ
if (isset($_POST['delChucVu'])) {
    $array = $_POST['checkbox'];
    $listCheck = "'" . implode("','", $array) . "'";
    $query = "DELETE FROM chucvu WHERE ChucVu in ($listCheck)";
    $result = mysqli_query($conn,$query);
    if(!$result)
    {
        echo "Query does not work.".mysqli_error($conn);die;
    }
    else
    {
        $alertCV = 1;
        $title= "Xóa chức vụ thành công";
    }
}

// thêm nhân viên
if (isset($_POST['addNV'])) {
  $id=$_POST['id'];
  $name=$_POST['name'];
  $email=$_POST['email'];
  $diachi=$_POST['diachi'];
  $sdt=$_POST['sdt'];
  $ngaysinh=$_POST['ngaysinh'];
  $cccd=$_POST['cccd'];
  $ngaycap=$_POST['ngaycap'];
  $noicap=$_POST['noicap'];
  $gioitinh=$_POST['gioitinh'];  
  $chucvu=$_POST['chucvu'];
  $bangcap=$_POST['bangcap'];
  $honnhan=$_POST['honnhan'];
  $account=$_POST['account'];
  $password=$_POST['password'];
  $rule=$_POST['rule'];
  $hinhanh=$_FILES['ImageUpload']['name'];
  
  $selectImg = "SELECT * FROM NhanVien WHERE Avatar = '$hinhanh'"; 
  $checkImg = mysqli_num_rows(mysqli_query($conn,$selectImg));
    if($hinhanh && ($checkImg<0)) {
        $urlImg = '../images/'.$hinhanh;
        move_uploaded_file( $_FILES['ImageUpload']['tmp_name'], $urlImg);
    }
  $sql = "SELECT * FROM NhanVien WHERE ID = '".$id."'";
  $result = mysqli_query($conn,$sql);
  $num_rows = mysqli_num_rows($result);
  if ($num_rows < 1) {
    $sql="INSERT INTO nhanvien VALUES('".$id."','".$name."','".$email."','".$diachi."','".$sdt."','".$ngaysinh."'
    ,'".$cccd."','".$ngaycap."','".$noicap."','".$gioitinh."','".$chucvu."','".$bangcap."','".$honnhan."'
    ,'".$account."','".$password."','".$hinhanh."','".$rule."')";
    $query = mysqli_query($conn,$sql);
    if(!$query)
    {
      echo "Query does not work.".mysqli_error($conn);die;
    }
    else
    {
      $alertNV = 1;
      $title= "Thêm nhân viên mới thành công";
    }
  }
}
?>