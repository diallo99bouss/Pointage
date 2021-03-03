<?php 
   
   $numeroEmp = genererNumeroEmploye();
 ?>
<div class="container mt-5">

    <div class="col-md-10 offset-1">
        <div class="card">
            <div class="card-header blue lighten-4 text-center text-uppercase h4">
                edition de l'employé N° <b><?= $employeAModifier['numeroEmp'] ?></b>
            </div>
            <div class="card-body">
                <form action="" method="post">
                    <div class="row mt-2 offset-4">

                        <div class="col-md-6">
                            <input type="hidden" class="form-control" name="id" value="<?= $employeAModifier['idEmploye'] ?>"   >
                        </div>

                    </div>
                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="nom" class="h5">NOM</label>
                        </div>
                        <div class="col-md-4">
                            <input type="text" value="<?= $employeAModifier['nomEmp'] ?>" class="form-control" name="nom">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="prenom" class="h5">PRENOM</label>
                        </div>
                        <div class="col-md-4">
                            <input value="<?= $employeAModifier['prenomEmp'] ?>" type="text" class="form-control" name="prenom">
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="tel" class="h5">TELEPHONE</label>
                        </div>
                        <div class="col-md-4">
                            <input value="<?= $employeAModifier['telEmp'] ?>" type="text" class="form-control" name="tel">
                        </div>
                        <div class="col-md-2 text-center">
                            <label for="adresse" class="h5">ADRESSE</label>
                        </div>
                        <div class="col-md-4">
                            <input value="<?= $employeAModifier['adresseEmp'] ?>" type="text" class="form-control" name="adresse">
                        </div>

                    </div>

                    <div class="row mt-4">
                        <div class="col-md-2 text-center">
                            <label for="login" class="h5">LOGIN</label>
                        </div>
                        <div class="col-md-4">
                            <input value="<?= $employeAModifier['login'] ?>" type="text" class="form-control" name="login">
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
                                    <option <?= ($s['idService']==$employeAModifier['idService']) ? 'selected' : ''  ?> value="<?= $s['idService'] ?>"><?= $s['nomService'] ?></option>
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
    if (editerEmp($id,$nom,$prenom,$tel,$adresse,$login,$service) == 1){
        header('location:/Pointage/accueil.php?p=gEmploye');
    }else{
        echo '<div class="col-md-10 offset-2 red-text mt-2 h2">Erreur lors de l\'ajout !</div>';                                                                                                                                                                                                                                                                                                                                                                                                                                                      

    }
}