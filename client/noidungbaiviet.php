<?php
  include('connect.php');
  $submit_id = $_GET['id'];

  //Lấy các cột có id bài viết
  $sql = "SELECT * FROM baiviet WHERE id=" .$submit_id;
  $result = mysqli_query($conn, $sql);

  $row = $result->fetch_assoc();

  //Lấy tên người dùng.
  $username = $row['Username'];

  $sql_1 = "SELECT * FROM dang_ky WHERE Username='" . $username . "'";
  $result_1 = mysqli_query($conn, $sql_1);

  $row_1 = $result_1->fetch_assoc();

  $tendaydu = $row_1['Ho_va_ho_lot'] . " " . $row_1['Ten'];

  //Lấy ảnh bài viết.
  $sql_2 = "SELECT * FROM img WHERE idbaiviet=" . $submit_id;
  $result_2 = mysqli_query($conn, $sql_2);

  $row_2 = $result_2->fetch_assoc();

  $anhbia = $row_2['vitrianh'];

  //Tăng lượt xem bài viết.
  $result_3 = mysqli_query($conn, $sql);

  $row_3 = $result_3->fetch_assoc();

  $luotxem = $row_3['luot_xem'] + 1;

  $sql_4 = "UPDATE baiviet SET luot_xem=" . $luotxem . " WHERE ID=" . $submit_id;

  $result_4 = mysqli_query($conn, $sql_4);






?>




<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo $row["title"]; ?></title>
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

          <h2><?php echo $row["title"]; ?></h2>
          <p>
            <a href="#">
              <img src="./images/account.png" alt="khong tim thay">
              <span><?php echo $tendaydu; ?></span>
            </a>
            <img src="./images/lich.png" alt="khong tim thay">
            <span><?php echo strval(date('d/m/Y - H:i:s', strtotime($row["ngaydang"]))); ?></span><br>
            <?php
              echo '<img src="' . $anhbia .'" alt="Không tìm thấy">';
            ?>
            <br>
              <?php echo $row["noidung"]; ?>
            </p>
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

  </body>
</html>

<?php
    mysqli_close($conn);
?>