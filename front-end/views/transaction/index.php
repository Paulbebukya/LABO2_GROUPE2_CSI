<?php
session_start();
if ($_SESSION != null) {

    require_once '../layauts/app.php';
    require_once '../../../back-end/controller/custommer.php';

?>
<main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
        <h1 class="h2">Les clients</h1>
        <a type="button" class="btn btn-sm btn-primary" href="create.php">
            Ajouter un transcation
        </a>
    </div>

    <div class="table-responsive">
                    <table class="table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">compte a crediter</th>
                                <th scope="col">compte a debiter</th>
                                <th scope="col">client</th>
                                <th scope="col">montant</th>
                                <th scope="col">motif</th>
                                <th>date transacton</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row">1</th>
                                <td>124ML393LP873467</td>
                                <td>124ML393LBANLGOMA </td>
                                <td>ISC GOMA</td>
                                <td>194$</td>
                                <td>Gloria wasingya</td>
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