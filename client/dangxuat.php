<?php
    session_start();
    session_destroy();

    setcookie("username", "", time()+ 2592000);
    setcookie("password", "", time()+ 2592000);

?>

<html>
    <br/><br/>
        <p style="font-size: 30px; font-style: italic; font-weight: bold;">
            Bạn đã đăng xuất thành công, click vào <a style="font-style: italic; font-weight: bold;" href="index1.php">Link sau đây</a> để đăng nhập lại
        </p>
</html>