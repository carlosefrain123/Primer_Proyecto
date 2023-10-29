<?php
session_start();
require "includes/header.php";

if (isset($_SESSION['username'])) {
  echo "Bienvenido " . $_SESSION['username'];
} else {
  header("Location: login.php");
}

require "includes/footer.php";
?>
