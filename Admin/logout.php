<?php
session_start();

unset($_SESSION['id']);
unset($_SESSION['username']);
unset($_SESSION['useremail']);

// Destroy the session and unset all session variables
session_destroy();

header('Location: pages-login.php');
?>
