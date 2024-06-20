<?php
session_start();
require ('../fonctions.php');
if ($_SESSION['cle'] != 1)
    redirection('../login.php');
else
    include ("../include_u/sidebar.php");
	$r = "select * from professor";
	require("../connexion.php");
	$res = mysqli_query($con, $r);
    $num = mysqli_num_rows($res);
    $num++;
	mysqli_close($con);
?>
<body>
    <div class="main-panel">
        <div class="content">
        <form method="POST" action="professor_confirm_a.php" enctype="multipart/form-data">
                <fieldset>
                    <legend>New Professeur</legend>
                    <div class="form-group">
                        <label for="disableinput">professor ID</label>
                        <input type="text" class="form-control" id="disableinput"
                            value="<?php echo $num; ?>" disabled>
                    </div>
                    <div class="form-group">
                        <label for="disableinput">professor Name</label>
                        <input type="text" name="nv_name" class="form-control">
                    </div>
                </fieldset>
                <input class="btn btn-danger" type="submit" value="Add">

            </form>
        </div>
    </div>
</body>
