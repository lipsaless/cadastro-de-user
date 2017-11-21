<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//var_dump($_POST);

require_once 'userdao.php';

$dao = new UserDAO;
$dao->setNome($_REQUEST['nome']);
$dao->setEmail($_REQUEST['email']);
$dao->insert();

// echo 'ok';
 ?>