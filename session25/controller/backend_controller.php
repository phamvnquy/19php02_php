<?php
require_once 'model/backend_model.php';
require_once 'config/database.php';
require_once 'libs/function.php';
class BackendController {
    function handleRequest() {
        $backModel = new BackendModel();
            // khoi tao Lib dung chung
            $libs = new LibCommon();

            $controller = isset($_GET['controller'])?$_GET['controller']:'back';

        $action = isset($_GET['action']) ?$_GET['action'] : '';

        switch ($controller) {
                case 'back':
                    $this->handleFront($action, $backModel, $libs);
                    break;
                case 'news':
                    $this->handleNews($action, $backModel, $libs);
                    break;
                case 'products':
                    $this->handleProduct($action, $backModel, $libs);
                    break;
                case 'users':
                    $this->handleUsers($action, $backModel, $libs);
                    break;
                default:
                    # code...
                    break;
            }
        }

        function handleFront($action, $backModel, $libs){

        }

        function handleProduct($action, $backModel, $libs){
            
        }

        function handleUsers($action, $backModel, $libs){

        switch ($action) {
            case 'add_user':
                if (isset($_POST['add'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    if ($backModel -> addUser($username, $password) === TRUE)
                        $libs->redirectPage('admin.php?controller=users&action=list_user');
                }
                include 'view/users/add_user.php';
                break;


            case 'list_user':
                include 'view/users/list_user.php';
                break;


            case 'delete_user':
                $id = $_GET['id'];
                if ($backModel -> deleteUser($id) === TRUE)
                        $libs->redirectPage('admin.php?controller=users&action=list_user');
                break;


            case 'edit_user':
                $id = $_GET['id'];
                $backendModel = new BackendModel();
                $editUser = $backendModel -> getUserById($id);
                $editUser = $editUser -> fetch_assoc();
                if (isset($_POST['edit_user'])) {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                    if ($backModel -> editUser($id, $username, $password) === TRUE)
                         $libs->redirectPage('admin.php?controller=users&action=list_user');
                }
                include 'view/users/edit_user.php';
                break;
        }
    }

}

?>