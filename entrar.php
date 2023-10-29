<?php
    require_once("C:/xampp/htdocs/proyecta/usernameModel/usernameModel.php");
    $obj=new usernameModel();
    $obj->ingresar($_POST['email'],$_POST['password']);
?>