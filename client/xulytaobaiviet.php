<?php
    // Type here
    $ngaydang = $_GET['ngaydang'];
    $username = $_GET['username'];
    $tieude = $_POST['tieude'];
    $dangbaiviet = $_POST['dangbaiviet'];
    $noidungbaiviet = $_POST['noidungbaiviet'];
    ob_start();
    session_start();
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "ass2";
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    mysqli_set_charset($conn, 'UTF8');
    if($conn){
        $sql_thembaiviet = "INSERT INTO baiviet (title, Username, ngaydang, noidung, type, luot_xem) VALUES ('$tieude', '$username', NOW(), '$noidungbaiviet', '$dangbaiviet', '0')";
        $sql_thembaiviet_query = mysqli_query($conn, $sql_thembaiviet);
        mysqli_close($conn);
        echo '
            <html>
                <br/><br/>
                <p style="font-size: 30px; font-style: italic; font-weight: bold;">
                    Đã tạo bài viết thành công, click vào <a style="font-style: italic; font-weight: bold;" href="trangcanhan.php?username='. $username . '">Link sau đây</a> để trở lại trang cá nhân
                </p>
            </html>
        ';
    }
?>

<!-- SELECT fields FROM table ORDER BY id DESC LIMIT 1;-->