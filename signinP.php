<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="sign.css">
    <script  defer src="verif.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="Baskend/ParticulierInscription.php" method="post">
        <div class="formulaire">
            <div class="logo">
                <img src="images/csm_Logo_Ascoma_08008a0f7c.jpg" alt="">
             </div>
             <div class="notes">
                <p>
                    Veuillez prendre 5 a 10 minutes pour remplir ce formulaire. Oui nous savons que cela peut etre long mais nous avons besoin de ces informations pour mieux vous servir
                </p>
             </div>
             <div class="information">
                 <div class="input">
                     <label for="username">Nom</label>
                     <div class="inputname">
                        <div class="prenom">
                            <input type="text" name="prenomutilisateur" class="prenoms">
                            <label for="lastname">Prenom</label>
                            <div class="message1">
                                !Veuillez remplir ce champ
                             </div>
                        </div>
                        <div class="nom">
                            <input type="text" name="nomutilisateur" class="noms">
                            <label for="lastname">Nom de famille</label>
                            <div class="message2">
                                !Veuillez remplir ce champ
                             </div>
                        </div>
                     </div>
                 </div>
                 <div class="input">
                     <label for="telephone">Telephone</label>
                     <input type="tel" name="telephone"  class="telephone">
                     <div class="message3">
                        !Veuillez remplir ce champ
                     </div>
                 </div>
                 <div class="input">
                     <label for="email">Email</label>
                     <input type="email" name="email" class="email" >
                     <div class="message4">
                        !Veuillez remplir ce champ
                     </div>
                     <div class="message10">
                        !Veuillez entrer une adresse email comforme
                     </div>
                 </div>
                 <div class="input">
                     <label for="password">Mot de passe</label>
                     <input type="motdepasse" name="motdepasse" class="motdepasse">
                     <div class="message5">
                        !Veuillez remplir ce champ
                     </div>
                 </div>
                 <div class="input">
                     <label for="Confirmer">Confirmer</label>
                     <input type="text" name="confirmer" class="confirmer" >
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
                     <label for="metier">Metier</label>
                     <input type="text" name="metier" class="metier" >
                     <div class="message7">
                        !Veuillez remplir ce champ
                     </div>
                 </div>

                 <div class="file">

                <label for="pieces">Join Pieces</label><br>
                <input type="file" name="piece" class="piece">
                <div class="message7">
                    !Veuillez remplir ce champ
                </div> 

                 </div>
             </div>
             <div class="bouton"  onclick="verifierInputs()" >
                <div class="login" >
                    <input type="submit" name="submit" value="SOUMETTRE" class="input">
                </div>
            </div>
        </div>
    </form>
</body>
</html>