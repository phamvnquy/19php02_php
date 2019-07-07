<link rel="stylesheet" type="text/css" href="style.css">
<?php 
	require_once 'connect.php';
	$sql = "SELECT * FROM news";
	$listUser = mysqli_query($connect, $sql);
	?>

	<table>
		<tr>
			<td>title</td>
			<td>describe</td>
			<td>images</td>
			<td>date</td>
			<td colspan="2">action</td>
		</tr>
	
<?php
	while ($user = $listUser->fetch_assoc()) {
		$id = $user['id'];
?>
	<tr>
		<td><?php echo $user['title']?></td>
		<td><?php echo $user['describe']?></td>
		<td><?php echo $user['images']?></td>
		<td><?php echo $user['date_s']?></td>
		<td>
			<a href="edit.php?id=<?php echo $id?>">Edit</a> | <a href="delete.php?id=<?php echo $id?>">Delete</a>
		</td>
	</tr>

<?php
	}
?>
</table>
<a href="add.php">Add user</a>
