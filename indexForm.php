

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

        $inser=  $con->prepare("INSERT INTO employe SET Nom=?, Prenom=?, Email=?,Matricule=?,Telephone=?, IdEntreprise=?");
        $inser->execute([$_POST['nom'],$_POST['prenom'],$_POST['mail'],$_POST['pass'],$_POST['ide'],$_POST['tel']]);
      /*  die('livre bien creer');*/
        $_SESSION['status'] = "particulier Ajouter avec succes";
        move_uploaded_file($_FILES["piece"]["tmp_name"],"image/".$_FILES['piece']['name']);
        echo "<script> alert(' Creer avec  avec succes 😅😅😅😅😅😅')</script>";
        echo "<script> window.location.href='admin.php'</script>";
    }
}

?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,400,700" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <title>Adding Form </title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: "Poppins", sans-serif;
        }
        body{
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 20px;
            /*background: rgb(130, 106, 251);*/
            
  background: #fff center;
  background-size: auto;
  padding-bottom: 3rem;
  /* Rectangle 10: */
 

        }

        .container{
            position: relative;
            max-width: 700px;
            width: 100%;
            background: rgb(133, 133, 153, 1.0);
            padding: 25px;
            border-radius: 8px;
            /*box-shadow: 0 0 15px rgb(0,0,0,0.1);*/
        }
        .container header{
            font-size: 2.5rem;
            color: #333;
            text-align: center;
            font-weight: 500;
            text-transform: uppercase;
        }
        .container form{
            margin-top: 30px;
        }
        .form .input-box{
            width: 100%;
            margin-top: 20px;
        }
        .input-box label{
            color: #333;
        }
        .form .input-box input{
            position: relative;
            height: 50px;
            width: 100%;
            outline: none;
            font-size: 1rem;
            color: #707070;
            margin-top: 1px solid #ddd;
            border-radius: 6px;
            padding: 0 15px;
        }
        .form .column{
            display: flex;
            column-gap: 15px;
        }
        .form .gender-box{
            margin-top: 20px;
        }
        .gender-box h3{
            color: #333;
            font-size: 1rem;
            font-weight: 400;
            margin-bottom: 8px;
        }

        .form :where(.gender-option, .gender){
            display: flex;
            align-items: center;
            column-gap: 50px;
            flex-wrap: wrap;

                }
                .form .gender{
                    column-gap: 5px;
                    cursor: pointer;
                }
                .gender input{
                    accent-color: #0a007e;
                }
                .form:where(.gender input, .gende label){
                    cursor: pointer;
                }

                .form :where(.gender-option, .gender){
                    row-gap: 15px;
                }
                
                .form button{
                    height: 55px;
                    width: 100%;
                    color: #fff;
                    font-size: 1rem;
                    border: none;
                    margin-top: 30px;
                    cursor: pointer;
                    font-weight: 400px;
                    transition: all 0.2s ease;
                    background-color: #00a87e;
                }
                .form button:hover{
                    background-color: #0a007e;
                }
        /***************/
        @media screen and (max-width: 500px){
            .form .column {
                flex-wrap;
            }
        }

    </style>

</head>
<body>
    <section class="container">
        <header>Ajouter un employe</header>
        <form action="#" class="form">
            <div class="input-box">
                <label >Nom Prenom</label>
                <input type="text" placeholder="Entrer le nom et le prenom" required name="nom">
            </div>
            <div class="input-box">
                <label>Adresse Email</label>
                <input type="text" placeholder="Entrer votre mail" required name="mail">
            </div>
            <div class="input-box">
                <label>IdEntreprise</label>
                <input type="text" placeholder="id" required name="ide">
            </div>
            <div class="input-box">
                <label>Matricule</label>
                <input type="text" placeholder="Entrer votre matricule" required name="metier">
            </div>

            <div class="column">
                <div class="input-box">
                    <label>Numero Telephone</label>
                    <input type="text" placeholder="Entrer le numero " required name="tel">
                </div>
                <div class="input-box">
                    <label>Prenom</label>
                    <input type="text" placeholder="Entrer la date de naissance" required name="prenom">
                </div>
            </div>
            <div class="gender-box">
              
                    
                <div class="gender">
                    <input type="radio" id="check-feminin" name="gender">
                    <label for="check">Feminin</label>
                </div>
            </div>

            <div class="row mb-3">
            <div class="offset-sn-3 col-sm-3 d-grid">
                 <button type="submit" class="btn btn-outline-primary " onclick="load()" id="save">Enregistrer</button>
            </div>
            <div class="col-sm-6">
                  <a href="" class="btn btn-outline-danger" type="reset">supprimer</a>
            </div>
    </div>
        </form>
    </section>
</body>
</html>