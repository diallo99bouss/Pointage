<?php
session_start();
require_once 'models/employeBD.php';

if(isset($_POST['btnConnecter'])){
    extract($_POST);
    $employe = findEmpByLogin($login,$mdp);
    //var_dump($employe);die;
    if($employe != null){
        $_SESSION['id'] = $employe['idEmploye'];
        $_SESSION['nom'] = $employe['nomEmp'];
        $_SESSION['prenom'] = $employe['prenomEmp'];
        $_SESSION['adresseEmp'] = $employe['adresseEmp'];
        $_SESSION['profil'] = $employe['nomProfil'];
        header("location:/Pointage/accueil.php");
    } else{
        header("location:/Pointage/index.php?erreur");
    }
}

include_once 'header.php';
?>

<div class="container mt-5">
    <div class="col-md-6 offset-3">
        <span class="text-uppercase h1 blue lighten-2 white-text col-md-2 "> Gestion Pointage</span>
    </div>
</div>

<!-- Material form login -->
<div class="card mt-4 container col-md-3">

    <h5 class="card-header aqua-gradient white-text text-center py-4">
        <strong>AUTHENTIFICATION</strong>
    </h5>

    <!--Card content-->
    <div class="card-body px-lg-5 pt-0">

        <!-- Form -->
        <form method="post" class="text-center" style="color: #757575;" action="#!">

            <!-- Email -->
            <div class="md-form">
                <input type="text" name="login" required id="materialLoginFormEmail" class="form-control">
                <label for="materialLoginFormEmail">Nom d'Utilisateur</label>
            </div>

            <!-- Password -->
            <div class="md-form">
                <input type="password" name="mdp"  required id="materialLoginFormPassword" class="form-control">
                <label for="materialLoginFormPassword">Mot de Passe</label>
            </div>


            <!-- Sign in button -->
            <button class="btn blue-gradient btn-rounded my-4 waves-effect z-depth-0" type="submit" name="btnConnecter">Se Connecter</button>

        </form>
        <!-- Form -->

    </div>

</div>
<!-- Material form login -->
<?php
    if (isset($_GET['erreur'])){
        echo '<div class="h2 text-center red-text container col-md-6">Login ou Mot de Passe incorrect !</div>';
    }
?>
<?php
    include_once 'footer.php';
?>
