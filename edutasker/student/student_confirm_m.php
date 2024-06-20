<?php
require ("../connexion.php");
extract($_POST);
$r = "update student
            set Name = '" . $nv_name . "',
            GroupID = '" . $id_group . "'
            where StudentID =" . $id. "";
mysqli_query($con, $r);
require ("../fonctions.php");
mysqli_close($con);
redirection("student.php");
?>