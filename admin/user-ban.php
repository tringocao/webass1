<?php
require_once("../model/connect.php");
 
if (isset($_GET["username"])) {
	//Lây id được gửi qua từ bên quan-ly-thanh-vien.php
	$username = $_GET["username"];
	//Thực thi câu lệnh sql delete để xóa user
	$sql = "delete from dang_ky where Username = '$username'";
	$query = mysqli_query($conn, $sql);
	//Chuyển hướng trang web về lại trang quan-ly-thanh-vien.php
	header('Location: index.php');
}
 
 
?>