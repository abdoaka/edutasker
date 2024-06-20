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
            <span class="h2 text-primary">Management Information</span> <br>
            <a href="management_add.php" class="btn btn-primary"><i class="la la-plus-circle"></i>Add Management</a>
            <table class="table table-head-bg-primary mt-4">
                <thead>
                    <tr>
                        <th scope="col">Management id</th>
                        <th scope="col">Name Management</th>
                        <th scope="col">School ID</th>
                        <th scope="col">School Name</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require ("../connexion.php");
                    $r = "SELECT management.ManagementID, management.Name_m, school.SchoolID, school.Name 
                     FROM `management` , school where management.SchoolID = school.SchoolID 
                     ORDER BY management.ManagementID";
                    $res = mysqli_query($con, $r);
                    while ($data = mysqli_fetch_assoc($res)) {
                        $id_m = $data['ManagementID'];
                        $id_s = $data['SchoolID'];
                        echo "<tr>";
                        echo "<td>" . $id_m;
                        echo "<td>" . $data['Name_m'];
                        echo "<td>" . $id_s;
                        echo "<td>" . $data['Name'];
                        echo "<td> <a href='management_edit.php?id=" . urlencode($id_m) . "&id_s=" . urlencode($id_s) . "'><i class='la la-wrench'></i></a>";
                        echo "<td> <a href='management_delete.php?id=" . urlencode($id_m) . "&id_s=" . urlencode($id_s) . "'><i class='la la-trash'></i></a>";
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