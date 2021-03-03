<?php
    require_once 'bdd.php';

    function getPointages(){
        $req = "SELECT * FROM pointage ORDER BY idP";
        global $db;

        return $db->query($req)->fetchAll();
    }

    function delette($id) {
        global $db;

        return $db->exec("DELETE FROM pointage WHERE idP = $id");
    }

    function add($type,$date,$heure,$idemp,$heures){
        global $db;
        $req = "INSERT INTO pointage(typeP,dateP,heureP,heureS,idEmp) VALUES ('$type','$date','$heure','
        $heureS','idemp')";
        return $db->exec($req);
    }

    function update($type,$id){
        global $db;
        $req = "UPDATE pointage SET typeP = '$type' WHERE idP = $id";
        return $db->exec($req);
    }

    function findPointageById($id){
        global $db;
        $req = "SELECT * FROM pointage WHERE idP = $id";
        return $db->query($req)->fetch();
    }