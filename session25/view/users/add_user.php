<h1>ADD USER</h1>
<form action=" admin.php?controller=users&action=add_user" method="POST">
	<div class="form-group">
	  <label for="usr">Name:</label>
	  <input type="text" class="form-control" id="usr"name="username">
	</div>
	<div class="form-group">
	  <label for="pwd">Password:</label>
	  <input type="password" class="form-control" id="pwd" name="password">
	  <br>
	  <input type="submit" name="add" value="ADD_USER" style="margin-left: 48%">
	</div>  
</form>
<?php
?>
