<?php

// Chargement des bibliothèques de fonctions
require_once('./assets/views/library_app.php');
require_once('./assets/views/library_general.php');

// Bufferisation des sorties
ob_start();

// Démarrage ou reprise de la session
session_start();

$title = 'CUINET';
$title_page = 'Accueil';
$description = 'Page d\'accueuil';
$keywords = '';

include('./assets/views/header.php');
include('./assets/views/components/landing-page.php');
include('./assets/views/components/cards.php');
include('./assets/views/components/transition-start.php');
echo
'<section class="white-section">',
    '<h2>En quelques lignes ...</h2>',
    '<p>Explorez mon univers digital où <a class="text-links" href="./portfolio.php">chaque projet</a> est une histoire unique, une fusion de créativité, de technologie et d\'innovation. Plongez dans <a class="text-links" href="./portfolio.php">mon portfolio</a> pour découvrir mes projets les plus récents et les plus remarquables, où chaque ligne de code raconte une histoire.</p>',
    '<p>Que vous soyez à la recherche d\'un design épuré, d\'une fonctionnalité exceptionnelle ou d\'une expérience utilisateur immersive, vous <a class="text-links" href="./portfolio.php">trouverez ici</a> une vitrine de mon savoir-faire et de ma passion pour le web.</p>',
    '<p>En tant que <a class="text-links" href="./about.php">professionnel</a> du développement web, je suis spécialisé dans la création de sites e-commerce, de sites sur WordPress, ainsi que dans le développement web sur-mesure. Chaque projet est conçu avec une attention méticuleuse pour répondre à vos besoins spécifiques et à ceux de votre entreprise.</p>',
    '<p>Prenez le temps de <a class="text-links" href="./about.php#cv">parcourir mon CV</a>, de découvrir mes compétences techniques et de <a class="text-links" href="./contact.php">me contacter</a> pour discuter de vos projets web. Ensemble, transformons vos idées en réalité digitale.</p>',
'</section>';

include('./assets/views/components/transition-stop.php');

echo
'<section class="slider-section">',
    '<h2>Quelques réalisations</h2>',
    '<div class="container-slider">',
        '<i id="left" class="bx bx-chevron-left"></i>',
        '<ul class="carousel">',
            '<li>',
                '<img src="./assets/pictures/img-article/PORTFOLIO_main.png" alt="img portfolio" draggable="false" loading="lazy">',
                '<h2>Portfolio CUINET Antoine</h2>',
                '<a class="btn" href="./article.php?id=1">Découvrir</a>',
            '</li>',

            '<li>',
                '<img src="./assets/pictures/img-article/RD_main.png" alt="img R&D" draggable="false" loading="lazy">',
                '<h2>R&Day Informatique 2024</h2>',
                '<a class="btn" href="./article.php?id=2">Découvrir</a>',
            '</li>',
        '</ul>',
        '<i id="right" class="bx bx-chevron-right"></i>',
    '</div>',
'</section>';

include('./assets/views/components/footer-call-to-action.php');
include('./assets/views/footer.php');


// Envoi du buffer
ob_end_flush();


// /*********************************************************
//  *
//  * Définitions des fonctions locales de la page
//  *
//  *********************************************************/
// //_______________________________________________________________
// /**
//  * Affichage du contenu principal de la page
//  *
//  * @return  void
//  */
// function affContenuL(): void {

//     // Connexion au serveur de BD
//     $bd = bdConnect();

//     // génération des 3 derniers articles
//     $sql = 'SELECT id
//              FROM article
//              ORDER BY date DESC
//              LIMIT 0, 3';

//     $result = bdSendRequest($bd, $sql);

//     // Fermeture de la connexion au serveur de BdD
//     mysqli_close($bd);


//     echo '<main>';
//     echo 'coucou';
//     echo '</main>';
// }