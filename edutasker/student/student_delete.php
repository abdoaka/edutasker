<?php
$id = $_GET['id'];
$id_g = $_GET['id_g'];
$r = "SELECT student.StudentID , student.Name, group.GroupID, group.Name_g
        from student, `group`
        where group.GroupID = student.GroupID
        and StudentID = '".$id."'";
require ("../connexion.php");
$res = mysqli_query($con, $r);
$data = mysqli_fetch_assoc($res);
mysqli_close($con);
include ("../include_u/sidebar.php");
?>

<body>
    <div class="main-panel">
        <div class="content">
            <form method="POST" action="#">
                <fieldset>
                    <legend>Info student</legend>
                    <table class="table table-striped table-striped-bg-danger mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Student ID</th>
                                <th scope="col">Name of Student</th>
                                <th scope="col">Group ID</th>
                                <th scope="col">Name of group</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $data['StudentID'] ; ?></td>
                                <td><?php echo $data['Name']; ?></td>
                                <td><?php echo $data['GroupID']; ?></td>
                                <td><?php echo $data['Name_g']; ?></td>
                            </tr>
                        </tbody>
                    </table>
                </fieldset>
                <label>Entrez la cle de supression</label>
                <input type="password" class="form-control input-full" id="inlineinput" placeholder="Enter Input" name="cledelete">
                <input class="btn btn-danger" type="submit" value="Supprimer">
                
			</form>
        </div>
    </div>
</body>
<?php
extract($_POST);
if (isset($cledelete))
{
    if ($cledelete == "123")
    {
        require ("../connexion.php");
        $r = "delete from `student` where StudentID ='" . $data['StudentID'] . "'";
        mysqli_query($con, $r);
        $r = "alter table `student` auto_increment = 1";
        mysqli_query($con, $r);
        require ("../fonctions.php");
        mysqli_close($con);
        redirection("student.php");
    } else
        echo "<h1>Cle de supression invalide...</h1>";
}
?>