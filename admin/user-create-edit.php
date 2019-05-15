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
<!--   <script type="text/javascript" src="../lib/dataTables/jquery.dataTables.min.js"></script>
 -->
<!--   <script src="../lib/tinymce/tinymce.min.js"></script>
 -->
  <link rel="stylesheet" href="css/style.css">
  <script src="js/script.js"></script>
  <title>User</title>
</head>

<body>
<?php
require_once("../model/connect.php");
				$id = "";
				$lastname = "";
				$name = "";
				$email = "";
				$level = "";
				if (isset($_POST["save"])) {
					$username = $_POST["username"];
					$lastname = $_POST["lastname"];
					$name = $_POST["name"];
					$email = $_POST["email"];
					$level = $_POST["level"];
					$sql = "update dang_ky set Ho_va_ho_lot = '$lastname', Ten = '$name', Email = '$email', role = '$level' where Username = '$username'";
					
					if (!mysqli_query($conn, $sql)) {
						printf("Error: %s\n", mysqli_error($conn));
						exit();
					}
					header("Location: index.php");

				}
	 

				if (isset($_GET["username"])) {
					//thực hiện việc lấy thông tin user
					$username = $_GET["username"];
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
				}
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

			<h3> Thông tin thành viên</h3>
			<form method="POST" name="fr_update">
				<table class="table">
				  <caption>Danh sách thành viên đã đăng ký</caption>
					<input type="hidden" name="username" value="<?php echo $username; ?>">
					<tr><td>Họ và tên lót: </td><td><input type="text" name="lastname" value="<?php echo $lastname; ?>" /></td></tr>
					<tr><td>Tên : </td><td><input type="text" name="name" value="<?php echo $name; ?>" /></td></tr>
					<tr><td>Địa chỉ email : </td><td><input type="text" name="email" value="<?php echo $email; ?>"/></td></tr>
					<tr>
						<td>Cấp độ : </td>
						<td>
							<select name="level">
								<option value="admin" <?php echo ($level == 'admin')?"selected":""; ?>>Administrator</option>
								<option value="user" <?php echo ($level == 'user')?"selected":""; ?>>Member</option>
							</select>
						</td>
					</tr>
					<tr><td colspan="2"><input type="submit" name="save" value="Lưu thông tin"></td></tr>
				</table>
			</form>
	  
	        </div>

    </div>
  </div>
</body>

</html>