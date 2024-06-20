<?php
require ("../connexion.php");
extract($_POST);
$r = "update payment
            set Status = '" . $nv_name . "',
            SchoolID = '" . $id_school . "'
            where PaymentID =" . $id. "";
mysqli_query($con, $r);
echo $r;
require ("../fonctions.php");
mysqli_close($con);
redirection("payment.php");
?>