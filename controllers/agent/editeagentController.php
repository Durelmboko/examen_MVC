<?php
    require_once '../../model/agentModel.php';

    extract($_POST);
    $result = update($id,$nom,$prenom,$salaire,$commision);

    header("location:../../view/agent/liste.php");

    