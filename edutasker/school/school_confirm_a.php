<?php
require ("../connexion.php");
extract($_POST);
$r = "insert school values(null,'" 
    . $nv_name . "',
    '" . $nv_phone ."',
    '" . $nv_email . "')";
mysqli_query($con, $r);
require ("../fonctions.php");
mysqli_close($cone);
redirection("school.php");
?>