



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
        

        $inser=  $con->prepare("INSERT INTO hopistal SET Nom=?, DecretCreation=?, Email=?,Telephone=?,Code=?,Password=?, ville=?");
        $inser->execute([$_POST['nom'],$_POST['metier'],$_POST['mail'],$_POST['tel'],$_POST['code'],$_POST['pass'],$_POST['ville']]);
      /*  die('livre bien creer');*/
        $_SESSION['status'] = "hopital Ajouter avec succes";
        // move_uploaded_file($_FILES["piece"]["tmp_name"],"image/".$_FILES['piece']['name']);
        echo "<script> alert(' Creer avec  avec succes 😅😅😅😅😅😅')</script>";
        echo "<script> window.location.href='admin1.php'</script>";
    }
}

?>

<?php /*require ("header.php");*/?>

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
                            <input type="text" name="nom" class="prenoms">
                            <label for="nom">Nom de l'hopital</label>
                            <div class="message1">
                                !Veuillez remplir ce champ
                             </div>
                        </div>
                        <div class="villes">
                            <input type="text" name="ville" class="noms">
                            <label for="lastname">ville(s) ou se trouvent l'hopital</label>
                            <div class="message2">
                                !Veuillez remplir ce champ
                             </div>
                        </div>
                     </div>
                 </div>
                 <div class="input">
                     <label for="telephone">Telephone</label>
                     <input type="tel" name="tel"  class="telephone">
                     <div class="message3">
                        !Veuillez remplir ce champ
                     </div>
                 </div>
                 <div class="input">
                     <label for="email">Email</label>
                     <input type="email" name="mail" class="email" >
                     <div class="message4">
                        !Veuillez remplir ce champ
                     </div>
                     <div class="message10">
                        !Veuillez entrer une adresse email comforme
                     </div>
                 </div>
                 <div class="input">
                     <label for="password">Mot de passe</label>
                     <input type="motdepasse" name="pass" class="motdepasse">
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
                     <input type="text" name="metier" class="metier" >
                     <div class="message7">
                        !Veuillez remplir ce champ
                     </div>
                 </div>

                 <div class="input">
                     <label for="decret">Code</label>
                     <input type="text" name="code" class="metier" >
                     <div class="message7">
                        !Veuillez remplir ce champ
                     </div>
                 </div>
             </div>
             <!-- <div class="bouton"  onclick="verifierInputs()" >
                <div class="login" >
                   <button type="submit" class="btn btn-outline-primary " onclick="load()" id="save">Enregistrer</button>
                   <button type="submit" class="btn btn-outline-primary " onclick="load()" id="save">Supprimer</button>
                </div>
            </div> -->
            <div class="bouton"  onclick="verifierInputs()" >
            <div class="row mb-3" onclick="verifierInputs()">
            <div class="offset-sn-3 col-sm-3 d-grid">
                <button type="submit" class="btn btn-primary"  onclick="load()" id="save">Enregistrer</button>
            </div>
            <div class="col-sm-6">
                 <a href="#" class="btn btn-outline-primary" role="button"  onclick="load()" id="save">Supprimer</a>
            </div>
           </div>
</div>
            
        </div>
    </form>
   
</body>
</html>
