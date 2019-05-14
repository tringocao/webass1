<?php
    // Kiểm tra trên session xem có tài khoản nào đăng nhập vào trước đó hay không?
    session_start();
    if (isset($_SESSION['username'])){
        $username = $_SESSION['username'];
        echo $username;
        $goto = "Location: trangcanhan.php?username=$username";
        header($goto);
    }
    else{
        header("Location: dangnhap.php");
    }
?>