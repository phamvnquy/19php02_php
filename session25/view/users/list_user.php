<?php require_once 'model/backend_model.php';
$backendModel = new BackendModel();
$listUser = $backendModel -> getListUser(); ?>

<table class="table table-striped table-dark">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">UserName</th>
            <th scope="col">Password</th>
            <th scope="col">Action</th>
        </tr>
    </thead>
        <?php
            while ($user = $listUser -> fetch_assoc()) {
                $id = $user['id'];
        ?>
    <tbody>
    <tr>
        <th scope="row" ><?php echo $user['id'] ?></th>
        <td ><?php echo $user['username'] ?></td>
        <td ><?php echo $user['password'] ?></td>
        <td >
            <a href=" admin.php?controller=users&action=edit_user&id=<?php echo $id; ?>">Edit</a> |
            <a href=" admin.php?controller=users&action=delete_user&id=<?php echo $id; ?>">Delete</a>
        </td>
    </tr>
    </tbody>
        <?php
    }
    ?>
</table>

