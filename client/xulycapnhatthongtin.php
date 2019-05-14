<?php
    $username_update = $_POST['username_update'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $phone = $_POST['phone'];
    $email_update = $_POST['email_update'];
    $Birthday_update = $_POST['Birthday_update'];
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
        // Update information here
        $sql_update = "UPDATE dang_ky SET Ho_va_ho_lot='$first_name', Ten='$last_name', So_dien_thoai='$phone',Email='$email_update',Ngay_sinh='$Birthday_update' WHERE Username='$username_update'";
        $sql_update_query = mysqli_query($conn, $sql_update);
        mysqli_close($conn);
        echo '
            <html>
                <br/><br/>
                <p style="font-size: 30px; font-style: italic; font-weight: bold;">
                    Đã cập nhật thông tin thành công: <a style="font-style: italic; font-weight: bold;" href="trangcanhan.php?username='. $username_update . '">Trở lại trang cá nhân</a>
                </p>
            </html>
        ';


        // echo $username_update;
        // echo '
        // <html>
        //     <br/><br/><br/>
        //     <h3>ĐÃ CẬP NHẬT THÔNG TIN THÀNH CÔNG</h3>
        //     <br/>
        //     <input type="button" onclick="window.location.href=\'trangcanhan.php?username='. $username_update . '\'" value="Trở lại trang cá nhân" style="font-size: 30px; font-family: Arial;">
        // </html>
        // ';
    }
?>