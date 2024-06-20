<?php
session_start();
require ('../fonctions.php');
if ($_SESSION['cle'] != 1)
    redirection('../login.php');
else
    include ("../include_u/sidebar.php");
	$r = "select * from `student`";
	require("../connexion.php");
	$res = mysqli_query($con, $r);
    $num = mysqli_num_rows($res);
    $num++;
	mysqli_close($con);
?>
<body>
    <div class="main-panel">
        <div class="content">
        <form method="POST" action="student_confirm_a.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>New student</legend>
                    <div class="form-group">
                        <label for="disableinput">student ID</label>
                        <input type="text" class="form-control" id="disableinput"
                            value="<?php echo $num; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="disableinput">Student Name</label>
                        <input type="text" name="nv_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="disableinput">Group</label>
                        <select name="id_group" class="form-control form-control-lg" id="largeSelect">
                        <option selected disabled>Select Group</option>
                            <?php
                                require ("../connexion.php");
                                $r = "SELECT * FROM `group` ";
                                $res = mysqli_query($con, $r);
                                while ($data = mysqli_fetch_assoc($res)) {
                                        echo "<option value=" . $data['GroupID'] . ">";
                                        echo $data['Name_g'];
                                }
                                mysqli_close($con);
                            ?>
                        </select>
                    </div>
                </fieldset>
                <input class="btn btn-danger" type="submit" value="Add">

            </form>
        </div>
    </div>
</body>
