<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="connex.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="acceuil.php" method="post">
    <div class="view">
        <div class="ima">
            <img src="images/logimg.png" alt="">
        </div>
        <div class="connecter">

            <div class="acceuil">
                WELCOME
            </div>

            <div class="information">
                <div class="input">
                    <!-- <label for="username">USERNAME</label> -->
                    <input type="text" name="nomutilisateur"  placeholder="USERNAME">
                </div>
                <div class="input">
                    <!-- <label for="password">PASSWORD</label> -->
                    <input type="text" name="motdepasse" placeholder="PASSWORD">
                </div>
            </div>
            <div class="bouton">
                <div class="login">
                    <input type="submit" name = "login" value ="LOG IN" class="input">
                </div>
                <div class="signin">
                <input type="submit" value ="SIGN IN" class="input" formaction="signinP.php">
                </div>
            </div>
        </div>
    </div>


</body>
</form>
</html>