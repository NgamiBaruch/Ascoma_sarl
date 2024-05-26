

<?php

include("adminHopital.php"); 

// function est_connecter(){
//     if (session_status() === PHP_SESSION_NONE){
//         session_start();
//     }
// return  !empty($_SESSION['email']);

// }

// function force_utilisateur_a_connecte()
// {
//     session_start();
//     if (!est_connecter()) {
//         header('Location: admin_Login.php');
//         exit;
//     }

// }

// function ajoute_vue ()
// {
//     $fichier = dirname(__DIR__).DIRECTORY_SEPARATOR.'/data'.DIRECTORY_SEPARATOR.'compteur';

//     $fichier_jounalier=$fichier.'-'.date("y-m-d");

//     incrementer_compteur($fichier);
//     incrementer_compteur($fichier_jounalier);
 
// }

// function incrementer_compteur(string $fichier)
// {
//     $compteur = 1;
//     if (file_exists($fichier)) {
//         $compteur = (int)file_get_contents($fichier);
//         $compteur++;
//     }
//     file_put_contents($fichier,  $compteur);
// }


// function nbre_vue()
// {
//     $fichier=dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compteur';
//     return file_get_contents($fichier);
// }





/*session_start();
if (!isset($_SESSION['email'] )) {
    header('Location: admin_Login.php');
    exit;
}*/

// // Déconnexion
// if (isset($_GET['logout'])) {
//     session_destroy(); header('Location: admin_Login.php');
//     exit;
// }

// function ajoute ()
// {
//     $user = dirname(__DIR__).DIRECTORY_SEPARATOR.'/data'.DIRECTORY_SEPARATOR.'compte';

//     $user_jounalier=$user.'-'.date("y-m-d");

//     incrementer_compte($user);
//     incrementer_compte($user_jounalier);
   
// }

// function incrementer_compte(string $user)
// {
//     $compteur = 1;
//     if (file_exists($user)) {
//         $compteur = (int)file_get_contents($user);
//         $compteur++;
//     }
//     file_put_contents($user,  $compteur);
// }


// function vue()
// {
//     $user=dirname(__DIR__).DIRECTORY_SEPARATOR.'data'.DIRECTORY_SEPARATOR.'compte';
//     return file_get_contents($user);
// }

/*require 'session_admin.php';*/
//include("function/auth.php");
//force_utilisateur_a_connecte();
/*header("Location: admin_Login.php");*/
//require_once 'header.php';
//require_once "../project/function/compteur.php";
//require_once "../project/function/compteurUser.php";
//require_once '../bdconnexion.php';
$host = "localhost";
$dbname = "ascoma2";
$root = "root";
$password = "";
try {
    $con = new PDO("mysql:host=$host;dbname=$dbname", $root, $password);
    $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $con->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
  /*  echo "bonne connexion";*/
} catch (PDOException $PDOException) {
    echo "mauvaise connexion " . $PDOException->getMessage();
}

// $total= nbre_vue();
// $taux=vue();


?>



<?php
$rep = $con->prepare("SELECT * FROM particulier");
try {
    $rep->execute();
    $rows = $rep->fetchAll(PDO::FETCH_OBJ);
} catch (PDOException $e) {
    echo "Erreur d'exécution de la requête : ". $e->getMessage();
}
$cont=1;


if (isset($_GET['IdParticulier'])){
    $modif= intval ($_GET['IdParticulier']);
    $req = $con->prepare('DELETE FROM   particulier  WHERE  IdParticulier = :IdParticulier');
    $req->bindParam('IdParticulier', $modif,PDO::PARAM_STR);
    $req->execute();

    echo "<script> alert('Suppression reussi avec succes 😭😭😭😭😭😭')</script>";
    echo "<script> window.location.href='admin.php'</script>";
}


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel = "stylesheet" href = "https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="style.css">
    <title>Admin_dashboard</title>
</head>
<body>


<div class="container my-5">
    <div class="row">
        <div class="col-md-12">
            <a href="inscritParticulier.php" class=" btn btn-primary mt-lg-5">new Particulier</a><br><br>
            <div class=" table-responsive">
                <table id="mytable" class="table table-success table-responsive table-striped">

                    <thead>

                    <tr>
                        <th scope="col"> IdParticulier </th>
                        <th scope="col"> Nom</th>
                        <th scope="col"> Prenom </th>
                        <th scope="col"> Email </th>
                        <!-- <th scope="col"> Password </th> -->
                        <th scope="col"> Metier</th>
                        <th scope="col">Telephone</th>
                        <th scope="col">Pieces </th>
                        <th scope="col">Action</th>
                        <!-- <th scope="col"> ACTION </th> -->
                    </tr>
                    </thead>
                    <?php if ( $rep->rowCount()>0):?>
                    <?php foreach($rows as $row):?>
                    <tbody>
                    <tr>
                        <td><?=htmlentities($row->IdParticulier)?></td>
                        <td><?=htmlentities($row->Nom)?></td>
                        <td><?=htmlentities($row->Prenom)?></td>
                        <td><?=htmlentities($row->Email)?></td>
                        
                        <td><?php echo htmlentities($row->Metier) ?></td>
                        <td><?=htmlentities($row->Telephone)?></td>
                        <td>
                            <img src="<?php echo "image/".$row->Pieces;?>" width="100" height="50" alt="image_Livre">
                        </td>
                        <td> <a href="modifieParticulier.php?IdParticulier=<?=htmlentities($row->IdParticulier)?>" class="btn btn-outline-primary btn-sm" > Edit</a>
                            <a href="admin.php?IdParticulier=<?=htmlentities($row->IdParticulier)?>" class="btn btn-danger"  onclick="return confirm ('veux-tu vraiment supprimer ?')"> Delete</a>

                        </td>
                    </tr>

                    </tbody>
                        <?php $cont++;   endforeach ?>
                    <?php endif ?>
                </table>

            </div>


        </div>


    </div>

</div>

</body>
</html>




