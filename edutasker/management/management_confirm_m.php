<?php
require ("../connexion.php");
extract($_POST);
$r = "update management
            set Name_m = '" . $nv_name . "',
            SchoolID = '" . $id_school . "'
            where ManagementID =" . $id. "";
mysqli_query($con, $r);
echo $r;
require ("../fonctions.php");
mysqli_close($con);
redirection("management.php");
?>