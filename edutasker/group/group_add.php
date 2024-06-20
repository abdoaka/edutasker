<?php
session_start();
require ('../fonctions.php');
if ($_SESSION['cle'] != 1)
    redirection('../login.php');
else
    include ("../include_u/sidebar.php");
	$r = "select * from `group`";
	require("../connexion.php");
	$res = mysqli_query($con, $r);
    $num = mysqli_num_rows($res);
    $num++;
	mysqli_close($con);
?>
<body>
    <div class="main-panel">
        <div class="content">
        <form method="POST" action="group_confirm_a.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>New Group</legend>
                    <div class="form-group">
                        <label for="disableinput">Group ID</label>
                        <input type="text" class="form-control" id="disableinput"
                            value="<?php echo $num; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="disableinput">Group Name</label>
                        <input type="text" name="nv_name" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="disableinput">Professeur</label>
                        <select name="id_prof" class="form-control form-control-lg" id="largeSelect">
                        <option selected disabled>Select a professor</option>
                            <?php
                                require ("../connexion.php");
                                $r = "SELECT * FROM professor ";
                                $res = mysqli_query($con, $r);
                                while ($data = mysqli_fetch_assoc($res)) {
                                        echo "<option value=" . $data['ProfessorID'] . ">";
                                        echo $data['Name'];
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
