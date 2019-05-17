<?php
	session_start();
	include('connect.php');
  	$postId = $_POST['postId'];
  	$username = $_POST['username'];
  	$content = $_POST['content'];
  	$type = $_POST['type'];
  	if (empty($username)) {
  		echo "";
  	}

  	function getData($conn, $postId) {
  		$sql = "SELECT content, username FROM comment WHERE postid='$postId'";
  		$result = $conn->query($sql);

		$data = array();
		$i = 0;
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) {
				$comment = array();
				$comment['content'] = $row["content"];
				$comment['username'] = $row["username"];
				$data[$i] = $comment;
				$i++;
			}
		}
		echo json_encode($data);
  	}

  	if ($type == "get") {
  		getData($conn, $postId);
  	} else {
  		$sql = "INSERT INTO comment (content, username, postid) VALUES ('$content', '$username', '$postId')";
	  	if (mysqli_query($conn, $sql)) {
			getData($conn, $postId);
		} else {
			echo "Xảy ra lỗi: " . mysqli_error($conn);
		}
	}
?>