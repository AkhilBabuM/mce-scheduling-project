<?php
require 'config.php';
session_start();
$_SESSION = [];
session_unset();
session_destroy();
header("Location: llogin.php");
?>
