<h2>Register form</h2>
<p class="error"><?php echo $errRegister;?></p>
<form action="index.php?controller=users&action=register" method="post">
	<p>Username:
		<input type="text" name="username">
	</p>
	<p>Password:
		<input type="password" name="password">
	</p>
	<p>
		<input type="submit" name="register" value="Register">
	</p>
	
</form>