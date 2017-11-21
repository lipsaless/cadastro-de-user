<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//var_dump($_POST);

require_once 'userdao.php';

try {
    $dao = new UserDAO;
    $dao->verificaEmail($_REQUEST['email']);
    $dao->setNome($_REQUEST['nome']);
    $dao->setEmail($_REQUEST['email']);
    $dao->insert();

    $type = 'success';
    $msg = 'Cadastrado!';
} catch (Exception $e) {
    $type = 'error';
    $msg = $e->getMessage();
}

echo json_encode([
    'type' => $type,
    'msg' => $msg
]);

 ?>