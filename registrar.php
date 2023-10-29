<?php
    require_once("C:/xampp/htdocs/proyecta/usernameController/usernameController.php");
    $obj=new usernameController();
    $obj->registro($_POST['email'],$_POST['username'],$_POST['password']);
?>