<?php
    require_once '../../model/agentModel.php';

    extract($_POST);


    $result = addagent($nom,$prenom,$salaire,$commission);

    header("location:../../view/agent/liste.php");






