<?php

require('model/dbh.php');
require_once('controller/class.competences.php');
$tech = new Competences($conn);
require_once('controller/class.portfolio.php');
$portfolio = new Portfolio($conn);

?>

<!DOCTYPE html>
<html lang="fr">
<html prefix="og: http://ogp.me/ns#">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <link rel="shortcut icon" type="image/x-icon" href="view/images/double_triangle.png" />
    <link href="view/css/bootstrap.min.css" rel="stylesheet">

    <script src="view/js/jquery-3.2.1.min.js"></script>
    <script src="https://use.fontawesome.com/933d219d65.js"></script>
    <script src="view/js/changepage.js"></script>

    <title>Lauriane PIERRE - Développez votre site web</title>
    <meta property="og:title" content="Lauriane PIERRE - Dev-LP-er votre site" />
    <meta property="og:type" content="website" />
    <meta property="og:url" content="http://dev-laurianepierre.fr/" />
    <meta property="og:image" content="http://nsa37.casimages.com/img/2017/07/07/170707065624334749.jpg" />
    <meta property="og:description"   content="Vous avez besoin d'un site, c'est l'endroit qu'il vous faut." />
    <meta property="og:locale" content="fr_FR" />
    <meta property="og:site_name" content="Lauriane PIERRE - Développez votre site web" />
    <meta name="description" content="Vous avez besoin d'un site, c'est l'endroit qu'il vous faut. Développeur web, je me charge de toute la création de votre site." />

</head>
<body>

    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->

    <header>
        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
        <nav>
            <ul class="container">
                <li class="col-md-3 col-lg-2 text-right text-uppercase"><a href="#portfolio">Portfolio</a></li>
                <li class="col-md-2 col-lg-2 text-right text-uppercase"><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    <main>
        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
        <section id="home" class="home">
            <div class="container">
                <div class="col-md-6">
                        </div>
                <div class="col-md-6">
                            <span class="slash">/</span>
                            Web Developer<br/>
                        </div>
                            <p>La nouveauté me plaît, les défis aussi et les projets tout autant. Je sais m'investir dans les projets qu'on me donne et les développer pour créer un site web qui vous correspond.</p>
                            <p>Pour tenter l'aventure avec moi, n'hésitez pas à me <a href="#contact">contacter.</a></p>

                        </div>
                </div>
            </div>
        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
        <section id="portfolio" class="portfolio">
            <div class="container">
                <h2 class="col-md-12 text-center text-uppercase">
                    Portfolio
                    <div class="sousligne"></div>
                </h2>

                <div class="col-md-12 projets">
                    <?php

                        $portfolio->portfolio();

                     ?>

                </div>
                <div class="text-center plus_de_projets">
                    <!-- <div class="fleches"><a href=""><img src="view/images/fleches.png" alt="flèche vers d'autres projets"></a></div> -->
                </div>
            </div>
        <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
        <section id="contact" class="contact">
            <div class="container">
                <h2 class="col-md-12 text-center text-uppercase">
                <div class="col-xs-12 text-center">
                    <div class="col-md-6">
                        <div class="etiquette">06.61.59.63.87</div>
                        <div class="etiquette">dev-laurianepierre.fr</div>
                <div class="col-xs-12 text-center resociaux">
                    <a href="https://www.linkedin.com/in/lauriane-pierre-142ab1145/" title="linkedin Lauriane PIERRE"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
                    <a href="https://www.dev-laurianepierre.fr/blog" title="wordpress Lauriane PIERRE"><i class="fa fa-wordpress" aria-hidden="true"></i></a>
                </div>

                <div id="cadre" class="cadre">
                    <?php  include 'controller/formulaire.php'; ?>
                </div>

            </div>
    </main>
    <!-- xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx -->
    <footer>
            <div class="col-xs-12 text-center text-uppercase">
        </div>

</body>
</html>