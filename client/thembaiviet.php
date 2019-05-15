<?php 
	session_start();
	if (isset($_POST['submit'])) {
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "ass2";
		$conn = new mysqli($servername, $username, $password, $dbname);
		mysqli_set_charset($conn, 'UTF8');

		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		}
		$id = time();
		$title = $_POST["title"];
		$username = $_SESSION['username'];
		$ngaydang = date("Y-m-d h:i:s",time());
		$type = $_POST["location"];
		$noidung = $_POST["content"];
		$sql = "INSERT INTO baiviet (ID, title, Username, ngaydang, noidung, type, luot_xem) VALUES ('$id', '$title', '$username', '$ngaydang', '$noidung', '$type', 0)";
		if (mysqli_query($conn, $sql)) {
		    echo '
            <html>
                <br/><br/>
                <p style="font-size: 30px; font-style: italic; font-weight: bold;">
                    Đã tạo bài viết thành công, click vào <a style="font-style: italic; font-weight: bold;" href="trangcanhan.php?username='. $username . '">Link sau đây</a> để trở lại trang cá nhân
                </p>
            </html>
        ';
		} else {
		    echo "Error Adding record: " . mysqli_error($conn);
		}

		$name       = $_FILES['choose_file']['name'];  
    	$temp_name  = $_FILES['choose_file']['tmp_name'];
    	$info = pathinfo($name);
		$ext = $info['extension']; // get the extension of the file
		$newname = (time()).".".$ext;

		$target = 'images/'.$newname;
		move_uploaded_file($temp_name, $target);
		$sql = "INSERT INTO img (name, vitrianh, idbaiviet) VALUES ('$name', '$target', '$id')";
		if (!mysqli_query($conn, $sql)) {
			echo "Error Upload Image: " . mysqli_error($conn);
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
			<form action="thembaiviet.php" method="POST" enctype="multipart/form-data">
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
						<div class="col-3 col-lg-3">
							<input type="file" id="choose_file" name="choose_file" value="Chọn tệp" class="col-12 col-lg-12">
							<label id="choose_file_label" for="choose_file"><i class="fa fa-folder-open"></i> Chọn tệp</label>
						</div>
						<div class="col-3 col-lg-3" >
							<p id="displayFileName">
								
							</p>
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
			$("#choose_file").on("change", function (e) {
    
		        var file = e.target.files[0];

		        console.log(file.name);
		        $("#displayFileName").text(file.name);
		        // First request to our server to GET the result key
		        
		        
		    });
		});

		$(function() {

			$(".Editor-editor").on("keyup", function() {
				var content = $(this).text();
				console.log(content);
				$("#content").val(content);
			});
		});

	</script>
</html>
