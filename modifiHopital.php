
<?php
//require("header.php");
require "bdconnexion.php";
$title="INSCRIPTION";
require "function.php";

/*$modif = intval ($_POST['codeLivre']);*/

if (isset($_POST['Modifier'])){
   $modif = intval ($_GET['IdHopistal']);

    // Récupération des valeurs du formulaire
    $nom = $_POST['nom'];
    $decret = $_POST['metier'];
    $mail = $_POST['mail'];
    $tel = $_POST['tel'];
    $code = $_POST['code'];
    $pass = $_POST['pass'];
    $ville = $_POST['ville']; 
  /*  $modif = $_POST['codelivre'];*/
    // Préparation de la requête
    $req = $con->prepare('UPDATE hopistal SET  Nom = :Nom, DecretCreation = :DecretCreation, Email= :Email,Telephone = :Telephone, Code= :Code, Password = :Password, ville = :ville, WHERE IdHopistal = :IdHopistal');

    $req->bindParam('Nom',$nom,PDO::PARAM_STR);
    $req->bindParam('DecretCreation',$decret,PDO::PARAM_STR);
    $req->bindParam('Email',$mail,PDO::PARAM_STR);
    $req->bindParam('Telephone',$tel,PDO::PARAM_STR);
    $req->bindParam('Code',$code,PDO::PARAM_STR);
    $req->bindParam('Password',$pass,PDO::PARAM_STR);
    $req->bindParam('ville',$ville,PDO::PARAM_STR);
    $req->bindParam('IdHopistal', $modif,PDO::PARAM_STR);

    $req->execute();
    echo "<script> alert('modification reussi avec succes ')</script>";
    echo "<script> window.location.href='admin.php'</script>";

}
$cont=1;


$modif= intval ($_GET['IdHopistal']);
$req = $con->prepare('SELECT * FROM  hopistal  WHERE  IdHopistal = :IdHopistal');
$req->bindParam('IdHopistal', $modif,PDO::PARAM_STR);
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
    <link rel="stylesheet" href="sign.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <script  defer src="verif.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form  method="post">
    <?php if ( $req->rowCount()>0):?>
        <?php foreach($rows as $row):?>
    <input type="hidden" name="IdHospital" maxlength="50"  class="form form-control" value="<?= htmlentities($row->IdHopistal)?>">
        <div class="formulaire">
            <div class="logo">
                <img src="image/csm_Logo_Ascoma_08008a0f7c.jpg" alt="">
             </div>
             <div class="notes">
                <p>
                    Veuillez prendre 5 a 10 minutes pour remplir ce formulaire. Oui nous savons que cela peut etre long mais nous avons besoin de ces informations pour mieux vous servir
                </p>
             </div>
             <div class="information">
                 <div class="input">
                     <label for="username">Nom et Villes</label>
                     <div class="inputname">
                        <div class="nomsH">
                            <input type="text" name="nom" class="prenoms" value="<?= htmlentities($row->Nom)?>">
                            <label for="nom">Nom de l'hopital</label>
                            <div class="message1">
                                !Veuillez remplir ce champ
                             </div>
                        </div>
                        <div class="villes">
                            <input type="text" name="ville" class="noms" value="<?= htmlentities($row->ville)?>">
                            <label for="lastname">ville(s) ou se trouvent l'hopital</label>
                            <div class="message2">
                                !Veuillez remplir ce champ
                             </div>
                        </div>
                     </div>
                 </div>
                 <div class="input">
                     <label for="telephone">Telephone</label>
                     <input type="tel" name="tel"  class="telephone" value="<?= htmlentities($row->Telephone)?>">
                     <div class="message3">
                        !Veuillez remplir ce champ
                     </div>
                 </div>
                 <div class="input">
                     <label for="email">Email</label>
                     <input type="email" name="mail" class="email" value="<?= htmlentities($row->Email)?>" >
                     <div class="message4">
                        !Veuillez remplir ce champ
                     </div>
                     <div class="message10">
                        !Veuillez entrer une adresse email comforme
                     </div>
                 </div>
                 <div class="input">
                     <label for="password">Mot de passe</label>
                     <input type="motdepasse" name="pass" class="motdepasse" value="<?= htmlentities($row->Password)?>">
                     <div class="message5">
                        !Veuillez remplir ce champ
                     </div>
                 </div>
                 <div class="input">
                     <label for="Confirmer">Confirmer</label>
                     <input type="text" name="con" class="confirmer" >
                     <div class="message6">
                        !Veuillez remplir ce champ
                     </div>
                     <div class="message8">
                        !Veuillez entrer le meme mot de passe
                     </div>
                     <div class="message9">
                        !Veuillez confirmer votre mot de passe
                     </div>
                 </div>
                 <div class="input">
                     <label for="decret">Decret de creation</label>
                     <input type="text" name="metier" class="metier"value="<?= htmlentities($row->DecretCreation)?>">
                     <div class="message7">
                        !Veuillez remplir ce champ
                     </div>
                 </div>

                 <div class="input">
                     <label for="decret">Code</label>
                     <input type="text" name="code" class="metier" value="<?= htmlentities($row->Code)?>">
                     <div class="message7">
                        !Veuillez remplir ce champ
                     </div>
                 </div>
             </div>
             <div class="bouton"  onclick="verifierInputs()" >
                <div class="login" >
                   <button type="submit" class="btn btn-outline-primary " onclick="load()" id="save" name="Modifier">Modifier</button>
                </div>
            </div>
        </div>
        <?php $cont++;   endforeach ?>
        <?php endif ?>
    </form>
   
</body>
</html>