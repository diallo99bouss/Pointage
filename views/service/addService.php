<?php
//Ajout d'un profil
if(isset($_POST['btnAddService'])){
    extract($_POST);
    if (ajouter($nom) == 1){
        header("location:/Pointage/accueil.php?p=ajoutService");
    }
}
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header blue lighten-4 text-center text-uppercase">
                    <h2>Nouveau Service</h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">NOM : </label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="nom" class="form-control">
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