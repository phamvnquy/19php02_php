<?php
require_once 'connect.php';
if (isset($_POST['edit'])) {
			$name = $_POST['name'];
			$address = $_POST['address'];
			$start_date = $_POST['start_date'];
			$end_date = $_POST['end_date'];
			$start_number = $_POST['start_number'];
			$end_number = $_POST['end_number'];

	$sql = "UPDATE `users` SET `name` = '$name', `gender` = 'female', `customer_type` = '$customer_type', `start_date` = '$start_date', `end_date` = '$end_date', `address` = '$address', `start_number` = '$start_number', `end_number` = '$end_number' WHERE `users`.`id` =$_GET[id]";
	$run=mysqli_query($connect, $sql);
	$dong=mysqli_fetch_array($run, MYSQLI_ASSOC);
	// Chuyen trang
	header("Location: list_user.php");
}
?>
<?php 
	require_once 'connect.php';
	$sql1 = "SELECT * FROM users where id=$_GET[id]";
	$listUser = mysqli_query($connect, $sql1);
	$dong=mysqli_fetch_array($listUser, MYSQLI_ASSOC);
	?>
<h1>Edit</h1>
	<form action="#" method="post">
		<p>Name
			<input type="text" name="name" value="<?php echo $dong['name']?>">
		</p>
		<p>Address
			<input type="text" name="address" value="<?php echo $dong['address']?>">
		</p>
		
		<p>Start date
			<input type="date" name="start_date" value="<?php echo $dong['start_date']?>">
		</p>
	
		<p>End date
			<input type="date" name="end_date" value="<?php echo $dong['end_date']?>">
		</p>
		
		<p>Start number
			<input type="text" name="start_number" value="<?php echo $dong['start_number']?>">
		</p>
		
		<p>End number
			<input type="text" name="end_number" value="<?php echo $dong['end_number']?>">
		</p>
		
		<p><input type="submit" name="edit" value="edit"></p>
	</form>