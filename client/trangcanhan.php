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
    $image = $row['Avatar'];
    // if ($gender == "Nu") $gender = "Nữ"; // Chỉnh để có thể dùng tiếng việt
    $birthday = $row['Ngay_sinh'];
    $phone = $row['So_dien_thoai'];
    $sql_sobaiviet = "SELECT * FROM baiviet WHERE Username='$username'";
    $sql_sobaiviet_query = mysqli_query($conn, $sql_sobaiviet);
    $sobaiviet = mysqli_num_rows($sql_sobaiviet_query);
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
		  	<?php include ("headeer/header.php")?>

		<script>COMMON_TEMPLATE.header();</script>
        <div class="container">
            <!-- Begin menu bar -->

            <!-- Begin body -->
            <!-- <nav class="navbar navbar-expand-sm bg-light" id="width_height_body"> -->
            <div class="row">
                <div class="col-md-3">
                    <div class="row" style="margin:auto;">
                        <a href="<?php echo $image; ?>" style="margin:auto;"><img src="<?php echo $image; ?>" alt="myavatar" width="150" height="150" class="rounded-corners" style="margin:auto;"></a>
                    </div>
                    <br>
                    <div class="row justify-content-center">
                        <!-- <button type="button" class="btn btn-primary">Cập nhật Avatar</button> -->
                        <div class="col-12" >
                            <form method="POST" action="doiavatar.php?username=<?php echo $username; ?>" enctype="multipart/form-data">
                                <div class="row">
                                    <div class="col-12">
                                        <input type="file" id="avatar_img" name="avatar_img" />
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-2"></div>
                                    <div class="col-8">
                                        <!-- <button type="submit" class="btn btn-primary btn-block">Cập nhật Avatar</button> -->
                                        <input type="submit" class="btn btn-primary btn-block" value="Cập nhật avatar"/>
                                    </div>
                                    <div class="col-2"></div>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-9">
                            <p id="username"><?php echo $fullname; ?></p>
                        </div>
                        <div class="col-3">
                            <a href="capnhatthongtin.php<?php echo "?username=$username&fullname=$fullname&gender=$gender&birthday=$birthday&phone=$phone&avatar=$image&sobaiviet=$sobaiviet"; ?>"><img src="images/pencil.jpg" alt="Change Avatar" width="15" height="15"></a>
                        </div>
                    </div>
                    <div class="row"><div class="col-12"><p class="u_info">Username: <?php echo $username ?></p></div></div>
                    <div class="row"><div class="col-12"><p class="u_info">Giới tính: <?php echo $gender; ?></p></div></div>
                    <div class="row"><div class="col-12"><p class="u_info">Ngày sinh: <?php echo $birthday;?></p></div></div>
                    <div class="row"><div class="col-12"><p class="u_info">Số điện thoại: <?php echo $phone; ?></p></div></div>
                    <div class="row"><div class="col-12"><p class="u_info" style="font-size: 18px;">Số bài viết</p></div></div>
                    <div class="row"><div class="col-12"><p class="u_info" style="font-size: 20px;"><b><?php echo $sobaiviet; ?></b></p></div></div>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-sm-6"><p class="sub_title" style="border-bottom: 2px solid blue;">BÀI VIẾT MỚI NHẤT</p></div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-primary btn-block" onclick="window.location.href='thembaiviet.php?username=<?php echo $username; ?>'" >Tạo bài viết</button>
                        </div>
                        <div class="col-sm-3">
                            <button type="button" class="btn btn-danger btn-block" onclick="window.location.href='dangxuat.php'">Đăng xuất</button>
                        </div>
                    </div>
                    <?php
                        $sql = "SELECT * FROM baiviet WHERE Username='$username' ORDER BY ID DESC LIMIT 2";
                        $sql_query = mysqli_query($conn, $sql);
                        $num_row = mysqli_num_rows($sql_query);
                        if ($num_row > 0){
                            $row1 = mysqli_fetch_assoc($sql_query);
                            $ngaydang = $row1["ngaydang"];
                            $id_baiviet1 = $row1['ID'];
                            $sql_anhbaiviet1 = "SELECT * FROM img WHERE idbaiviet='$id_baiviet1'";
                            $sql_anhbaiviet1_query = mysqli_query($conn, $sql_anhbaiviet1);
                            $sql_row1 = mysqli_fetch_assoc($sql_anhbaiviet1_query);
                            $img_1 = $sql_row1['vitrianh'];
                            // $demo = "dsfkfslkkslfkjsfdkjfdsjlfdslfdslkdsfkjfdslkdsflkfksdlfsdkjkjfdslk";
                            // $substring = substr($demo, 0, 10);
                            $noidung = "";
                            if (strlen($row1['noidung']) <= 350){ $noidung = $row1['noidung'] . "..."; }
                            else{
                                $noidung = substr($row1['noidung'], 0, 350) . "...";
                            }
                            // echo $noidung;



                            echo '
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="' . $img_1 . '" alt="Hình tạm thời" width="150" height="150">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row"><div class="col-12"> <h5>' .$row1['title'].'</h5> </div></div>
                                        <div class="row">
                                            <div class="col-3"><b>Người đăng: </b></div>
                                            <div class="col-3">'. $fullname . '</div>
                                            <div class="col-6">' 
                                            . strval(date('d/m/Y - H:i:s', strtotime($row1["ngaydang"])))
                                            . '</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">'. $noidung .'</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href=\'noidungbaiviet.php?id='
                                                . $row1['ID']
                                                .
                                                '\'">Xem thêm</button>
                                            </div>
                                            <div class="col-4">
                                                <button type="button" class="btn btn-primary btn-sm"
                                                    onclick="window.location.href=\'chinhsuabaiviet.php?id='
                                                . $row1['ID']
                                                .
                                                '\'">Chỉnh sửa bài viết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                        if ($num_row >1){
                            $row2 = mysqli_fetch_assoc($sql_query);
                            $ngaydang = $row2["ngaydang"];
                            $noidung = "";
                            if (strlen($row2['noidung']) <= 350){ $noidung = $row2['noidung'] . "..."; }
                            else{
                                $noidung = substr($row2['noidung'], 0, 350) . "...";
                            }
                            echo '
                                <br/>
                                <div class="row">
                                    <div class="col-sm-4">
                                        <img src="images/hinhtamthoi.jpg" alt="Hình tạm thời" width="150" height="150">
                                    </div>
                                    <div class="col-sm-8">
                                        <div class="row"><div class="col-12"> <h5>' .$row2['title'].'</h5> </div></div>
                                        <div class="row">
                                            <div class="col-3"><b>Người đăng: </b></div>
                                            <div class="col-3">'. $fullname . '</div>
                                            <div class="col-6">' . $row2["ngaydang"] . '</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-12">'. $noidung .'</div>
                                        </div>
                                        <div class="row">
                                            <div class="col-3">
                                                <button type="button" class="btn btn-primary btn-sm" onclick="window.location.href=\'noidungbaiviet.php?id='
                                                . $row2['ID']
                                                .
                                                '\'">Xem thêm</button>
                                            </div>
                                            <div class="col-4">
                                                <button type="button" class="btn btn-primary btn-sm">Chỉnh sửa bài viết</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            ';
                        }
                    ?>

                    
                </div>
            </div>
            <!-- </nav> -->
            <!-- End body -->
        </div>
		<script>COMMON_TEMPLATE.footer();</script>

        <!-- Container -->
    </body>
</html>

<?php
    mysqli_close($conn);
?>