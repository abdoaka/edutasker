<?php
require ("../connexion.php");
extract($_POST);
$r = "update `group`
            set Name_g = '" . $nv_name . "',
            ProfessorID = '" . $id_prof . "'
            where 	GroupID =" . $id. "";
mysqli_query($con, $r);
$r = "alter table `group` auto_increment = 1";
mysqli_query($con, $r);
require ("../fonctions.php");
mysqli_close($con);
redirection("group.php");
?>