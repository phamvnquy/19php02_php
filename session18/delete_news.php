<?php 
	require_once 'config/connect.php';
	$id = $_GET['id'];
	$sql = "DELETE  FROM news WHERE id = '$id'";

	mysqli_query($connect, $sql);
	// Chuyen trang
	header("Location: list_news.php");
?>