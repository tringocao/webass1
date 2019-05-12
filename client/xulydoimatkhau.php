<?php
    $username = $_GET['username'];
    $old_password = $_POST['password_old'];
    $new_password1 = $_POST['password1'];
    $new_password2 = $_POST['password2'];
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
        $sql = "SELECT Mat_khau FROM dang_ky WHERE Username='$username'";
        $sql_query = mysqli_query($conn, $sql);
        $sql_fetch = mysqli_fetch_assoc($sql_query);
        $pass = base64_decode($sql_fetch['Mat_khau']);
        if ($pass == $old_password && $new_password1 == $new_password2){
            $new_password1 = base64_encode($new_password1);
            $sql_change_pass = "UPDATE dang_ky SET Mat_khau='$new_password1' WHERE Username='$username'";
            $sql_chang_pass_query = mysqli_query($conn, $sql_change_pass);
            mysqli_close($conn);
            echo '
                <html>
                    <br/><br/>
                    <p style="font-size: 30px; font-style: italic; font-weight: bold;">
                        Đã thay đổi mật khẩu thành công: <a style="font-style: italic; font-weight: bold;" href="trangcanhan.php?username='. $username . '">Trở lại trang cá nhân</a>
                    </p>
                </html>
            ';
        }
        else{
            mysqli_close($conn);
            echo '
                <html>
                    <br/><br/>
                    <p style="font-size: 30px; font-style: italic; font-weight: bold;">
                        Thay đổi mật khẩu không thành công, thực hiện lại thay đổi mật khẩu: <a style="font-style: italic; font-weight: bold;" href="doimatkhau.php?username='. $username . '">Quay lại đổi mật khẩu</a>
                    </p>
                    <br/>
                    <p style="font-size: 30px; font-style: italic; font-weight: bold;">
                        Trở lại trang cá nhân: <a style="font-style: italic; font-weight: bold;" href="trangcanhan.php?username='. $username . '">Trở về trang cá nhân</a>
                    </p>
                </html>
            ';
        }

    }
?>