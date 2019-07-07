<link rel="stylesheet" type="text/css" href="style.css">
<?php
require_once 'connect.php';
if (isset($_POST['edit'])) {
			$title = $_POST['title'];
			$describe = $_POST['describe'];
			$date = $_POST['date'];
			$images = $_POST['images'];

	$sql = "UPDATE `news` SET `title` = '$title', `date_s` = '$date',  `describe` = '$describe', `images` = '$images' WHERE `news`.`id` =$_GET[id]";
	$run=mysqli_query($connect, $sql);
	$dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
	// Chuyen trang
	header("Location: list.php");
}
?>
<?php 
	require_once 'connect.php';
	$sql1 = "SELECT * FROM news where id=$_GET[id]";
	$listUser = mysqli_query($connect, $sql1);
	$dong=mysqli_fetch_array($listUser, MYSQLI_ASSOC);
	?>
<h1>Edit</h1>
	<form action="#" method="post">
		<p>title
			<input type="text" name="title" value="<?php echo $dong['title']?>">
		</p>
		<p>describe
			<input type="text" name="describe" value="<?php echo $dong['describe']?>">
		</p>
		
		<p>date <br>
			<input type="date" name="date" value="<?php echo $dong['date_s']?>">
		</p>
	
		<p>images
			<input type="text" name="images" value="<?php echo $dong['images']?>">
		</p>
		
		<p><input type="submit" name="edit" value="edit"></p>
	</form>