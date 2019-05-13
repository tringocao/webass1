<?php
    date_default_timezone_set('Asia/Ho_Chi_Minh');
    $date = date('d/m/Y H:i:s', time());
    $date = strtotime($date);
    $username = $_GET['username'];
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
                    <h1 class="title_login">TẠO BÀI VIẾT</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-8">
                    <form method="POST" action="xulytaobaiviet.php?<?php echo "ngaydang=" . $date . "&username=" . $username; ?>">
                        <div class="form-group">
                            <label for="tieude">Nhập tiêu đề bài viết: </label>
                            <input type="text" class="form-control" id="tieude" name="tieude" placeholder="" required>
                        </div>
                        <div class="form-group">
                            <label for="dangbaiviet">Dạng bài viết: </label>
                            <select id="dangbaiviet" class="form-control" name="dangbaiviet" required>
                                <option selected>Bắc</option>
                                <option>Trung</option>
                                <option>Nam</option>
                                <option>Tổng hợp</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="noidungbaiviet">Nội dung bài viết: </label>
                            <textarea class="form-control" rows="15" id="noidungbaiviet" name="noidungbaiviet"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Thêm bài viết</button>
                    </form>                
                </div>
                <div class="col-sm-2"></div>
            </div>
        </div>
        <script>COMMON_TEMPLATE.footer();</script>
    </body>
</html>