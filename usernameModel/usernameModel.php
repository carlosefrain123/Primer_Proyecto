<?php
    class usernameModel{
        private $PDO;
        public function __construct(){
            require_once("C:/xampp/htdocs/proyecta/config/db.php");
            $con=new db();
            $this->PDO=$con->conexion();
        }
        public function insertarUsuarios($email, $username, $password) {
            // Hashear la contraseña
            $hashedPassword = password_hash($password, PASSWORD_DEFAULT);
            $stament = $this->PDO->prepare("INSERT INTO usuarios(id, email, username, password) VALUES (null, :email, :username, :password)");
            $stament->bindParam(":email", $email);
            $stament->bindParam(":username", $username);
            $stament->bindParam(":password", $hashedPassword); // Insertar la contraseña hasheada
            return ($stament->execute())?$this->PDO->lastInsertId():false;
        }
        public function ingresarUsuario($email, $password) {
            $stament=$this->PDO->prepare("SELECT * FROM usuarios WHERE email=:email");
            $stament->bindParam(":email", $email); 
            $stament->execute();
            $data=$stament->fetch(PDO::FETCH_ASSOC);
            if($stament->rowCount()> 0){
                if (password_verify($password, $data['password'])) {
                    $_SESSION['username']=$data['username'];
                    $_SESSION['email']=$data['email'];                    
                    //echo "Hola ".$_SESSION["username"];
                    header("Location:index.php");
                }else{
                    echo "Lo siento";
                }
            }

        }
    }
?>