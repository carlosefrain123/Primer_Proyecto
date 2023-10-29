<?php
session_start(); 
require "includes/header.php";
if (isset($_SESSION["username"])) {
    $username = $_SESSION["username"];
    echo "Hello $username";
} else {
    echo "You are not logged in.";
}
?>
<?php require "includes/footer.php"; ?>
