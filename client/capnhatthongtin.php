﻿<!DOCTYPE html>
<html>
    <head>
        <title>Cập nhật thông tin</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link type="text/css" rel="stylesheet" href="css/style3.css">
        <script src="../lib/jquery/jquery.min.js"></script>
        <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
        <script src="../lib/owl-carousel-2/owl.carousel.min.js"></script>
        <script src="js/script.js"></script>
        <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="../lib/fontawesome/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="css/style_header.css">    
        <link rel="stylesheet" href="./css/style_3mien.css">
    </head>
    <!-- Begin body -->
    <body>
        <script>COMMON_TEMPLATE.header();</script>
        <div class="container" id="update_info">
        <div class="navbar navbar-expand-sm bg-light" > <!-- Remove id="all_body"-->
            <div class="col-md-3" style="height: 100%">
                <div class="row" style="margin:auto;">
                    <a href="./images/avatar.jpg" style="margin:auto;"><img src="./images/avatar.jpg" alt="myavatar" width="150" height="150" class="rounded-corners" style="margin:auto;"></a>
                </div>
                <br>
                <div class="row justify-content-center">
                    <button type="submit" class="btn btn-primary">Cập nhật Avatar</button>
                </div>
                <div class="row">
                    <div class="col-9">
                        <p id="username">Mai Bá Lộc</p>
                    </div>
                    <div class="col-3">
                        <a href="#"><img src="./images/pencil.jpg" alt="Change Avatar" width="15" height="15"></a>
                    </div>
                </div>
                <div class="row"><div class="col-12"><p class="u_info">Username: maibaloc</p></div></div>
                <div class="row"><div class="col-12"><p class="u_info">Giới tính: Nam</p></div></div>
                <div class="row"><div class="col-12"><p class="u_info">Ngày sinh: 18/11/1983</p></div></div>
                <div class="row"><div class="col-12"><p class="u_info">Số điện thoại: 0984737098</p></div></div>
                <div class="row"><div class="col-12"><p class="u_info" style="font-size: 18px;">Số bài viết</p></div></div>
                <div class="row"><div class="col-12"><p class="u_info" style="font-size: 20px;"><b>20</b></p></div></div>
            </div>
            <div class="col-md-9" style="height: 100%">
                <div class="row">
                    <div class="col-12" style="border-bottom: solid 5px blue;">
                        <h4 class="sub_title">CẬP NHẬT THÔNG TIN CÁ NHÂN</h4>
                    </div>
                </div>
                <br/>
                <form>
                    <div class="form-group row">
                        <label for="staticEmail" class="col-sm-3 col-form-label">Username: </label>
                        <div class="col-sm-9">
                            <input type="text" readonly class="form-control-plaintext" id="staticEmail" value="maibaloc">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="first_name" class="col-sm-3 col-form-label">Họ và họ lót: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="first_name" placeholder="Mai Bá">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="last_name" class="col-sm-3 col-form-label">Tên người dùng: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="last_name" placeholder="Lộc">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="phone" class="col-sm-3 col-form-label">Số điện thoại: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="phone" placeholder="0984737098">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="email" class="col-sm-3 col-form-label">Địa chỉ email: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="email" placeholder="maibalocmail@yahoo.com">
                        </div>
                    </div>

                    <div class="form-group row">
                        <label for="Birthday" class="col-sm-3 col-form-label">Birthday: </label>
                        <div class="col-sm-9">
                            <input type="text" class="form-control" id="Birthday" placeholder="18/11/1983">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12" style="margin:auto;">
                            <input class="btn btn-primary" type="submit" value="Lưu và hoàn thành">
                        </div> 
                    </div>

                    

                </form>
            </div>
        </div>
    </div>
		<script>COMMON_TEMPLATE.footer();</script>

    </body>
    <!-- End body -->
</html>