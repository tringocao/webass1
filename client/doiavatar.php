<?php
    $username = $_GET['username'];
    $name_of_image = basename($_FILES['avatar_img']['name']);
    $temp_pos = $_FILES['avatar_img']['tmp_name'];
    // $not_change_avatar = 0;
    list($width, $height, $type, $attr) = getimagesize($temp_pos);
    if (abs(($width - $height)/$width) >= 0.2){
        // $not_change_avatar = 1;
        echo "<script>alert('Avatar bạn chọn không phù hợp, vui lòng chọn avatar có chiều rộng và chiều cao gần bằng nhau')</script>";
        echo '
            <html>
                <br/><br/>
                <p style="font-size: 30px; font-style: italic; font-weight: bold;">
                    Avatar bạn chọn không phù hợp, click vào <a style="font-style: italic; font-weight: bold;" href="trangcanhan.php?username='. $username . '">ĐÂY</a> để trở lại trang cá nhân và chọn lại avatar
                </p>
            </html>
        ';
    }
    else{
        $des_pos = "images/" . $name_of_image;
        // $des_pos = "images/avatar_M.jpg";
        // list($width, $height, $type, $attr) = getimagesize($des_pos);
        
        if (file_exists($des_pos)){
            $idx = 1;
            $des_pos = "images/(" . $idx . ")" . $name_of_image;
            while(file_exists($des_pos)){
                $idx = $idx + 1;
                $des_pos = "images/(" . $idx . ")" . $name_of_image;
            }
        }


        move_uploaded_file($temp_pos, $des_pos);
        // $des_pos
        
        session_start();
        $dbHost = "localhost";
        $dbUser = "root";
        $dbPass = "";
        $dbName = "ass2";
        $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
        mysqli_set_charset($conn, 'UTF8');
        if ($conn){
            $sql_change_avatar = "UPDATE dang_ky SET Avatar='$des_pos' WHERE Username='$username'";
            $sql_change_avatar_query = mysqli_query($conn, $sql_change_avatar);
            mysqli_close($conn);
        }
        echo '
            <html>
                <br/><br/>
                <p style="font-size: 30px; font-style: italic; font-weight: bold;">
                    Đổi avatar thành công, click vào <a style="font-style: italic; font-weight: bold;" href="trangcanhan.php?username='. $username . '">ĐÂY</a> để trở lại trang cá nhân
                </p>
            </html>
        ';
    }

?>
