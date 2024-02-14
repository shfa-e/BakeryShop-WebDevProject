<?php

session_start();
// remove all session variables
session_unset();
// destroy the session
session_destroy();
// delete cookie
setcookie("name", "", time() - 3600, "/");

header('Location: Homepage.html');

?>