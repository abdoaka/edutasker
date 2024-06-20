<?php
session_start();
extract($_POST);
if ($password == "admin" && $login == "admin") {
    $_SESSION['cle'] = 1;
    require("fonctions.php");
    redirection('categorie/categorie-list.php');
}
else{
    echo "<h4 style='background-color: red;'>Echec de connexion</h4>";
}
?>
