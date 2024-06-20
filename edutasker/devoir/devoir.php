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
            <span class="h2 text-primary">Devoir Information</span> <br>
            <a href="devoir_add.php" class="btn btn-primary"><i class="la la-plus-circle"></i>Add devoir</a>
            <table class="table table-head-bg-primary mt-4">
                <thead>
                    <tr>
                        <th scope="col">Devoir id</th>
                        <th scope="col">Name </th>
                        <th scope="col">Group ID</th>
                        <th scope="col">Group Name</th>
                        <th scope="col">Type</th>
                        <th scope="col">Date devoir</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require ("../connexion.php");
                    $r = "select devoir.DevoirID, devoir.Name, devoir.type, devoir.datt, group.GroupID, group.Name_g
                        from devoir, `group`
                        where devoir.GroupID = group.GroupID
                        group by devoir.DevoirID";
                    $res = mysqli_query($con, $r);
                    while ($data = mysqli_fetch_assoc($res)) {
                        $id_d = $data['DevoirID'];
                        $id_g = $data['GroupID'];
                        echo "<tr>";
                        echo "<td>" . $id_d;
                        echo "<td>" . $data['Name'];
                        echo "<td>" . $data['type'];
                        echo "<td>" . $data['datt'];
                        echo "<td>" . $id_g;
                        echo "<td>" . $data['Name_g'];
                        echo "<td> <a href='devoir_edit.php?id=" . urlencode($id_d) . "&id_g=" . urlencode($id_g) . "'><i class='la la-wrench'></i></a>";
                        echo "<td> <a href='devoir_delete.php?id=" . urlencode($id_s) . "&id_g=" . urlencode($id_g) . "'><i class='la la-trash'></i></a>";
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