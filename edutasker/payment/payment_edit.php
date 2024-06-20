<?php
session_start();
$id = $_GET['id'];
$id_s = $_GET['id_s'];
$r = "select * from `payment` where PaymentID = '" . $id . "'";
require ("../connexion.php");
$res = mysqli_query($con, $r);
$data = mysqli_fetch_assoc($res);
mysqli_close($con);
require ('../fonctions.php');
if ($_SESSION['cle'] != 1)
    redirection('../login.php');
else
    include ("../include_u/sidebar.php");
?>

<body>
    <div class="main-panel">
        <div class="content">
            <form method="POST" action="payment_confirm_m.php">
                <fieldset>
                    <legend>Info Payment</legend>
                    <div class="form-group">
                        <label for="disableinput">Payment ID</label>
                        <input type="text" class="form-control" id="disableinput"
                            value="<?php echo $data['PaymentID']; ?>" disabled>
                        <input type="text" name="id" class="form-control" id="disableinput"
                            value="<?php echo $data['PaymentID']; ?>" hidden>
                    </div>
                    <div class="form-group">
                        <label for="disableinput">Status</label>
                        <input type="text" name="nv_name" class="form-control" value="<?php echo $data['Status']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="largeSelect">School</label>
                        <select name="id_school" class="form-control form-control-lg" id="largeSelect">
                            <?php
                                require ("../connexion.php");
                                $r = "SELECT * FROM school ";
                                $res = mysqli_query($con, $r);
                                while ($data = mysqli_fetch_assoc($res)) {
                                    if ($data['SchoolID'] == $id_s) {
                                        echo "<option value=" . $data['SchoolID'] . " selected>";
                                        echo $data['Name'];
                                    } else {
                                        echo "<option value=" . $data['SchoolID'] . ">";
                                        echo $data['Name'];
                                    }
                                }
                                mysqli_close($con);
                            ?>
                        </select>
                    </div>
                </fieldset>
                <input class="btn btn-danger" type="submit" value="Modifier">

            </form>
        </div>
    </div>
</body>