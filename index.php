<?php
session_start(); 
require "includes/header.php";
require_once("C://xampp/htdocs/proyecta/usernameModel/usernameModel.php");
$obj=new usernameModel();
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "Hello $username";
} else {
    echo "You are not logged in.";
}
?>
<?php require "includes/footer.php"; ?>
