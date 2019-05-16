<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="../lib/datatables/jquery.dataTables.min.css" />

  <script src="../lib/jquery/jquery.min.js"></script>
  <script src="../lib/bootstrap/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="../lib/fontawesome/css/fontawesome-all.min.css">
  <script type="text/javascript" src="../lib/dataTables/jquery.dataTables.min.js"></script>

  <script type="text/javascript" src="dataTables/jquery.dataTables.min.js"></script>
  <link rel="stylesheet" href="css/style.css">
  <title>User Management</title>
</head>

<body>
 <?php
      require_once("../model/connect.php");
	  
    ?>
  <div class="container-fluid body">
    <div class="row">
            <div class="col-3" id="left-sidebar">
        <ul class="d-flex flex-column">
          <li class="flex-center py-3 px-3" style="background: #000;">
            <a role="button">
              <i class="fas fa-user-circle"></i>
              <span>MANAGER</span>
            </a>
          </li>
          <li id="deal" class="flex-center-between py-2 px-3">
            <a href="post-list.php" role="tablist">
              <i class="fas fa-piggy-bank mr-2"></i>
              Posts management
            </a>
          </li>
          <li id="page" class="flex-center-between py-2 px-3">
            <a href="food-list.php" role="tablist">
              <i class="far fa-newspaper mr-2"></i>
              Food management
            </a>
          </li>
          <li id="user" class="flex-center-between py-2 px-3">
            <a href="index.php" role="tablist">
              <i class="fas fa-users mr-2"></i>
              User management
            </a>
          </li>
        </ul>
      </div>
      <div class="col-12 col-md-9 py-4" id="main">
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">User Management</a></li>
            <li class="breadcrumb-item active" aria-current="page">User List</li>
          </ol>
        </nav>
        <div class="row mb-3 flex-center mt-3">
		          <div class="col clearfix">
				<?php
					session_start();
					if (isset($_SESSION['username'])) {
						$username = $_SESSION['username'];
						$sql = "select * from dang_ky where Username = '$username'";
						$query = mysqli_query($conn, $sql);
					if (!$query) {
						printf("Error: %s\n", mysqli_error($conn));
						exit();
					}
					while ( $data = mysqli_fetch_array($query) ) {
						$lastname = $data["Ho_va_ho_lot"];
						$name = $data["Ten"];
						$email = $data["Email"];
						$level = $data["role"];
					}							
				?>
				    <a class="float-left"><?php echo $lastname." ".$name; ?></a>							
				<?php
								}
								else {		header("Location: ../client/index1.php");
}
								?>	
            <a class="btn btn-primary float-right" href="logout.php">Logout</a>
          </div>
        </div>
        <table id="table" cellspacing="0" width="100%" class="display table table-condensed table-striped nowrap">
          <thead>
            <tr>
              <th>STT</th>
			  <th>Username</th>
			  <th>Họ tên</th>
              <th>Ngày sinh</th>
              <th>Giới tính</th>
			  <th>Vai Trò</th>
			  <th>Hành động</td>
            </tr>
          </thead>
          <tbody>
		   <?php
            $stt = 1 ;
            $sql = "SELECT * FROM dang_ky;";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query, MYSQLI_ASSOC)) {
          ?>
            <tr>
              <td><?php echo $stt++ ?></td>
              <td>
                <a href="user-create-edit.php?username=<?php echo $data["Username"]; ?>">
                  <?php echo $data["Username"]; ?>
                </a>
              </td>
			  <td><?php echo $data["Ho_va_ho_lot"]." ".$data["Ten"]; ?></td>
              <td><?php echo $data["Ngay_sinh"]; ?></td>
              <td><?php echo $data["Gioi_tinh"]; ?></td>
			  <td>
                <?php
                    if ($data["role"] == "admin") {
                      echo "Administrator";
                    }else{
                      echo "Member";
                    }
                ?>
              </td>
			  <td><a href="user-ban.php?username=<?php echo $data["Username"]; ?>">Ban</a></td>
            </tr>
          <?php
            }
			            mysqli_close($conn);

          ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>
  <script src="js/script.js"></script>
</body>

</html>