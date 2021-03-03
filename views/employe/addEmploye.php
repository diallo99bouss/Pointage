<div class="container mt-5">

    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4 font-weight-bold">
                Nouvel employe
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mt-2 offset-4">
                        <div class="col-md-2 text-center">
                            <label for="numero" class="h5">NUMERO</label>
                        </div>
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="numero" value="<?= $numeroGenere ?>" readonly   >
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">NOM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="nom">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="prenom" class="h5">PRENOM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="prenom">
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="tel" class="h5">TELEPHONE</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="tel">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="adresse" class="h5">ADRESSE</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="adresse">
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="login" class="h5">LOGIN</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" class="form-control" name="login">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="service" class="h5">Service</label>
                        </div>
                        <div class="col-md-4">
                            <select name="service" class="form-control">
                                <option value="" disabled selected>-- Choisir le service --</option>
                                <?php
                                
                                    foreach ($services as $s){
                                        ?>
                                        <option value="<?= $s['idService'] ?>"><?= $s['nomService'] ?></option>
                                    <?php }
                                ?>
                            </select>
                        </div>

                    </div>

                    <div class="row">
                        <div class="col-md-4 offset-5 mt-4">
                            <input type="submit" name="btnAddEmploye" class="btn btn-md btn-info">
                        </div>
                    </div>
                </form>
            </div>
        </div>

    </div>

</div>
<?php

    if  (isset($_POST['btnAddEmploye'])){
        extract($_POST);
        if (ajouterEmp($numero,$nom,$prenom,$tel,$adresse,$login,"passer",$service) == 1){
            echo '<div class="col-md-10 offset-2 blue-text mt-2 h2">Employé ajouté avec succès !</div>';
        }else{
            echo '<div class="col-md-10 offset-2 red-text mt-2 h2">Erreur lors de l\'ajout !</div>';

        }
    }