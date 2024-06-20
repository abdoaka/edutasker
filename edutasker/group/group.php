<?php
session_start();
require ('../fonctions.php');
if ($_SESSION['cle'] != 1)
    redirection('../login.php');
else
    include ("../include_u/sidebar.php");
?>
<!DOCTYPE html>
<html>

<body>
    <div class="main-panel">
        <div class="content">
            <span class="h2 text-primary">Group Information</span> <br>
            <a href="group_add.php" class="btn btn-primary"><i class="la la-plus-circle"></i>Add Group</a>
            <table class="table table-head-bg-primary mt-4">
                <thead>
                    <tr>
                        <th scope="col">Group id</th>
                        <th scope="col">Name Group</th>
                        <th scope="col">Professor ID</th>
                        <th scope="col">Professor Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require ("../connexion.php");
                    $r = "alter table `group` auto_increment = 1";
                    mysqli_query($con, $r);
                    $r = "SELECT group.GroupID, group.Name_g, group.ProfessorID, professor.Name 
                     FROM `group` , professor where group.ProfessorID = professor.ProfessorID 
                     ORDER BY group.GroupID";
                    $res = mysqli_query($con, $r);
                    while ($data = mysqli_fetch_assoc($res)) {
                        $id_g = $data['GroupID'];
                        $id_p = $data['ProfessorID'];
                        echo "<tr>";
                        echo "<td>" . $id_g;
                        echo "<td>" . $data['Name_g'];
                        echo "<td>" . $id_p;
                        echo "<td>" . $data['Name'];
                        echo "<td> <a href='group_edit.php?id=" . urlencode($id_g) . "&id_p=" . urlencode($id_p) . "'><i class='la la-wrench'></i></a>";
                        echo "<td> <a href='group_delete.php?id=" . urlencode($id_g) . "&id_p=" . urlencode($id_p) . "'><i class='la la-trash'></i></a>";
                        echo "<tr>";
                    }
                    echo "</table></div>";
                    mysqli_close($con);
                    ?>
                </tbody>
            </table>
        </div>
    </div>

</body>

</html>
<script src="assets/js/core/jquery.3.2.1.min.js"></script>
<script src="assets/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js"></script>
<script src="assets/js/core/popper.min.js"></script>
<script src="assets/js/core/bootstrap.min.js"></script>
<script src="assets/js/plugin/chartist/chartist.min.js"></script>
<script src="assets/js/plugin/chartist/plugin/chartist-plugin-tooltip.min.js"></script>
<script src="assets/js/plugin/bootstrap-toggle/bootstrap-toggle.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/jquery.mapael.min.js"></script>
<script src="assets/js/plugin/jquery-mapael/maps/world_countries.min.js"></script>
<script src="assets/js/plugin/chart-circle/circles.min.js"></script>
<script src="assets/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js"></script>
<script src="assets/js/ready.min.js"></script>
<script src="assets/js/demo.js"></script>