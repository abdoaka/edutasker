<?php
require ("../connexion.php");
extract($_POST);
$r = "update professor
            set Name = '" . $nv_name . "'
             where ProfessorID =" . $id_p. "";
mysqli_query($con, $r);
require ("../fonctions.php");
mysqli_close($cone);
redirection("professeur.php");
?>