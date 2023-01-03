<?php
    require_once 'config.php';

    function addagent($nom,$prenom,$salaire,$commission){
        $sql = "INSERT INTO agent VALUES (null,'$nom','$prenom','$salaire,'$commission') ";


        $connex = getConnexion();
    
        return $connex->exec($sql);
    }
    

    function listeagent(){
        $connexion = getConnexion();
    
        $un_agent= $connexion->query("select * from agent ");
        return $un_agent;
    }

    function update($id, $nom, $prenom, $salaire, $commission){
        $sql = "UPDATE agent SET nom ='$nom', prenom ='$prenom', salaire ='$salaire',commission ='$commission'  where id = $id";
        $connex = getConnexion();
        return $connex->exec($sql); 
    }