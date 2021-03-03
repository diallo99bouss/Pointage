<?php
//Ajout d'un profil
if(isset($_POST['btnAddService'])){
    extract($_POST);
    if (ajouter($date,$heure,$heures,$type,$idemp) == 1){
        header("location:/Pointage/accueil.php?p=ajoutPointage");
    }
}
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header blue lighten-4 text-center text-uppercase">
                    <h2>Nouveau Pointage</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                        <div class="col-md-2 text-center">
                            <label for="date" class="h5">Date</label>
                        </div>
                        <div class="col-md-4">
                            <input type="date" class="form-control" name="date">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="heure" class="h5">heure Entree</label>
                        </div>
                        <div class="col-md-4">
                            <input type="time" class="form-control" name="heure">
                        </div> 

                        <div class="col-md-2 text-center">
                            <label for="heure" class="h5">heure Sortie</label>
                        </div>
                        <div class="col-md-4">
                            <input type="time" class="form-control" name="heures">
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="type" class="h5">Type</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="type">
                        </div>
                        <div class="col-md-4">
                            <select name="idemp" class="form-control">
                                <option value="" disabled selected>-- Choisir l'id de l'employé --</option>
                                <?php
                                //require_once '../models/employeBD.php';
                                  $employes=getEmployes();
                                    foreach ($employes as $e){
                                        ?>
                                        <option value="<?= $e['idEmp'] ?>"><?= $e['idEmploye'] ?></option>
                                    <?php }
                                ?>
                            </select>
                        </div>

                    </div>

                            <div class="col-md-3">
                                <input type="submit" value="Enregistrer" name="btnAddService" class="btn btn-primary btn-sm">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>