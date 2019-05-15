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
                    <h1 class="title_login">ĐĂNG NHẬP TÀI KHOẢN</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form method="POST" action="xulydangnhap.php">
                        <div class="form-group">
                            <label for="username">Nhập tên người dùng: </label>
                            <input type="text" class="form-control" id="username" name="username" placeholder="maibaloc" required>
                        </div>
                        <div class="form-group">
                            <label for="pass">Nhập mật khẩu: </label>
                            <input type="password" class="form-control" id="pass" name="pass" placeholder="maibalocpassword" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember">
                            <label class="form-check-label" for="remember">Ghi nhớ tên đăng nhập</label>
                        </div>
                        <button type="submit" class="btn btn-primary">Đăng nhập</button>
                        <button type="button" name="forgot_password" class="btn btn-primary" onclick="window.location.href='quenmatkhau.php'">Quên mật khẩu</button>
                    </form>                
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <script>COMMON_TEMPLATE.footer();</script>
    </body>
</html>