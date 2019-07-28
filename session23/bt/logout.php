<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<?php
	session_start();
	echo $_SESSION['login']['username'];
	echo $_SESSION['login']['password']; 
if (isset($_POST['logout'])) {
	session_start();
	unset($_SESSION['login']);
	echo $_SESSION['login'];
	header("Location: formlogin.php");
}
?>
<body>
	<form action="#" method="POST">
		<input type="submit" name="logout" value="logout">
	</form>
</body>
</html>