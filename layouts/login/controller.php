<?php

// Kết nối CSDL
include_once "../../connect.php";

// Khởi tạo SESSION
session_start();
if (isset($_SESSION['username']) && isset($_SESSION['rule']) && isset($_SESSION['avatar'])){
unset($_SESSION['username']);
unset($_SESSION['rule']);
unset($_SESSION['avatar']);
}
if (isset($_SESSION['validate'])){
    unset($_SESSION['validate']);
}

// Dùng Isset kiểm tra
if (isset($_POST['login'])) {

    $username = addslashes($_POST['username']);
    $password = addslashes($_POST['password']);

    if ($username == "" || $password =="") {
        $_SESSION['validate'] = "Username hoặc password bạn không được để trống!";
        $_SESSION['username'] = $username;
        $_SESSION['password'] = $password;
    }else{
        $sql = "select * from NhanVien where AccountLogin = '$username' and Password = '$password' ";
        $query = mysqli_query($conn,$sql);
        $num_rows = mysqli_num_rows($query);
        if ($num_rows==0) {
            // echo "Tên đăng nhập hoặc mật khẩu không đúng !";
            $_SESSION['validate'] = "Tên đăng nhập hoặc mật khẩu không đúng !";
            $_SESSION['username'] = $username;
            $_SESSION['password'] = $password;
        }else{
            while($row = $query->fetch_assoc()) {
                $_SESSION['rule'] = $row["Rule"];
                $_SESSION['avatar'] = $row["Avatar"];
                //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
                $_SESSION['username'] = $username;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: ../../layouts/dashboard');
            }
        }
    }
}
?>