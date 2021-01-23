<?php
session_start();
unset($_SESSION['nama']);
unset($_SESSION['login']);
session_destroy();
header("Location:login.php");
?>