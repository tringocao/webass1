<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Đăng ký</title>
        <link type="text/css" rel="stylesheet" href="css/style.css">
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

        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="register">ĐĂNG KÝ THÀNH VIÊN</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form method="POST" action="xulydangky.php">
                        <div class="form-group">
                            <label for="Fname">Nhập họ và họ lót của bạn: </label>
                            <input type="text" class="form-control" id="Fname" name="Fname" placeholder="Mai Bá" required>
                        </div>
                        <div class="form-group">
                            <label for="Lname">Nhập tên của bạn: </label>
                            <input type="text" class="form-control" id="Lname" name="Lname" placeholder="Lộc" required>
                        </div>
                        <div class="form-group">
                            <label for="phone_number">Nhập số điện thoại:</label>
                            <input type="text" class="form-control" id="phone_number" name="phone_number" placeholder="0984737098" required>
                        </div>
                        <div class="form-group">
                            <label for="nickname">Nhập tên người dùng: </label>
                            <input type="text" class="form-control" id="nickname" name="nickname" placeholder="maibaloc" required>
                        </div>
                        <div class="form-group">
                            <label for="Email">Nhập email: </label>
                            <input type="email" class="form-control" id="Email" name="Email"  placeholder="maibalocmail@yahoo.com" required>
                        </div>
                        <div class="form-group">
                            <label for="password1">Nhập mật khẩu: </label>
                            <input type="password" class="form-control" id="password" name="password"  placeholder="Nhập mật khẩu" required>
                        </div>
                        <div class="form-group">
                            <label for="sex">Giới tính:</label>
                            <select id="sex" class="form-control" name="sex" required>
                                <option selected>Chọn giới tính</option>
                                <option>Nam</option>
                                <option>Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="date">Ngày sinh: </label>
                            <input type="date" class="form-control" id="date" name="date" placeholder="" required>
                        </div>
                        <div class="form-check">
                            <input type="checkbox" class="form-check-input" id="remember_dk" name = "remember_dk" required>
                            <label class="form-check-label" for="remember">Bạn có chắc chắn muốn đăng ký</label>
                        </div>

                        

                        <button type="submit" class="btn btn-primary">Xác nhận đăng ký</button>
                    </form>                
                </div>
                <div class="col-sm-2"></div>
            </div>
       </div>
	    <script>COMMON_TEMPLATE.footer();</script>

    </body>
</html>