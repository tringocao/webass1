<?php 
	session_start();
	$_SESSION['username']= "abcjkl";
	if (isset($_POST['submit'])) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "assignment";
		$conn = new mysqli($servername, $username, $password, $dbname);

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$id = 199;
		$title = $_POST["title"];
		$nguoidang = $_SESSION['username'];
		$ngaydang = date("Y-m-d h:i:s",time());
		$noidung = $_POST["content"];
		$sql = "INSERT INTO baiviet (ID, title, nguoidang, ngaydang, noidung, hinhanh) VALUES ('$id', '$title', '$nguoidang', '$ngaydang', '$noidung', 'test.jpg')";
		if (mysqli_query($conn, $sql)) {
		    echo "Add success";
		} else {
		    echo "Error Adding record: " . mysqli_error($conn);
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>Thêm bài viết</title>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">	
		<script src="../lib/jquery/jquery.min.js"></script>
		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
		<script src="../lib/bootstrap/js/bootstrap.min.js"></script>
		<script src="../lib/owl-carousel-2/owl.carousel.min.js"></script>
		<script src="../lib/editor/editor.js"></script>
		<script src="js/script.js"></script>
		
		<link rel="stylesheet" href="../lib/bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" href="../lib/fontawesome/css/fontawesome-all.min.css">
		<link rel="stylesheet" href="css/style_header.css">   
		<link href="../lib/editor/editor.css" rel="stylesheet"/>
		<link rel="stylesheet" href="css/thembaiviet.css">
	</head>
	<body>
		<script>COMMON_TEMPLATE.header();</script>
		<div class="wrap_editor container"> 
			<div id="title">
				Đăng bài viết mới
			</div>
			<form action="thembaiviet.php" method="POST">
				<textarea id="content" style="display:none;" name="content"> </textarea> 
				<div id="info" style="font-size:17px;">
					<div>
						<input type="text" name="title" class="form-control post_title" placeholder="Tiêu đề bài viết">
					</div>
					<div class="row">
						<div class="col-6 col-lg-2">
							Chọn chủ đề
						</div>
						<div class="col-6 col-lg-3">
							<select name="location" class="col-12 col-lg-12" style="padding:5px;">
								<option value="Miền Bắc">Miền Bắc</option>
								<option value="Miền Trung">Miền Trung</option>
								<option value="Miền Nam">Miền Nam</option>
							</select>
						</div>
					</div>
					<div class="row">
						<div class="col-6 col-lg-2">
							Chọn ảnh hiển thị
						</div>
						<div class="col-6 col-lg-3">
							<input type="file" id="choose_file" value="Chọn tệp" class="col-12 col-lg-12">
							<label id="choose_file_label" for="choose_file"><i class="fa fa-folder-open"></i> Chọn tệp</label>
						</div>
					</div>
				</div>
				
				<div id="txtEditor"></div>
				<div id="wrap_button">
					<button type="submit" name="submit" class="btn btn-success btn-md">Đăng bài viết</button>
					<button type="button" class="btn btn-md" style="margin-left:7px;">Hủy</button>
				</div>
			</form>
		</div>
	</body>
	<script type="text/javascript">
				$(document).ready( function() {
				$("#txtEditor").Editor();
				});

		$(function() {
			console.log("abc");

			$(".Editor-editor").on("keyup", function() {
				var content = $(this).text();
				console.log(content);
				$("#content").val(content);
			});
		});
	</script>
</html>
