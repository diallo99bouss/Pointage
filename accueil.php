<?php
session_start();
require_once 'models/serviceBD.php';
require_once 'models/employeBD.php';
require_once 'models/pointageBD.php';


if (empty($_SESSION)){
    header("location:/Pointage");
}

if (isset($_GET['btnDecon'])){
    session_unset();
    header("location:/Pointage");
}

include_once 'header.php';
include_once 'topBar.php';


if (isset($_GET['p'])){
    switch ($_GET['p']){
        case 'accueil':
            include_once 'bienvenue.php';
            break;
        case 'gService':
            $services = getServices();
            include_once 'views/service/indexService.php';
            break;
        case 'gEmploye':
            $employes = getEmployes();
            include_once 'views/employe/indexEmploye.php';
            break;
        case 'ajoutService':
            include_once 'views/service/addService.php';
            break;
        case 'modifierService' :
            $service = findServiceById($_GET['idService']);
            include_once 'views/service/updateService.php';
            break;

        case 'ajoutEmploye' :
            $numeroGenere = genererNumeroEmploye();
            $services = getServices();
            include_once 'views/employe/addEmploye.php';
            break;

        case 'modifierEmploye':
            $id = $_GET['idE'];
            $employeAModifier = findEmployeById($id);
            $services = getServices();
            include  'views/employe/updateEmploye.php';
            break;
        case 'gPointage':
            $pointages = getPointages();
            include_once 'views/pointage/indexPointage.php';
            break;
        
        case 'ajoutPointage':
            include_once 'views/pointage/addPointage.php';
            break;
        case 'modifierPointage' :
            $pointages = findPointageById($_GET['idP']);
            include_once 'views/poi/updatePointage.php';
            break;
        default:
            include_once 'erreur.php';
    }
} else{
    include_once 'bienvenue.php';
}