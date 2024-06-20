<?php
require ("../connexion.php");
extract($_POST);
$r = "insert `student` values(null,'" 
    . $nv_name . "',
    " . $id_group . ")";
mysqli_query($con, $r);
require ("../fonctions.php");
redirection("student.php");
?>