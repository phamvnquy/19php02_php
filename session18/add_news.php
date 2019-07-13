<!DOCTYPE html>
<html>
<head>
	<title>Add news</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<?php 
	// Xu ly add news
	include 'config/connect.php';
	if (isset($_POST['add_news'])) {
		$title = $_POST['title'];
		$description = $_POST['description'];
		$image = 'default.png';
		// upload image
		if ($_FILES['image']['error'] == 0) {
			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
		}
		$sql = "INSERT INTO news(title, description, image) VALUES('$title', '$description', '$image')";
		//
		if (mysqli_query($connect, $sql) === TRUE) {
			header('Location: list_news.php');
		}
	}
	?>
	<h1>Add news</h1>
	<form method="post" action="#" enctype="multipart/form-data">
		<p>
			Title:
			<input type="text" name="title">
		</p>
		<p>
			Description:
			<textarea rows="6" name="description"></textarea>
		</p>
		<p>
			Image:
			<input type="file" name="image">
		</p>
		<p ><input style="color: red" type="submit" name="add_news" value="ADD NEWS"></p>
	</form>
</body>
</html>