<?php
include('connect.php');

$sql = "SELECT * FROM baiviet WHERE type='nam'";
$result = mysqli_query($conn, $sql);
$end = mysqli_num_rows($result);

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Miền Nam</title>
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
          <div id="khungchuathongtin">
            <?php
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
                  '">
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
                      . strval(date('d/m/Y - H:i:s', strtotime($row["ngaydang"])))
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
                    
                    '">
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


            ?>
          </div>
        </div>

        <div class="col-4">
          <!--Begin popular article-->
          <div class="row">
            <h4>Bài viết phổ biến</h4>
          </div>
          <div class="row">
            <?php
                $sql = "SELECT * FROM baiviet ORDER BY luot_xem DESC LIMIT 0,2";

                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {

                  while($row = mysqli_fetch_assoc($result)) {
                    $anhnen = "";
                    $sql_1 = "SELECT * FROM img WHERE idbaiviet=" . $row['ID'];
                    $result_1 = mysqli_query($conn, $sql_1);

                    while($row_1 = mysqli_fetch_assoc($result_1)) {
                      $anhnen = $row_1['vitrianh'];
                    }

                    echo 
                    '
                    <div class="card">
                      <a href="noidungbaiviet.php?id='
                      . $row['ID']
                      .
                      '">
                      <img class="card-img-top" src="'
                      . $anhnen
                      .
                      '" alt="khong tim thay">              
                      </a>
                      <div class="card-body">
                        <h6 class="card-title">
                          <a href="noidungbaiviet.php?id='
                          . $row['ID']
                          .
                          '">'
                          . $row['title']
                          .
                          '</a>
                        </h6>                
                      </div>
                    </div>
                    
                    ';

                  }
                }


              ?>


          </div>    
          <!--End popular article-->

          <!--Begin recent article-->
          <div class="row">
            <h4>Bài viết gần đây</h4>
          </div>  
          <div class="row">
            <ul class="navbar-nav" id="ganday">
              <?php
                $sql = "SELECT * FROM baiviet ORDER BY ngaydang DESC LIMIT 0,3";
                $result = mysqli_query($conn, $sql);
                
                if (mysqli_num_rows($result) > 0) {

                  while($row = mysqli_fetch_assoc($result)) {
                    echo 
                    '
                    <li class="nav-item">
                      <a class="nav-link" id="link1" href="noidungbaiviet.php?id='
                      . $row['ID']
                      .

                      '">
                      '
                      . $row['title']
                      .
                      '</a>
                    </li>
                    ';

                  }
              }

              ?>
            </ul>            
          </div>
        </div>
          <!--End recent article-->
      </div>   
    </div>
    <!--End main content-->

<script>COMMON_TEMPLATE.footer();</script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

</body>
</html>

<?php
  mysqli_close($conn);
?>