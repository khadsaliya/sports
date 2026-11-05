<?php
session_start();

session_destroy();

echo"logout done";
header("location:login.php");
?>