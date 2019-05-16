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
		$id = $_POST["id"];
		$title = $_POST["title"];
		$username = $_SESSION['username'];
		$type = $_POST["location"];
		$noidung = $_POST["content"];
		$sql = "UPDATE baiviet SET title='".$title."', type='".$type."', noidung='".$noidung."' WHERE id='".$id."'";
		if (mysqli_query($conn, $sql)) {
		    echo '
            <html>
                <br/><br/>
                <p style="font-size: 30px; font-style: italic; font-weight: bold;">
                    Đã chỉnh sửa bài viết thành công, click vào <a style="font-style: italic; font-weight: bold;" href="trangcanhan.php?username='. $username . '">Link sau đây</a> để trở lại trang cá nhân
                </p>
            </html>
        ';
		} else {
		    echo "Update record: " . mysqli_error($conn);
		}

		$imageId = $_POST["imageId"];
		$name       = $_FILES['choose_file']['name'];  
    	$temp_name  = $_FILES['choose_file']['tmp_name'];
    	if (!empty($name)) {
	    	$info = pathinfo($name);
			$ext = $info['extension']; // get the extension of the file
			$newname = (time()).".".$ext;

			$target = 'images/'.$newname;
			move_uploaded_file($temp_name, $target);
			$sql = "UPDATE img SET name='".$name."', vitrianh='".$target."' WHERE id='".$imageId."'";
			if (!mysqli_query($conn, $sql)) {
				echo "Error Upload Image: " . mysqli_error($conn);
			}
		}
	}
?>