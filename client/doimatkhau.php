<?php
    $username = $_GET['username'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đổi mật khẩu</title>
        <link type="text/css" rel="stylesheet" href="css/style4.css">
        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../lib/owl-carousel-2/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/style_header.css">    
        <link rel="stylesheet" href="./css/style_3mien.css">
    </head>
    <body id="body">
        <script>COMMON_TEMPLATE.header();</script>
        
        <div class="container">
            <div class="row">
                <div class="col-2"></div>
                <div class="col-12">
                    <h1 class="title_password">BẢO MẬT TÀI KHOẢN</h1>
                </div>
                <div class="col-2"></div>
            </div>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-7">
                    <h5 id="sub_title">Mời bạn thay đổi mật khẩu: </h5>
                </div>
                <div class="col-sm-2"></div>
            </div>

            <div class="row">
                <div class="col-sm-3"></div>
                <div class="col-sm-6">
                    <!-- Type your code here -->
                    <form method="POST" action="xulydoimatkhau.php?username=<?php echo $username; ?>">
                        <div class="form-group">
                            <label for="password_old">Nhập mật khẩu cũ: </label>
                            <input type="password" class="form-control" id="password_old" name="password_old" placeholder="maibalocpassword">
                        </div>
                        <div class="form-group">
                            <label for="password1">Nhập mật khẩu mới: </label>
                            <input type="password" class="form-control" id="password1" name="password1" placeholder="maibalocpassword">
                        </div>
                        <div class="form-group">
                            <label for="password2">Nhập lại mật khẩu mới: </label>
                            <input type="password" class="form-control" id="password2" name="password2" placeholder="maibalocpassword">
                        </div>
                        <button type="submit" class="btn btn-primary">Xác nhận đổi mật khẩu</button>
                    </form>
                </div>
                <div class="col-sm-3"></div>
            </div>
        </div>
        <script>COMMON_TEMPLATE.footer();</script>
    </body>
</html>





























<!-- <!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đổi mật khẩu</title>
        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../lib/owl-carousel-2/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/style_header.css">    
        <link rel="stylesheet" href="./css/style_3mien.css">
    </head>
    <body>
        <script>COMMON_TEMPLATE.header();</script>
        <script>COMMON_TEMPLATE.footer();</script>
    </body>
</html> -->