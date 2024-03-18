<?php
session_start();
if ($_SESSION != null) {

    require_once '../layauts/app.php';
    require_once '../../../back-end/controller/custommer.php';

?>
    <main class="col-md-9 ms-sm-auto col-lg-10">
        <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
            <h1 class="h2">Les utilisateurs</h1>
            <a href="create.php" class="btn btn-sm btn-primary">ajouter utilisateur</a>
        </div>

        <div class="table-responsive">
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">nom d'utilisateur</th>
                        <th scope="col">role</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>groupe 2 </td>
                        <td>admin </td>
                        <td>le 23.12.2022</td>
                        <td style="width: 160px;">
                            <a href="ajouter.html" class="btn btn-sm btn-primary">editer</a>
                            <button class="btn btn-sm btn-danger">Supprimer</button>
                        </td>
                    </tr>

                </tbody>
            </table>


        </div>
    </main>

<?php require_once '../layauts/footer.php';
} else
    header('Location:../../index.php');
exit();

?>