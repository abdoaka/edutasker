<?php
session_start();
include('fonctions.php');
session_unset();
session_destroy();
redirection('login.php');
?>
