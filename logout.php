<?php
session_start();

$_SESSION = array();

session_destroy();

header("Cache-Control: no-store, no-cache, must-revalidate");
header("Pragma: no-cache");

header("Location: login.php");
exit;
?>