<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$_SESSION["user"] = "";
$_SESSION["person"] = "";
echo "<script>document.cookie = 'resultCookie=; expires=Sun, 20 Jan 2030 00:00:00 UTC; path=/';alert('Log out correcto.');window.location.assign('?url=home');</script>";