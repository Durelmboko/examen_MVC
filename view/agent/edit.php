<?php 
    require_once '../../model/config.php';
    $id = $_GET['id'];
    $connexion = getConnexion();

    $la_caisse = $connexion->query("select *from agent where id = " .$id)->fetch();
    
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="../../public/css/etudiant.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

</head>
<body>
<?php include('../../index.php') ;?>     
<div class="card">
            <div class="card-header bg-success text-white">
                MODIFICATIONS DES AGENTS
            </div>

<div class="container">
    <form action="../../controllers/agent/editeagentController.php" method="post">
        <input type="hidden" name="id" value="<?php echo $agent["id"]; ?>">
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">NOM:</label>
            <input type="text" name="nom" class="form-control" id="exampleFormControlInput1" value="<?php echo $agent["nom"]; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">prenom:</label>
            <input type="text" name="prenom" class="form-control" id="exampleFormControlInput1" value="<?php echo $agent["prenom"]; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">salaire:</label>
            <input type="text" name="salaire" class="form-control" id="exampleFormControlInput1" value="<?php echo $agent["salaire"]; ?>">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">commision:</label>
            <input type="text" name="commision" class="form-control" id="exampleFormControlInput1" value="<?php echo $agent["commision"]; ?>">
        </div>
       
       
        <input type="submit" value="valider" class="btn btn-primary">
    </form>
</div>
</body>
</html>