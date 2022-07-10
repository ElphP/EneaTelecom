<?php include("form_php.php");?>


<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Enea Telecom - Contact</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="stylesheet" type="text/css" href="Enea.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Magra&family=Oxygen&display=swap" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex,nofollow">

</head>

<body onload="changeStyleForm()">
    <nav>
        <img class="logo" src="enea.png" alt="logo_enea" />
        <button class="burger">
            <span class="bar"></span>
        </button>
        <div class="onglets">
            <section class="o2">
                <a href="index.php">Notre société</a>
                <ul class="ssmenu">
                    <li><a href="index.php">Présentation</a></li>
                    <li><a href="index.php#equip">Notre équipe</a></li>
                </ul>
            </section>
            <section class="o2">
                <a href="offres.php">Nos offres</a>
            </section>
            <section class="o2">
                <a href="realis.php">Nos réalisations</a>
                <ul class="ssmenu">
                    <li><a href="realis.php">Cote d'Ivoire</a></li>
                    <li><a href="realis.php">Burkina Faso</a></li>
                </ul>
            </section>
            <section class="o1">
                <a href="contact.php">Nous contacter</a>
            </section>
        </div>
    </nav>
    <ul class="navbar_lien">
        <li class="navlien"><a href="index.php">Notre société</a></li>
        <li class="navlien"><a href="offres.php">Nos offres</a></li>
        <li class="navlien">
            <a href="realis.php">Nos réalisations</a>
        </li>
        <li class="navlien">
            <a href="contact.php">Nous contacter</a>
        </li>
    </ul>


    <div class="pgContact">
        <img class="fond" src="telecom3.jpg" alt="telecom" />
        <div class="titre">
            <h1>Vous souhaitez nous joindre par téléphone?</h1>
            <br />
            <h1>Nous envoyer un mail? C'est par ici!</h1>
        </div>
        <div class="contact">
            <div class="phone">
                <img class="icon" src="phone-call.png" alt="phoneIcon" />

                <div class="numeros">
                    <div class="container">
                        <div class="box1">Côte d'Ivoire</div>
                        <div class="box2">Burkina Faso</div>
                        <div class="box3">Administration (France)</div>
                        <a class="phone1" href="tel:+22655335933">Côte d'Ivoire</a>
                        <a class="phone2" href="tel:+22507890586">Burkina Faso</a>
                        <a class="phone3" href="tel:+33621318171">Administration (France)</a>
                    </div>
                </div>
            </div>
            <div class="mail">
                <div class="center_div"><img class="icon" src="email.png" alt="mailIcon" /></div>

                <form action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>" method="POST">
                    <span class="<?php echo $color_mess ?>"><?php echo $mess_ok ?></span>
                    <input type="text" name="nom" id="nom" placeholder="Votre nom" value="<?php echo $name ?>" />
                    <span class="error"><?php echo $name_error ?></span>
                    <input type=" text" name="email" id="email" placeholder="Votre E-mail"
                        value="<?php echo $mail ?>" />
                    <span class="error"><?php echo $mail_error ?></span>
                    <!-- p o t   de   m i e l 1  -->
                    <input type=" text" name="website" id="website" placeholder="Ne rien écrire ici!" tabindex="-1"
                        autocomplete="off" value="<?php echo $website ?>" />
                    <span class="error"><?php echo $website_error ?></span>
                    <input type="text" name="sujet" id="sujet" placeholder="Objet" value="<?php echo $objet ?>" />

                    <textarea id=" mess" name="mess" rows="15"
                        placeholder=" Votre message ici"><?php echo $message ?></textarea>
                    <span class=" error"><?php echo $mess_error ?></span>
                    <input id="subForm" type="submit" name="submit" value=" Envoyer" />

                </form>
            </div>
        </div>
    </div>
    <footer>
        <a href=" https://www.flaticon.com/free-icons/phone" title="phone icons">Phone icons created by Creaticca
            Creative Agency - Flaticon</a>
        <a href="https://www.flaticon.com/free-icons/email" title="email icons">Email icons created by
            Uniconlabs -
            Flaticon</a>
    </footer>
    <script src="enea.js"></script>
</body>

</html>