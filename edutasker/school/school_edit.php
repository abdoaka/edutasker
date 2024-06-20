<?php
session_start();
$id = $_GET['id'];
$r = "select * from school where SchoolID = '" . $id . "'";
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
        <form method="POST" action="school_confirm_m.php">
                <fieldset>
                    <legend>Info School</legend>
                    <div class="form-group">
                        <label for="disableinput">School ID</label>
                        <input type="text" class="form-control" id="disableinput"
                            value="<?php echo $data['SchoolID']; ?>" disabled>
                        <input type="text" name="id_s" class="form-control" id="disableinput"
                            value="<?php echo $data['SchoolID']; ?>" hidden>
                    </div>
                    <div class="form-group">
                        <label for="disableinput">School Name</label>
                        <input type="text" name="nv_name" class="form-control"
                            value="<?php echo $data['Name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="disableinput">School Phone</label>
                        <input type="text" name="nv_phone" class="form-control"
                            value="<?php echo $data['Phone']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="disableinput">School Email</label>
                        <input type="text" name="nv_email" class="form-control"
                            value="<?php echo $data['Email']; ?>">
                    </div>
                </fieldset>
                <input class="btn btn-danger" type="submit" value="Modifier">

            </form>
        </div>
    </div>
</body>
