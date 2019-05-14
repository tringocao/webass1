<?php
    $firstname = $_POST['Fname'];
    $lastname = $_POST['Lname'];
    $phone_number = $_POST['phone_number'];
    $nickname = $_POST['nickname'];
    $Email = $_POST['Email'];
    $password = md5($_POST['password']); // Ma hoa luu vao CSDL
    $sex = $_POST['sex'];
    $date = $_POST['date'];
    $image = ($sex == "Nam")?"images/avatar_M.jpg":"images/avatar_F.jpg";
    ob_start();
    session_start();
    // Connect to Database
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "ass2";
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    mysqli_set_charset($conn, 'UTF8');
    if ($conn){
        // $setLang = mysqli_query($conn, "SET NAME 'utf-8'");
        // Connect Successfully.
        // Checking if this nickname was registered for another account
        // If email or nickname were used for another account => Cannot register

        $sql_checknickname = "SELECT * FROM dang_ky WHERE Username='$nickname'";
        $query_checker1 = mysqli_query($conn, $sql_checknickname);
        $num_of_row1 = mysqli_num_rows($query_checker1);
        $sql_checkemail = "SELECT * FROM dang_ky WHERE Email='$Email'";
        $query_checker2 = mysqli_query($conn, $sql_checkemail);
        $num_of_row2 = mysqli_num_rows($query_checker1);

        if ($num_of_row1 > 0 || $num_of_row2 > 0){
            echo "<script>alert(\"Tên người dùng hoặc nickname đã được sử dụng\");</script>";
            header("Location: dangky.php");
        }
        else{
            // Thêm vào bảng đăng ký
            
            $sql_add_to_dangky="INSERT INTO dang_ky(Username, Ho_va_ho_lot, Ten, Mat_khau, So_dien_thoai, Email, Gioi_tinh, Ngay_sinh, Avatar) VALUES ('$nickname','$firstname','$lastname','$password','$phone_number','$Email','$sex', '$date', '$image')";
            $query_add_to_dangky = mysqli_query($conn, $sql_add_to_dangky);
            // Thêm vào bảng đăng nhập
            // $sql_add_to_dangnhap="INSERT INTO dang_nhap (Username, Password, Email) VALUES ('$nickname', '$password1', '$Email')";
            // $query_add_to_dangnhap = mysqli_query($conn, $sql_add_to_dangnhap);
            // Thêm vào bảng thông tin cá nhân
            // $sql_add_to_ttcn="INSERT INTO thong_tin_ca_nhan (Username, Ho_ho_lot, Ten, Gioi_tinh, So_dien_thoai, Email, Birthday, So_bai_viet) VALUES ('$nickname','$firstname','$lastname','$sex','$phone_number','$Email','$date','')";
            // $query_add_to_ttcn = mysqli_query($conn, $sql_add_to_ttcn);
            mysqli_close($conn);
        }
    }
?>
<html>
    <br/><br/>
    <p style="font-size: 30px; font-style: italic; font-weight: bold;">
        Đăng ký tài khoản thành công, click vào <a style="font-style: italic; font-weight: bold;" href="dangnhap.php">Link sau đây</a> để đăng nhập
    </p>
</html>