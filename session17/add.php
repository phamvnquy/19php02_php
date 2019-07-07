<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
	<?php
		require_once 'connect.php';
		$title = $describe = $images = $date = '';
		$errTitle = $errDescribe = $errImages = $errDate = '';
		$checkSubmit = true;
		if (isset($_POST['submit'])) {
			$title = $_POST['title'];
			$describe = $_POST['describe'];
			$images = $_POST['images'];
			$date = $_POST['date_s'];
			if ($title == '') { 
				$errTitle = 'Please input title';
				$checkSubmit = false;
			}
			if ($describe == '') {
				$errDescribe = 'Please choose describe';
				$checkSubmit = false;
			}
			if ($images == '') {
				$errImages = 'Please input images';
				$checkSubmit = false;
			}
			if ($date == '') {
				$errDate = 'Please choose date';
				$checkSubmit = false;
			}
			if ($checkSubmit) {
				$date = date('Y-m-d', strtotime($date));
				$sql = "INSERT INTO `news` (`title`, `describe`, `images`, `date_s`, `id`) VALUES ('$title', '$describe', '$images', '$date', NULL)";
				mysqli_query($connect, $sql);
				// Chuyen trang
				header("Location: list.php");
			}
		}
	?>
	<form action="#" method="POST" id="REGISTER">
		<h1>ADD NEWS</h1>
		<p>title:<br>
			<input type="text" name="title" value="<?php echo $title?>">
		</p>
		<p class="error"><?php echo $errTitle;?></p>

		<p>describe:<br>
			<input type="text" name="describe" value="<?php echo $describe?>">
		</p>
		<p class="error"><?php echo $errDate;?></p>

		<p>images:<br>
			<input type="text" name="images" value="<?php echo $images?>">
		</p>
		<p class="error"><?php echo $errImages;?></p>

		<p>Date:<br>
			<input type="Date" name="date_s" value="<?php echo $date?>">
		</p>
		<p class="error"><?php echo $errDate;?></p>
		<p><input type="submit" name="submit" value="sumbit"></p>
	</form>
</body>
</html>