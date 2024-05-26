

<?php
//require("header.php");
require "bdconnexion.php";
$title="INSCRIPTION";
require "function.php";

/*$modif = intval ($_POST['codeLivre']);*/

if (isset($_POST['Modifier'])){
   $modif = intval ($_GET['IdParticulier']);

    // Récupération des valeurs du formulaire
    $titre = $_POST['titre'];
    $auteur = $_POST['auteur'];
    $isbn = $_POST['isbn'];
    $ref = $_POST['ref'];
    $stock = $_POST['stock'];
    $prix = $_POST['prix'];
    $metier = $_POST['metier']; 
  /*  $modif = $_POST['codelivre'];*/
    // Préparation de la requête
    $req = $con->prepare('UPDATE particulier SET  Nom = :Nom, Prenom = :Prenom, Email= :Email, mot_de_passe= :mot_de_passe, Metier = :Metier, Pieces = :Pieces, Telephone = :Telephone WHERE IdParticulier = :IdParticulier');

    $req->bindParam('Nom',$titre,PDO::PARAM_STR);
    $req->bindParam('Prenom',$auteur,PDO::PARAM_STR);
    $req->bindParam('Email',$isbn,PDO::PARAM_STR);
    $req->bindParam('mot_de_passe',$ref,PDO::PARAM_STR);
    $req->bindParam('Metier',$metier,PDO::PARAM_STR);
    $req->bindParam('Telephone',$prix,PDO::PARAM_STR);
    $req->bindParam('IdParticulier', $modif,PDO::PARAM_STR);
    $req->bindParam('Pieces',$stock,PDO::PARAM_STR);

    $req->execute();
    echo "<script> alert('modification reussi avec succes 🤪🤪🤪')</script>";
    echo "<script> window.location.href='admin.php'</script>";

}
$cont=1;


$modif= intval ($_GET['IdParticulier']);
$req = $con->prepare('SELECT * FROM  particulier  WHERE  IdParticulier = :IdParticulier');
$req->bindParam('IdParticulier', $modif,PDO::PARAM_STR);
$req->execute();
$rows = $req->fetchAll(PDO::FETCH_OBJ);




// Exécution de la requête
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <title>Ajouter_pARTICULIER</title>
</head>
<body>
<section>

<div class="container my-5">

    <form action="" method="post">
        <?php if ( $req->rowCount()>0):?>
        <?php foreach($rows as $row):?>
        <h1 class="p-3" > Modifier <span style="color: red"> PARTICULIER</span></h1> <br>
        <input type="hidden" name="IdParticulier" maxlength="50"  class="form form-control" value="<?= htmlentities($row->IdParticulier) ?>">
        <label> Nom</label>
        <input type="text" name="titre" maxlength="50"  class="form form-control" value="<?= htmlentities($row->Nom) ?>">

        <label> Prenom</label>
        <input  type="text" name="auteur"  class="form form-control " maxlength="40"value="<?= htmlentities($row->Prenom) ?>">

        <label>Email</label>
        <input   type="mail" name="isbn"  class="form form-control"  value="<?= htmlentities($row->Email)?>"> 

        <label>motPasse</label>
        <input type="text" name="ref" class="form form-control"  value="  <?= htmlentities($row->mot_de_passe) ?>">

        <label>Pieces</label>
        <input type="text" name="stock" class="form form-control" value="<?= htmlentities($row->Pieces) ?>">

        <label>Telephone</label>
        <input type="text" name="prix" class="form form-control"  value="<?= htmlentities($row->Telephone) ?>"><br>


        <label>Metier</label>
        <input type="text" name="metier" class="form form-control"  value="<?= htmlentities($row->Metier) ?>"><br>




        <div class="d-flex justify-content-between ">
            <button type="submit" class="btn btn-outline-primary " name="Modifier" onclick="load()" id="save">Modifier</button>
            <a href="/admin/admin.php">    <button type="reset" class="btn btn-outline-danger ">Retour</button></a><br>
        </div>


                <?php $cont++;   endforeach ?>
        <?php endif ?>

    </form>
</div>


</section>
</body>
</html>