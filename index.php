<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <title>Enea Telecom - Page d'accueil</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="Enea.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Magra&family=Oxygen&display=swap" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
</head>

<body>
    <nav>
        <img class="logo" src="enea.png" alt="logo_enea" />
        <button class="burger">
            <span class="bar"></span>
        </button>
        <div class="onglets">
            <section class="o1">
                <a href="index.html">L'entreprise</a>
                <ul class="ssmenu">
                    <li><a href="index.html">Présentation</a></li>
                    <li><a href="#equip">Notre équipe</a></li>
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
            <section class="o2">
                <a href="contact.php">Nous contacter</a>
            </section>
        </div>
    </nav>
    <ul class="navbar_lien">
        <li class="navlien"><a href="index.php">L'entreprise</a></li>
        <li class="navlien"><a href="offres.php">Nos services</a></li>
        <li class="navlien">
            <a href="realis.php">Nos réalisations</a>
        </li>
        <li class="navlien">
            <a href="contact.php">Nous contacter</a>
        </li>
    </ul>

    <div class="presentation">
        <img class="fond" src="telecom3.jpg" alt="telecom" />
        <p class="presaccueil">
            <label class="nom"> ENEA TELECOM </label>est une société
            spécialisée dans le déploiement de réseaux de
            télécommunications. Présents sur le marché Ivoirien depuis 2013
            et sur le marché Burkinabé depuis fin 2019, nous sommes experts
            en&nbsp;:
        </p>
        <div class="animation">
            <span class="anim">Engineering</span>
            <span class="anim">Networking</span>
            <span class="anim">Energy</span>
            <span class="anim">Assistance</span>
        </div>
        <hr />
        <p class="presaccueil2">
            <label class="nom"> ENEA TELECOM </label>c'est&nbsp;:
        </p>
        <div class="trypt">
            <div class="encadr">
                <h2>
                    UNE<br />
                    VISION
                </h2>
                <br />
                <p class="text">
                    Se positionner comme des leaders dans les télécoms.
                </p>
            </div>
            <div class="encadr">
                <h2>UNE <br />MISSION</h2>
                <br />
                <p class="text">
                    Tisser des partenariats avec nos clients afin de les
                    accompagner dans la réalisation de leurs objectifs.
                </p>
            </div>
            <div class="encadr">
                <h2>DES <br />VALEURS</h2>
                <br />
                <p class="text">
                    Réactivité, efficacité, rapidité, qualité et flexibilité
                    pour la satisfaction de nos clients.
                </p>
            </div>
        </div>
    </div>
    <div id="equip">

        <img src="equipEneaRS.jpg" alt="L'équipe">
        <div class="equiptext">
            <h2>Notre équipe&nbsp;:</h2>
            <ul class="liste">
                <li>
                    <h3>- Sylvie DJI </h3><br> Directrice Administrative et Commerciale
                </li>
            </ul>
        </div>
    </div>
    <script src="enea.js"></script>
</body>

</html>