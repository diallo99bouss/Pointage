<?php
   require_once 'bdd.php';

function genererNumeroEmploye(){
    global $db;
    $req = "SELECT MAX(idEmploye) FROM employe";
    $res = $db->query($req)->fetch();
    $idMax = $res[0] + 1;
    return 'GP_EMP_'.date('dmY').'_'.$idMax;
}


function findEmpByLogin($login,$mdp){
    global $db;
    $req = "SELECT * FROM employe, service WHERE idServiceS = idService 
    AND login='$login' AND mdp='$mdp'";
    return $db->query($req)->fetch();
}

function ajouterEmp($numero,$nom,$prenom,$tel,$adresse,$login,$mdp,$service){
    $req = "INSERT INTO employe (numeroEmp, nomEmp, prenomEmp, telEmp, adresseEmp, login, mdp, idServiceS)
            VALUES ('$numero','$nom','$prenom','$tel','$adresse','$login','$mdp','$service')";
    global $db;
    return $db->exec($req);
}

function editerEmp($id,$nom,$prenom,$tel,$adresse,$login){
    global $db;
    $req = "
        UPDATE employe
        SET nomEmp='$nom',
        prenomEmp='$prenom',
        telEmp='$tel',
        adresseEmp='$adresse',
        login='$login'
        WHERE idEmploye=$id
    ";
    return $db->exec($req);
}

function supprimerEmp($id){
    global $db;

    return $db->exec("DELETE FROM employe WHERE idEmploye = $id");
}

function getEmployes(){
    global $db;

    return $db->query("SELECT * FROM employe, service WHERE idServiceS = idService")->fetchAll();
}

function findEmployeById($id){
    global $db;
    $req = "SELECT * FROM employe, service WHERE idServiceS = idService 
    AND idEmploye = $id";
    return $db->query($req)->fetch();
}