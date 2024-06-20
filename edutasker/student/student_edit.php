<?php
session_start();
$id_st = $_GET['id'];
$id_g = $_GET['id_g'];
$r = "select * from `student` where StudentID = '" . $id_st . "'";
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
            <form method="POST" action="student_confirm_m.php">
                <fieldset>
                    <legend>Info Student</legend>
                    <div class="form-group">
                        <label for="disableinput">Student ID</label>
                        <input type="text" class="form-control" id="disableinput"
                            value="<?php echo $data['StudentID']; ?>" disabled>
                        <input type="text" name="id" class="form-control" id="disableinput"
                            value="<?php echo $data['StudentID']; ?>" hidden>
                    </div>
                    <div class="form-group">
                        <label for="disableinput">Student Name</label>
                        <input type="text" name="nv_name" class="form-control" value="<?php echo $data['Name']; ?>">
                    </div>
                    <div class="form-group">
                        <label for="largeSelect">Group</label>
                        <select name="id_group" class="form-control form-control-lg" id="largeSelect">
                            <?php
                                require ("../connexion.php");
                                $r = "SELECT * FROM `group` ";
                                $res = mysqli_query($con, $r);
                                while ($data = mysqli_fetch_assoc($res)) {
                                    if ($data['GroupID'] == $id_g) {
                                        echo "<option value=" . $data['GroupID'] . " selected>";
                                        echo $data['Name_g'];
                                    } else {
                                        echo "<option value=" . $data['GroupID'] . ">";
                                        echo $data['Name_g'];
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