<?php
require ("../connexion.php");
extract($_POST);
$r = "insert `management` values(null,'" 
    . $nv_name . "',
    " . $id_school . ")";
mysqli_query($con, $r);
require ("../fonctions.php");
redirection("management.php");
?>