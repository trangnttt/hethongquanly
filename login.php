<?php

// Kết nối CSDL
include_once "connect.php";

// Khởi tạo SESSION
session_start();
if (isset($_SESSION['username'])){
unset($_SESSION['username']);
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
            //tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
            $_SESSION['username'] = $username;
            // Thực thi hành động sau khi lưu thông tin vào session
            // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
            header('Location: ./index.php');
        }
    }
}
?>

<!DOCTYPE html>
<html lang="vi">

<head>
    <title>Login | BEANS HOUSE</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
    <link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link rel="stylesheet" type="text/css" href="css/util.css">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/sweetalert.min.css">
    <script src="js/sweetalert.min.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.2/jquery-confirm.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">
</head>

<body>
    <div class="limiter">
        <div class="container-login100">
            <div class="wrap-login100">
                <div class="login100-pic js-tilt" data-tilt>
                    <img src="images/hethong.jpg" alt="IMG">
                </div>
                <!--=====TIÊU ĐỀ======-->
                <form class="login100-form validate-form" method='POST' >
                    <span class="login100-form-title">
                        <b>Management system of the bean house</b>
                    </span>
                    <!--=====FORM INPUT TÀI KHOẢN VÀ PASSWORD======-->
                    <form>
                        <div class="wrap-input100 validate-input">
                            <input class="input100" type="text" placeholder="Username" name="username"
                                id="username" value="<?php if (isset($_SESSION['username'])) { echo $_SESSION['username']; } ?>">
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-user'></i>
                            </span>
                        </div>
                        <div class="wrap-input100 validate-input">
                            <input autocomplete="off" class="input100" type="password" placeholder="Password"
                                name="password" id="password-field" value="<?php if (isset($_SESSION['password'])) { echo $_SESSION['password']; } ?>">
                            <span toggle="#password-field" class="bx fa-fw bx-hide field-icon click-eye"></span>
                            <span class="focus-input100"></span>
                            <span class="symbol-input100">
                                <i class='bx bx-key'></i>
                            </span>
                        </div>
                        <?php
                            if (isset($_SESSION['validate'])) {
                                echo '<i class="validate">' .$_SESSION['validate']. '</i>';
                            }
                        ?>
                        <!--=====ĐĂNG NHẬP======-->
                        <div class="container-login100-form-btn">
                            <input class="btn-login" type='submit' name="login" value='Login'/>
                        </div>
                    </form>
                    <!--=====FOOTER======-->
                    <div class="text-center p-t-70 txt1">
                        Management system <i class="far fa-copyright" aria-hidden="true"></i>
                        <script type="text/javascript">document.write(new Date().getFullYear());</script> 
                             Code by Phong
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--Javascript-->
    <!-- <script src="./js/main.js"></script> -->
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>
    <script src="vendor/jquery/jquery-3.2.1.min.js"></script>
    <script src="vendor/bootstrap/js/popper.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="vendor/select2/select2.min.js"></script>
    <script type="text/javascript">
        //show - hide mật khẩu
        function myFunction() {
            var x = document.getElementById("myInput");
            if (x.type === "password") {
                x.type = "text"
            } else {
                x.type = "password";
            }
        }
        $(".click-eye").click(function () {
            $(this).toggleClass("bx-show bx-hide");
            var input = $($(this).attr("toggle"));
            if (input.attr("type") == "password") {
                input.attr("type", "text");
            } else {
                input.attr("type", "password");
            }
        });
    </script>
</body>

</html>