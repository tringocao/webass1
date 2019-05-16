<?php
require_once("../model/connect.php");
 
if (isset($_GET["id"])) {
	//Lây id được gửi qua từ bên quan-ly-thanh-vien.php
	$id = $_GET["id"];
	//Thực thi câu lệnh sql delete để xóa user
	$sql = "delete from baiviet where ID = $id";
	$query = mysqli_query($conn, $sql);
	//Chuyển hướng trang web về lại trang quan-ly-thanh-vien.php
	header('Location: post-list.php');
}
 
 
?>