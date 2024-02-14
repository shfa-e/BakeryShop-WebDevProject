<?php

session_start();
if (isset($_SESSION["username"])) {
    header('Location: account.php');
} else {
    header('Location: signup page.html');
}


?>