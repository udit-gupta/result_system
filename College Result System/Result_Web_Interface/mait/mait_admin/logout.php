<?php
session_start();
unset($_SESSION['user']);
unset($_SESSION['pass']);
unset($_SESSION['time']);
session_destroy();
header("location:../index.php");
?>