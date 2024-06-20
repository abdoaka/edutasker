<?php
$id = $_GET['id'];
$r = "select * from professor where ProfessorID = '" . $id . "'";
require ("../connexion.php");
$res = mysqli_query($con, $r);
$data = mysqli_fetch_assoc($res);
mysqli_close($con);
include ("../include_u/sidebar.php");
?>

<body>
    <div class="main-panel">
        <div class="content">
        <form method="POST" action="professor_confirm_m.php">
                <fieldset>
                    <legend>Info professor</legend>
                    <div class="form-group">
                        <label for="disableinput">School ID</label>
                        <input type="text" class="form-control" id="disableinput"
                            value="<?php echo $data['ProfessorID']; ?>" disabled>
                        <input type="text" name="id_p" class="form-control" id="disableinput"
                            value="<?php echo $data['ProfessorID']; ?>" hidden>
                    </div>
                    <div class="form-group">
                        <label for="disableinput">Professor Name</label>
                        <input type="text" name="nv_name" class="form-control"
                            value="<?php echo $data['Name']; ?>">
                    </div>
                </fieldset>
                <input class="btn btn-danger" type="submit" value="Modifier">

            </form>
        </div>
    </div>
</body>
