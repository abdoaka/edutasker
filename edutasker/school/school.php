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
            <span class="h2 text-primary">School Information</span>  <br>
            <a href="school_add.php" class="btn btn-primary"><i class="la la-plus-circle"></i>Add School</a>
             <table class="table table-head-bg-primary mt-4">
                <thead>
                    <tr>
                        <th scope="col">School id</th>
                        <th scope="col">Name school</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Email</th>
                        <th scope="col">Edit</th>
                        <th scope="col">Delete</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    require ("../connexion.php");
                    $r = "select * from school";
                    $res = mysqli_query($con, $r);
                    while ($data = mysqli_fetch_assoc($res))
                    {
                        $id_s = $data['SchoolID'];
                        echo "<tr>";
                        echo "<td>" . $id_s;
                        echo "<td>" . $data['Name'];
                        echo "<td>" . $data['Phone'];
                        echo "<td>" . $data['Email'];
                        echo "<td>  <a href='school_edit.php?id=". urlencode($id_s)."'><i class='la la-wrench'></i></a>";
                        echo "<td> <a href='school_delete.php?id=". urlencode($id_s)."'><i class='la la-trash'></i></a>";
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