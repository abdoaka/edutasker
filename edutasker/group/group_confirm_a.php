<?php
require ("../connexion.php");
extract($_POST);
$r = "insert `group` values(null,'" 
    . $nv_name . "',
    " . $id_prof . ")";
mysqli_query($con, $r);
require ("../fonctions.php");
redirection("group.php");
?>