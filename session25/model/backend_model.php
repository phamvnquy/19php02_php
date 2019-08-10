<?php
include_once 'config/database.php';

class BackendModel extends ConnectDB {

    function addUser($username, $password) {
        $sql = "INSERT INTO users(username, password) VALUES ('$username','$password')";
        return mysqli_query($this -> connect(), $sql);
    }

    function getListUser() {
        $sql = "SELECT * FROM users order by id DESC";
        $listUser = mysqli_query($this -> connect(), $sql);
        return mysqli_query($this -> connect(), $sql);

    }

    function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id='$id'";
        return mysqli_query($this -> connect(), $sql);
    }

    function editUser($id, $username, $password) {
        $sql = "UPDATE users SET username='$username',password='$password' WHERE id='$id'";
        return mysqli_query($this -> connect(), $sql);
    }

    function getUserById($id) {
        $sql = "SELECT * FROM users WHERE id = $id";
        return mysqli_query($this -> connect(), $sql);
    }

}