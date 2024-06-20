<?php
require ("../connexion.php");
extract($_POST);
$r = "update school
            set Name = '" . $nv_name . "',
            Phone = '" . $nv_phone . "',
            Email = '" . $nv_email . "'
             where SchoolID =" . $id_s. "";
mysqli_query($con, $r);
require ("../fonctions.php");
mysqli_close($cone);
redirection("school.php");
?>