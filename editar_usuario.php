<?php

require_once 'userdao.php';

$dao = new UserDAO;


if(isset($_REQUEST['id'])){
    $id = $_REQUEST['id'];
    $dao->setId($_REQUEST['id']);
    $dao->setNome($_REQUEST['nome']);
    $dao->setEmail($_REQUEST['email']);
}
$dao->update();

// echo 'ok';

//header('Location: index.php')





 ?>