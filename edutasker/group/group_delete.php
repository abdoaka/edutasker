<?php
$id = $_GET['id'];
$id_p = $_GET['id_p'];
$r = "SELECT group.GroupID, group.Name_g, professor.ProfessorID, professor.Name
    FROM `group` , professor where group.ProfessorID = professor.ProfessorID 
    and group.GroupID = '$id'";
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
                    <legend>Info Group</legend>
                    <table class="table table-striped table-striped-bg-danger mt-4">
                        <thead>
                            <tr>
                                <th scope="col">Group ID</th>
                                <th scope="col">Name of Group</th>
                                <th scope="col">Professeur ID</th>
                                <th scope="col">Name of Professeur</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><?php echo $data['GroupID']; ?></td>
                                <td><?php echo $data['Name_g']; ?></td>
                                <td><?php echo $data['ProfessorID']; ?></td>
                                <td><?php echo $data['Name']; ?></td>
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
        $r = "delete from `group` where GroupID ='" . $data['GroupID'] . "'";
        mysqli_query($con, $r);
        $r = "alter table `group` auto_increment = 1";
        mysqli_query($con, $r);
        require ("../fonctions.php");
        mysqli_close($con);
        redirection("group.php");
    } else
        echo "<h1>Cle de supression invalide...</h1>";
}
?>