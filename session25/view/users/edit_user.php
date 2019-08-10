<h1>EDIT USER</h1>
<form action="admin.php?controller=users&action=edit_user&id=<?php echo $id ?>" method="POST">
    <div class="form-group">
	  <label for="usr">Name:</label>
	  <input type="text" class="form-control" id="usr"name="username" value="<?php echo $editUser['username']?>">
	</div>
	<div class="form-group">
	  <label for="pwd">Password:</label>
	  <input type="text" class="form-control" id="pwd" name="password" value="<?php echo $editUser['password']?>">
	  <br>
    <input type="submit" value="EDIT USER" name="edit_user" style="margin-left: 48%">
</form>