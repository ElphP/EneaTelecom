<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Enea Telecom - Nos offres</title>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <link rel="stylesheet" type="text/css" href="Enea.css" />

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Magra&family=Oxygen&display=swap" rel="stylesheet" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="robots" content="noindex,nofollow">

</head>

<body>
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
            <section class="o1">
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
        <li class="navlien"><a href="index.php">Notre société</a></li>
        <li class="navlien"><a href="offres.php">Nos offres</a></li>
        <li class="navlien"><a href="realis.php">Nos réalisations</a></li>
        <li class="navlien"><a href="contact.php">Nous contacter</a></li>
    </ul>

    <div class="pgOffres">
        <img class="fond" src="telecom3.jpg" alt="telecom" />
        <h1>Nos offres</h1>
        <div class="Offres">
            <div class="contenant">
                <div class="card">
                    <div class="front">
                        <img class="icon" src="iconantena.png" alt="antenaIcon" />
                        <div class="title">
                            Construction & Installation de sites Telecom
                        </div>
                    </div>

                    <div class="back">
                        <h3>Fourniture et Installation de pylônes</h3>
                        <br />
                        <p>Fourniture et installation de petitjean</p>
                    </div>
                </div>
            </div>
            <div class="contenant">
                <div class="card">
                    <div class="front">
                        <img class="icon" src="iconequip.png" alt="equipIcon" />
                        <div class="title">
                            Installation & Mise en service des équipements
                        </div>
                    </div>

                    <div class="back">
                        <h3>Mise en place des équipements</h3>
                        <br />
                        <p>Installation de BTS</p>
                        <p>Installation de RRH 3G et 4G</p>
                        <p>Installation d'antennes panneaux</p>
                        <p>Installation d'antennes FH et ODU's</p>
                    </div>
                </div>
            </div>
            <div class="contenant">
                <div class="card">
                    <div class="front">
                        <img class="icon" src="iconoptic2.png" alt="FiberOpticIcon" />
                        <div class="title">
                            Fourniture & Installation de fibre optique
                        </div>
                    </div>

                    <div class="back">
                        <h3>Installation de fibre optique</h3>
                        <br />
                        <p>Maintenance de fibre optique</p>
                    </div>
                </div>
            </div>
            <div class="contenant">
                <div class="card">
                    <div class="front">
                        <img class="icon" src="iconmaintenance.png" alt="RepairingIcon" />
                        <div class="title">Maintenance des sites</div>
                    </div>

                    <div class="back">
                        <h3>Maintenance de pylônes</h3>
                        <br />
                        <p>Mise en service FH</p>
                        <p>Mise en service ADM</p>
                        <p>Installation des répéteurs</p>
                    </div>
                </div>
            </div>
            <div class="contenant">
                <div class="card">
                    <div class="front">
                        <img class="icon" src="iconenergy.png" alt="EnergyIcon" />
                        <div class="title">Energie</div>
                    </div>

                    <div class="back">
                        <p>
                            <img src="cable.png" alt="electicalCable" />
                            Fourniture et Installation de câble énergie
                        </p>
                        <br />
                        <p>
                            <img src="generator.png" alt="generatorElec" />
                            Fourniture et Maintenance de groupe électrogène
                        </p>
                        <br />
                        <p>
                            <img src="solar.png" alt="solarPanel" />
                            Fourniture et Installation de panneaux solaires
                        </p>
                        <br />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="part2">
        <div class="affichScroll">
            <h2>Valeur ajoutée</h2>
            <br />
            <ul>
                <li>Audit de performance</li>
                <li>Audit de benchmarking</li>
                <li>Site vérifié par drone - Infrastructure</li>
                <li>Analyse et Optimisation 2G/3G/4G/5G</li>
                <li>Reporting Drive Test</li>
                <li>Développement intégration et optimisation</li>
                <li>Formation</li>
                <li>Audit technique</li>
            </ul>
        </div>
        <div class="outils">
            <h2>Des outils innovants</h2>
            <br />
            <ul>
                <li>Drive test</li>
                <li>Benchmarking</li>
                <li>Scanners & Antennes</li>
                <li>Reporting & Troubleshoot</li>
                <li>Mesure de qualité d'expérience en Crowdsourcing</li>
                <li>Dosimètres CEM / Simulateurs CEM</li>
            </ul>
        </div>
    </div>
    <footer></footer>
    <script src="enea.js"></script>
    <script>
    const valAjout = document.querySelector(".affichScroll");
    window.addEventListener('scroll', () => {
        const {
            scrollTop,
            clientHeight
        } = document.documentElement;
        const AffichScrollToTopViewer = valAjout.getBoundingClientRect().bottom;

        if (scrollTop > (scrollTop + AffichScrollToTopViewer).toFixed() - clientHeight * 0.6) {
            valAjout.classList.add("active");
        }

        if (scrollTop < clientHeight * 0.25) {
            valAjout.classList.remove("active");
        }
    })
    </script>
    <noscript>
        <style>
        .affichScroll {
            transform: translateY(0%);
            opacity: 1;
        }
        </style>
    </noscript>
</body>

</html>