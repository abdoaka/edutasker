<?php
session_start();
$id = $_GET['id'];
$id_p = $_GET['id_p'];
$r = "select * from `group` where GroupID = '" . $id . "'";
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
            <form method="POST" action="group_confirm_m.php">
                <fieldset>
                    <legend>Info Group</legend>
                    <div class="form-group">
                        <label for="disableinput">Group ID</label>
                        <input type="text" class="form-control" id="disableinput"
                            value="<?php echo $data['GroupID']; ?>" disabled>
                        <input type="text" name="id" class="form-control" id="disableinput"
                            value="<?php echo $data['GroupID']; ?>" hidden>
                    </div>
                    <div class="form-group">
                        <label for="disableinput">Group Name</label>
                        <input type="text" name="nv_name" class="form-control" value="<?php echo $data['Name_g']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="largeSelect">Professur</label>
                        <select name="id_prof" class="form-control form-control-lg" id="largeSelect">
                            <?php
                                require ("../connexion.php");
                                $r = "SELECT * FROM professor ";
                                $res = mysqli_query($con, $r);
                                while ($data = mysqli_fetch_assoc($res)) {
                                    if ($data['ProfessorID'] == $id_p) {
                                        echo "<option value=" . $data['ProfessorID'] . " selected>";
                                        echo $data['Name'];
                                    } else {
                                        echo "<option value=" . $data['ProfessorID'] . ">";
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