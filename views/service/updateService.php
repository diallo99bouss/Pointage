<?php

//Modification d'un srvice
if (isset($_POST['btnUpService'])){
    extract($_POST);
    if(modifier($nom,$id) == 1){
        header("location:/Pointage/accueil.php?p=gService");
    }
}
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-8 offset-2">
            <div class="card">
                <div class="card-header blue lighten-4 text-center text-uppercase">
                    <h2>Edition du Service </h2>
                </div>
                <div class="card-body">
                    <form action="" method="post">
                        <input type="hidden" name="id" value="<?= $service['idService'] ?>">
                        <div class="row">
                            <div class="col-md-2">
                                <label for="">NOM : </label>
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="nom" value="<?= $service['nomService'] ?>" class="form-control">
                            </div>
                            <div class="col-md-3">
                                <input type="submit" value="Valider" name="btnUpService" class="btn btn-primary btn-sm">
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>