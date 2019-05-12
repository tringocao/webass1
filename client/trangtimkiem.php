<?php
  include('connect.php');
?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kết quả tìm kiếm</title>
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

    <!--Begin main content-->
    <div class="container">
      <div class="row">
        <div class="col-8">
            <?php 
            if (isset($_REQUEST["submit"]))
            {
                $search = addslashes($_GET["search"]);
        
                if(empty($search))
                {
                    echo "Yêu cầu nhập dữ liệu vào ô trống";
                }
                else
                {

                    $query = "SELECT * FROM baiviet WHERE title LIKE N'%" . $search ."%'";
        
                    $result = mysqli_query($conn, $query);
        
                    if (mysqli_num_rows($result) > 0) {
                      echo '
                      <div class="row">
                        <h2 id="ketqua">Kết quả tìm kiếm của từ khóa: '
                        .$search
                        .
                        '</h2>
                      </div>';
                        $end = mysqli_num_rows($result);
                        $i = 0;

                        $noidungtrave = "";

                        for ($j = 0;$j < $end;$j++)
                        {
                          $row = mysqli_fetch_assoc($result);
          
                          //Tìm ảnh.
                          $sql_1 = "SELECT * FROM img WHERE idbaiviet=" . $row['ID'];
                          $result_1 = mysqli_query($conn, $sql_1);
          
                          $anhbia = "";
          
                          while($row_1 = mysqli_fetch_assoc($result_1)) {
                            $anhbia = $row_1['vitrianh'];
                          }
          
                          //Tìm tên người dùng.
                          $sql_2 = "SELECT * FROM baiviet WHERE ID=" . $row['ID'];
                          $result_2 = mysqli_query($conn, $sql_2);
          
                          $username = "";
          
                          while($row_2 = mysqli_fetch_assoc($result_2)) {
                              $username = $row_2['Username'];
                          }                
          
                          $sql_3 = "SELECT * FROM dang_ky WHERE Username='" . $username . "'";
                          $result_3 = mysqli_query($conn, $sql_3);
          
                          $tendaydu = "";
          
                          while($row_3 = mysqli_fetch_assoc($result_3)) {
                              $tendaydu = $row_3['Ho_va_ho_lot'] . " " . $row_3['Ten'];
                          }
          
                          if ($i%2 == 0)
                          {
                            $noidungtrave = $noidungtrave . '<div class="row">';
                          }
          
                          $noidungtrave = $noidungtrave . '<div class="col-md-6">';
          
                          $noidungtrave = $noidungtrave . 
                          '                 
                          <div class="card-100 text-center">
                          <a href="noidungbaiviet.php?id='
                          .$row["ID"]
                          .
                          '">
                            <img class="card-img-top" src="'
                            . $anhbia
                            .
          
                            '"
                              alt="khong tim thay">
                          </a>
                          <div class="card-body card1">
                            <h6 class="card-title text-center">
                            <a href="noidungbaiviet.php?id='
                            . $row["ID"]
                            .
                            '>
                            '
                            . $row["title"]
                            .
                            '
                            </a>
                            </h6>                    
                              <p class="card-text text-left">
                                <a href="#">
                                  <img src="./images/account.png" alt="khong tim thay">
                                  <span>
                                  '
                                  . $tendaydu
                                  .
                                  '
                                  
                                  </span><br>
                                </a>
                                <img src="./images/lich.png" alt="khong tim thay">
                                <span>
                                '
                            .$row["ngaydang"]
                            .
                                '
                                </span><br>
                                '
                            .substr($row["noidung"],0,300)                
                            .
                                '
                              ...</p>
                          </div>
                          <div class="card-footer">
                              <button class="btn btn-secondary">
                              <a class="maunut" href="noidungbaiviet.php?id='
                            .$row["ID"]
                            .
                              
                              '>
                              Tiếp tục đọc
                              </a>
                              </button>                    
                            <a href="#">
                              <img src="./images/comment.png" alt="khong tim thay">
                              <span>4</span>
                            </a>
                          </div>
                        </div>                  
                          ';
                          $noidungtrave = $noidungtrave . '</div>';
          
                          if ($i%2 != 0)
                          {
                            $noidungtrave = $noidungtrave . '</div>';
                          }
                          $i++;
                        }
          
                        if ($end%2 != 0)
                        $noidungtrave = $noidungtrave . '</div>';
          
                        echo $noidungtrave;


                    } else {
                      echo '
                        <div class="row">
                          <h2 id="ketqua">Kết quả tìm kiếm của từ khóa: '
                          .$search
                          .
                          '</h2>
                        </div>';
                      echo '<p><b>Không tìm thấy kết quả</b></p>';
                    }
        
                }
            }  
            ?>

        </div>

        <div class="col-4">


          <!--Begin popular article-->
          <div class="row">
            <h4>Bài viết phổ biến</h4>
          </div>
          <div class="row">
            <div class="card">
              <img class="card-img-top" src="./images/amthucmienbac.jpg" alt="khong tim thay">              
              <div class="card-body">
                <h6 class="card-title">
                  <a href="noidungbaiviet.php?id=0011">Sự đa dạng của các món ăn ba miền Bắc-Trung-Nam</a>
                </h6>                
              </div>
            </div>
            <div class="card">
              <img class="card-img-top" src="./images/banhdauxanh.jpg" alt="khong tim thay">   
              <div class="card-body">
                <h6 class="card-title">
                  <a href="noidungbaiviet.php?id=0012">Món bánh đậu xanh nổi tiếng Hải Dương</a>
                </h6>
              </div>           
            </div>
          </div>    
          <!--End popular article-->

          <!--Begin recent article-->
          <div class="row">
            <h4>Bài viết gần đây</h4>
          </div>  
          <div class="row">
            <ul class="navbar-nav" id="ganday">
              <li class="nav-item">
                <a class="nav-link" id="link1" href="noidungbaiviet.php?id=0011">Sự đa dạng của món ăn ba miền Bắc-Trung-Nam</a> 
              </li>
              <li class="nav-item">
                <a class="nav-link" id="link2" href="noidungbaiviet.php?id=0002" >Bùi thơm với nem nắm Giao Thủy</a> 
              </li>
              <li class="nav-item" id="cuoicung">
                <a class="nav-link" href="noidungbaiviet.php?id=0012">Món bánh đậu xanh nổi tiếng Hải Dương</a> 
              </li>
            </ul>            
          </div>
        </div>
          <!--End recent article-->
      </div>   
    </div>
    <!--End main content-->

    <script>COMMON_TEMPLATE.footer();</script>
    <?php
      mysqli_close($conn); 
    ?>
  </body>
</html>