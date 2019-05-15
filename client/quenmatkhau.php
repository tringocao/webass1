<?php 

    function generateRandomString($length = 6) {
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $randomString = '';
        for ($i = 0; $i < $length; $i++) {
            $randomString .= $characters[rand(0, $charactersLength - 1)];
        }
        return $randomString;
    }

    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "ass2";
    $conn = new mysqli($servername, $username, $password, $dbname);

    require("../lib/vendor/autoload.php");
    require("../lib/vendor/phpmailer/phpmailer/src/PHPMailer.php");
    $mail = new PHPMailer\PHPMailer\PHPMailer();

    $mail->isSMTP();                            
    $mail->Host = 'smtp.gmail.com';            
    $mail->SMTPAuth = true;                     
    $mail->Username = 'tringocao1@gmail.com';          
    $mail->Password = 'ass2)3)456';
    $mail->SMTPSecure = 'tls';               
    $mail->Port = 587;
    // $mail->SMTPDebug = 2;
    $mail->IsHTML(true);
    $mail->setFrom('tringocao1@gmail.com', 'BKTravel');
    $mail->addReplyTo('tringocao1@gmail.com', 'BKTravel'); 

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    if (isset($_POST['continue'])) {
        $email = $_POST['username'];
        if (!is_null($email)) {
            $password = generateRandomString(6);
            $hashPassword = md5($password);
            $sql = "UPDATE dang_ky SET Mat_khau='$hashPassword' WHERE Email='$email'";
            if (!mysqli_query($conn, $sql)) {
                echo "Đã có lỗi xảy ra, vui lòng thử lại sau" . mysqli_error($conn);
                return;
            }
            
            $message = "Please use this password to login: " . $password;
            $mail->addAddress($email);
            $mail->Subject = 'Your Recovered Password';
            $mail->Body = $message;

            if(!$mail->send()) {
                echo 'Message could not be sent.';
                echo 'Mailer Error: ' . $mail->ErrorInfo;
            } else {
                echo '
                <html>
                    <br/><br/>
                    <p style="font-size:20px; font-style: italic; font-weight: bold;">
                        Mật khẩu mới đã được gửi đến địa chỉ:' . $email .'  <a style="font-style: italic; font-weight: bold;" href="dangnhap.php">Trở lại trang đăng nhập</a>
                    </p>
                </html>
            ';
            }
        }
    }
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đăng nhập</title>
        <link rel="stylesheet" href="css/style1.css">
        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../lib/owl-carousel-2/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/style_header.css">    
        <!-- <link rel="stylesheet" href="./css/style_3mien.css"> -->
        
    </head>
    <body>
        <script>COMMON_TEMPLATE.header();</script>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="title_login">QUÊN THÔNG TIN TÀI KHOẢN</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form action="quenmatkhau.php" method="POST">
                        <div class="form-group">
                            <label for="username">Nhập email hoặc tên người dùng: </label>
                            <input type="email" class="form-control" name="username" placeholder="maibaloc">
                        </div>
                        <button type="button" class="btn btn-primary" name="cancel" onclick="window.location.href='dangnhap.php'">Bỏ qua</button>
                        <button type="submit" class="btn btn-primary" name="continue">Tiếp tục</button>
                    </form>                
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <script>COMMON_TEMPLATE.footer();</script>
    </body>
</html>