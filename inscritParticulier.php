

<?php

session_start(); 
//require("header.php");
require 'bdconnexion.php';
$title="INSCRIPTION";
function debug($variable)
{
    echo '<pre>' . print_r($variable, true) . '<pre>';
}

// 

//     $erros=array();
//     if (!empty($_POST['mail']) || preg_match('/^\d{3}-\d{3}-\d{6}$/',$_POST['mail'])){
//         /* $erros['username']="votre nom n'est pas vallide (numerique)";*/
//     }else{
//         require 'bdconnexion.php';
//         $req=$con->prepare('SELECT IdParticulier FROM particulier WHERE Email=?');
//         $req->execute([$_POST['mail']]);
//         $user=$req->fetch();
//         if ($user){
//             $erros['mail']=" desoler ce isbn est deja pris";

//         }

//     }
//     /*    debug($erros);*/


//     if (empty($_POST['piece']) || !filter_var($_POST['piece'])){
//         /* sava retourner True si la variable correspond et false sinon*/
//         ;
//         die( $erros['piece']= "votre piece n'est pas bon ou vide");

//     }else{
//         require 'bdconnexion.php';
//         $req=$con->prepare('SELECT IdParticulier FROM particulier WHERE Pieces=?');
//         $req->execute([$_POST['piece']]);
//         $user=$req->fetch();
//         if ($user){
//             $erros['piece']=" desoler changer votre piece cas il est deja utiliser";

//         }
//     }

    //debug($erros);

    if ($_POST){

    if (empty($erros)){
        require 'bdconnexion.php';
        $image = $_FILES['piece']['name'];

        $inser=  $con->prepare("INSERT INTO particulier SET Nom=?, Prenom=?, Email=?,mot_de_passe=?,Metier=?,Telephone=?,Pieces=?");
        $inser->execute([$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['pass'],$_POST['metier'],$_POST['tel'],$image]);
      /*  die('livre bien creer');*/
        $_SESSION['status'] = "particulier Ajouter avec succes";
        move_uploaded_file($_FILES["piece"]["tmp_name"],"image/".$_FILES['piece']['name']);
        echo "<script> alert(' Creer avec  avec succes 😅😅😅😅😅😅')</script>";
        echo "<script> window.location.href='admin.php'</script>";
    }
}

?>



<?php /*require ("header.php");*/?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <title>Document</title>
</head>
<body>
<section>
    <div class=" contact-from d-flex justify-content-center">

        <form action="" method="post" enctype="multipart/form-data">
        <h1 class="p-3" > ENGREGISTRER <span style="color: red">Particulier</span></h1> <br>

        <div class="row mb-3">
            <label for="" class = "col-sm-3 col-form-label">Nom</label>
            <div class="col-sm-6">
                 <input type="text" class ="form-control" name="nom" maxlength="50">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class = "col-sm-3 col-form-label">Prenom</label>
            <div class="col-sm-6">
                 <input type="text" class ="form-control" name="prenom" >
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class = "col-sm-3 col-form-label">Email</label>
            <div class="col-sm-6">
                 <input type="mail" class ="form-control" name="mail" >
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class = "col-sm-3 col-form-label">Password</label>
            <div class="col-sm-6">
                 <input type="password" class ="form-control" name="pass">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class = "col-sm-3 col-form-label">Metier</label>
            <div class="col-sm-6">
                 <input type="text" class ="form-control" name="metier">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class = "col-sm-3 col-form-label">Telephone</label>
            <div class="col-sm-6">
                 <input type="text" class ="form-control" name="tel">
            </div>
        </div>
        <div class="row mb-3">
            <label for="" class = "col-sm-3 col-form-label">Pieces</label>
            <div class="col-sm-6">
                 <input type="file" class ="form-control" name="piece">
            </div>
        </div>
            <div class="row mb-3">
            <div class="offset-sn-3 col-sm-3 d-grid">
                 <button type="submit" class="btn btn-outline-primary " onclick="load()" id="save">Enregistrer</button>
            </div>
            <div class="col-sm-6">
                  <a href="" class="btn btn-outline-danger" type="reset">supprimer</a>
                  <a href="formulaire.html" class="btn btn-outline-danger" type="reset">Vos ayantsDroit</a>
            </div>
        </div>
        </form>
    </div>
</section>
</body>
</html>
