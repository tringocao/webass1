<?php
    // Processing here
    if (isset($_GET['username']))
        $username = $_GET['username'];
    else $username = "";
    $dbHost = "localhost";
    $dbUser = "root";
    $dbPass = "";
    $dbName = "ass2";
    $conn = mysqli_connect($dbHost, $dbUser, $dbPass, $dbName);
    mysqli_set_charset($conn, 'UTF8');
    $sql = "SELECT * FROM dang_ky WHERE Username='$username'";
    $query = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($query);
    $fname = $row["Ho_va_ho_lot"];
    $lname = $row["Ten"];
    $fullname =  $fname . " " . $lname;
    $gender = $row['Gioi_tinh'];
    // if ($gender == "Nu") $gender = "Nữ"; // Chỉnh để có thể dùng tiếng việt
    $birthday = $row['Ngay_sinh'];
    $phone = $row['So_dien_thoai'];
    echo "<script type='text/javascript'></script>";
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Trang cá nhân</title>
        <link rel="stylesheet" href="css/style2.css">
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
            <!-- Begin menu bar -->

            <!-- Begin body -->
            <!-- <nav class="navbar navbar-expand-sm bg-light" id="width_height_body"> -->
            <div class="row">
                <div class="col-md-3">
                    <div class="row" style="margin:auto;">
                        <a href="images/avatar.jpg" style="margin:auto;"><img src="images/avatar.jpg" alt="myavatar" width="150" height="150" class="rounded-corners" style="margin:auto;"></a>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <button type="submit" class="btn btn-primary">Cập nhật Avatar</button>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <p id="username"><?php echo $fullname; ?></p>
                        </div>
                        <div class="col-3">
                            <a href="capnhatthongtin.php<?php echo "?username=$username&fullname=$fullname&gender=$gender&birthday=$birthday&phone=$phone"; ?>"><img src="images/pencil.jpg" alt="Change Avatar" width="15" height="15"></a>
                        </div>
                    </div>
                    <div class="row"><div class="col-12"><p class="u_info">Username: <?php echo $username ?></p></div></div>
                    <div class="row"><div class="col-12"><p class="u_info">Giới tính: <?php echo $gender; ?></p></div></div>
                    <div class="row"><div class="col-12"><p class="u_info">Ngày sinh: <?php echo $birthday;?></p></div></div>
                    <div class="row"><div class="col-12"><p class="u_info">Số điện thoại: <?php echo $phone; ?></p></div></div>
                    <div class="row"><div class="col-12"><p class="u_info" style="font-size: 18px;">Số bài viết</p></div></div>
                    <div class="row"><div class="col-12"><p class="u_info" style="font-size: 20px;"><b>20</b></p></div></div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-9"><p class="sub_title" style="border-bottom: 2px solid blue;">BÀI VIẾT MỚI NHẤT</p></div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary">Tạo bài viết</button>
                        </div>
                    </div>
                    <div class="row">
                        <!-- Bài viết người dùng -->
                        <div class="col-sm-4">
                            <img src="images/hinhtamthoi.jpg" alt="Hình tạm thời" width="150" height="150">
                        </div>
                        <div class="col-sm-8">
                            <div class="row"><div class="col-12"> <h5>Bài viết về món ăn mới nhất</h5> </div></div>
                            <div class="row">
                                <div class="col-sm-3"><b>Người đăng:</b></div>
                                <div class="col-sm-3"><?php echo $fullname; ?></div>
                                <div class="col-sm-6">2014-26-04 20:30:00</div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                        Bát bún riêu ngon có sự góp mặt của bún trắng, gạch cua nâu hồng, cà chua đỏ, hành xanh, chút mắm tôm cho dậy mùi, hành phi thơm, cầu kỳ hơn có thể thêm đậu rán vàng, miếng giò tai rồi ăn kèm với các thức rau sống như kinh giới, xà lách, rau mùi.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <button type="button" class="btn btn-primary btn-sm">Xem thêm</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-primary btn-sm">Chỉnh sửa bài viết</button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                            <!-- Bài viết người dùng -->
                        <div class="col-sm-4">
                            <img src="images/hinhtamthoi.jpg" alt="Hình tạm thời" width="150" height="150">
                        </div>
                        <div class="col-sm-8">
                            <div class="row"><div class="col-12"> <h5>Bài viết về món ăn mới nhất thứ 2</h5> </div></div>
                            <div class="row">
                                <div class="col-sm-3"><b>Người đăng:</b></div>
                                <div class="col-sm-3"><?php echo $fullname; ?></div>
                                <div class="col-sm-6">2014-26-04 20:30:00</div>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                        Bát bún riêu ngon có sự góp mặt của bún trắng, gạch cua nâu hồng, cà chua đỏ, hành xanh, chút mắm tôm cho dậy mùi, hành phi thơm, cầu kỳ hơn có thể thêm đậu rán vàng, miếng giò tai rồi ăn kèm với các thức rau sống như kinh giới, xà lách, rau mùi.
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-3">
                                    <button type="button" class="btn btn-primary btn-sm">Xem thêm</button>
                                </div>
                                <div class="col-4">
                                    <button type="button" class="btn btn-primary btn-sm">Chỉnh sửa bài viết</button>
                               </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
            <!-- </nav> -->
            <!-- End body -->
        </div>
		<script>COMMON_TEMPLATE.footer();</script>

        <!-- Container -->
    </body>
</html>

