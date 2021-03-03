<?php
    require_once 'bdd.php';

    function getServices(){
        $req = "SELECT * FROM service ORDER BY idService";
        global $db;

        return $db->query($req)->fetchAll();
    }

    function supprimer($id) {
        global $db;

        return $db->exec("DELETE FROM service WHERE idService = $id");
    }

    function ajouter($nom){
        global $db;
        $req = "INSERT INTO service(nomService) VALUES ('$nom')";
        return $db->exec($req);
    }

    function modifier($nom,$id){
        global $db;
        $req = "UPDATE service SET nomService = '$nom' WHERE idService = $id";
        return $db->exec($req);
    }

    function findServiceById($id){
        global $db;
        $req = "SELECT * FROM service WHERE idService = $id";
        return $db->query($req)->fetch();
    }