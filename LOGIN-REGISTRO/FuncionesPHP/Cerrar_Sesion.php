<?php
session_start();

$_SESSION = array();

session_destroy();

header("location: \LOGIN-REGISTRO\IndexPHP\indexLOGIN.PHP");
exit();
?>