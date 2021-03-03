<?php

if(isset($_GET['idPointageSup'])){
    require_once '../../models/pointageBD.php';
    
    $id = $_GET['idPointageSup'];
    if (supprimer($id) == 1){
        header("location:/Pointage/accueil.php?p=gPointage");
    }
}
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-md-4 offset-6">
            <a href="/Pointage/accueil.php?p=ajoutPointage" class="btn btn-sm btn-info">Ajouter</a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header bg-info text-center text-uppercase">
                    <h2>Liste des pointages</h2>
                </div>
                <div class="card-body">
                    <table class="table-info table">
                        <tr>
                            <th>#</th>
                            <th>date</th>
                            <th>heure Entree</th>
                            <th>heure Sortie</th>
                            <th>type</th>
                            <th>id Employe</th>
                            <th colspan="2">Actions</th>
                        </tr>
                        <?php
                        foreach ($pointages as $p){
                            ?>
                            <tr>
                                <td><?= $p['idP'] ?></td>
                                <td><?= $p['dateP'] ?></td>
                                <td><?= $p['heureP'] ?></td>
                                <td><?= $p['heureS'] ?></td>
                                <td><?= $p['typeP'] ?></td>
                                <td><?= strtoupper($p['idEmp']) ?></td>
                                <td colspan="2"><a href="/Pointage/accueil.php?p=modifierPointage&idP=<?= $p['idP']?>" class="btn btn-sm btn-warning">Modifier</a>
                                    <a href="views/pointage/indexPointage.php?idPointageSup=<?= $p['idP']?>" class="btn btn-sm btn-danger">Supprimer</a></td>
                            </tr>
                        <?php  }
                        ?>
                    </table>
                </div>
            </div>
        </div>

    </div>
</div>