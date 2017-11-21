<?php



require_once 'userdao.php';


$dao = new UserDAO;

if(isset($_GET['id'])){
    $id = $_GET['id'];
}

$dao->delete($id);

header('Location: index.php');








 ?>