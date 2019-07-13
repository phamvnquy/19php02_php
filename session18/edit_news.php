<!DOCTYPE html>
<html>
<head>
	<title>Edit news</title>
	<link rel="stylesheet" type="text/css" href="css.css">
</head>
<body>
	<?php 
	// Xu ly add news
	include 'config/connect.php';
	// get news cu ra
	$id = $_GET['id'];
	$sql = "SELECT * FROM news WHERE id = $id";
	$editNews = mysqli_query($connect, $sql);
	$oldNews = $editNews->fetch_assoc();
	$updated = Date('Y-m-d h:i:s');
	//
	if (isset($_POST['edit_news'])) {
		$title = $_POST['title'];
		$description = $_POST['description'];
		$image = $oldNews['image'];
		// upload image
		if ($_FILES['image']['error'] == 0) {
			$image = $_FILES['image']['name'];
			move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/'.$image);
		}
		$sql = "UPDATE news SET title = '$title', description = '$description', image = '$image', updated = '$updated' WHERE id = $id";
		//
		if (mysqli_query($connect, $sql) === TRUE) {
			header('Location: list_news.php');
		}
	}
	?>
	<h1>Edit news</h1>
	<form method="post" action="#" enctype="multipart/form-data">
		<p>
			Title:
			<input type="text" name="title" value="<?php echo $oldNews['title']?>">
		</p>
		<p>
			Description:
			<textarea rows="6" name="description"><?php echo $oldNews['description']?></textarea>
		</p>
		<p>
			Image:
			<input type="file" name="image">
			<img src="uploads/<?php echo $oldNews['image']?>">
		</p>
		<p><input style="color: red" type="submit" name="edit_news" value="EDIT NEWS"></p>
	</form>
</body>
</html>