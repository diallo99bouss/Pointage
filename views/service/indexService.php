<?php

if(isset($_GET['idServiceSup'])){
    require_once '../../models/serviceBD.php';
    
    $id = $_GET['idServiceSup'];
    if (supprimer($id) == 1){
        header("location:/Pointage/accueil.php?p=gService");
    }
}
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 offset-6">
            <a href="/Pointage/accueil.php?p=ajoutService" class="btn btn-sm btn-info">Ajouter</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-center text-uppercase">
                    <h2>Liste des Services</h2>
                </div>
                <div class="card-body">
                    <table class="table-info table">
                        <tr>
                            <th>#</th>
                            <th>Nom</th>
                            <th colspan="2">Actions</th>
                        </tr>
                        <?php
                        foreach ($services as $s){
                            ?>
                            <tr>
                                <td><?= $s['idService'] ?></td>
                                <td><?= $s['nomService'] ?></td>
                                <td colspan="2"><a href="/Pointage/accueil.php?p=modifierService&idService=<?= $s['idService']?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a href="views/service/indexService.php?idServiceSup=<?= $s['idService']?>" class="btn btn-sm btn-danger">Supprimer</a></td>
                            </tr>
                        <?php  }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>