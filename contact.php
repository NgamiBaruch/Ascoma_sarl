

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="styl.css">
</head>
<body>

<header>
        
        <div class="logo">
           <p><span>AS</span>COMA</p>
        </div>
        <ul class="menu">
            <li><a href="acceuil.php">Acceuil</a></li>
            <li><a href="#menu"></a></li>
            <li><a href="#about_us"></a></li>
            <li><a href="#reservation"></a></li>
        </ul>
        <!-- menu rsponsive -->
        <div class="toggle_menu"></div>
    </header>

                
    <!-- reservation -->
    <section id="reservation">
        <h3 class="min_title">Reservation</h3>
        <h2 class="title">Fill this form to make a reservation</h2>
        <form action="" method="post">
            <label for="Your Name">Your Name</label>
            <input type="text">
            <label for="mail">Your Email</label>
            <input type="text">
            <label for="number">Your Number</label>
            <input type="text">
            <label for="reservation">Reservation Date</label>
            <input type="date">
            <input type="submit" value="Make The Reservation">
        </form>
    </section>

<footer>
<div class="service_liste">
    <div class="service">
        <img src="image/clock.png" alt="">
        <h2>Ouverture</h2>
        <p>10h30 a 21h45</p>
        <p>23h45 a 9h30</p>
    </div>
    <div class="service">
        <img src="image/pin.png" alt="">
        <h2>Adresse</h2>
        <p>Douala-Cameroun</p>
        <p>Benin-Cotonou</p>
    </div>
    <div class="service">
        <img src="image/email.png" alt="">
        <h2>Emails</h2>
        <p>email@gmail.com</p>
        <p>your.dish@gmail.com</p>
    </div>
    <div class="service">
        <img src="image/call.png" alt="">
        <h2>Numbers</h2>
        <p>+237 657727514</p>
        <p>+237 678065506</p>
    </div>
    <hr>
</div>
</body>
</html>