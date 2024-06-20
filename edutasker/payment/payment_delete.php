<?php
$id = $_GET['id'];
$id_s = $_GET['id_s'];
$r = "SELECT payment.PaymentID, payment.status, school.SchoolID, school.Name 
    FROM payment , school where payment.SchoolID = school.SchoolID 
    and PaymentID = '".$id."'";
require ("../connexion.php");
$res = mysqli_query($con, $r);
$data = mysqli_fetch_assoc($res);
mysqli_close($con);
include ("../include_u/sidebar.php");
?>

<body>
    <div class="main-panel">
        <div class="content">
            <form method="POST" action="#">
                <fieldset>
                    <legend>Info Payment</legend>
                    <table class="table table-striped table-striped-bg-danger mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Payment ID</th>
                                <th scope="col">Status</th>
                                <th scope="col">School ID</th>
                                <th scope="col">Name of school</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $data['PaymentID'] ; ?></td>
                                <td><?php echo $data['status']; ?></td>
                                <td><?php echo $data['SchoolID']; ?></td>
                                <td><?php echo $data['Name']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                <label>Entrez la cle de supression</label>
                <input type="password" class="form-control input-full" id="inlineinput" placeholder="Enter Input" name="cledelete">
                <input class="btn btn-danger" type="submit" value="Supprimer">
                
			</form>
        </div>
    </div>
</body>
<?php
extract($_POST);
if (isset($cledelete))
{
    if ($cledelete == "123")
    {
        require ("../connexion.php");
        $r = "delete from `payment` where PaymentID ='" . $data['PaymentID'] . "'";
        mysqli_query($con, $r);
        $r = "alter table `payment` auto_increment = 1";
        mysqli_query($con, $r);
        require ("../fonctions.php");
        mysqli_close($con);
        redirection("payment.php");
    } else
        echo "<h1>Cle de supression invalide...</h1>";
}
?>