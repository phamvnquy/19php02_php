<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>login</title>
</head>
<?php 
if (isset($_POST['login'])) {
	$username =  $_POST['username'];
    $password =  $_POST['password'];

	if ($username == 'admin' && $password =='123456') {
		$err = 'dang nhap thanh cong';
		session_start();
		$_SESSION['login']['username'] = $username;
		$_SESSION['login']['password'] = $password;
		header("Location: logout.php");	
	}
	else
	$err = 'dang nhap thai bai';	
}


?>
<body>
	
	<form action="#" method="POST">
		<p class="error"><?php echo $err;?></p>
		<p>
			<input type="text" name="username">
		</p>
		<p>
			<input type="password" name="password">
		</p>
		<input type="submit" name="login" value="login">
	</form>
</body>
</html>