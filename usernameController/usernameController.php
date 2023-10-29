<?php
    class usernameController{
        private $model;
        public function __construct(){
            require_once("C:/xampp/htdocs/proyecta/usernameModel/usernameModel.php");
            $this->model=new usernameModel();
        }
        public function registro($email, $username, $password){
            $idRegistro=$this->model->insertarUsuarios($email, $username, $password);
            return ($idRegistro!=false)?header("Location: login.php"):header("Location: register.php");
        }     
    }
?>