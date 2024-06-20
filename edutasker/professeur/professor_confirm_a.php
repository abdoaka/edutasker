<?php
require ("../connexion.php");
extract($_POST);
$r = "insert professor values(null,'" 
    . $nv_name . "')";
mysqli_query($con, $r);
require ("../fonctions.php");
mysqli_close($cone);
redirection("professeur.php");
?>