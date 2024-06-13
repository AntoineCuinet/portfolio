<?php

// Chargement des bibliothèques de fonctions
require_once('./assets/views/library_app.php');
require_once('./assets/views/library_general.php');

// Bufferisation des sorties
ob_start();

// Démarrage ou reprise de la session
session_start();

$title = 'CUINET';
$title_page = 'Portfolio';
$description = 'Page présentant mon portfolio';
$keywords = '';

include('./assets/views/header.php');

echo
'<section id="portfolio-section">',
'<h2>', $title_page, '</h2>',

'<div class="post-filter">',
    '<span class="filter-item active-filter" data-filter="all">Tous</span>',
    '<span class="filter-item" data-filter="Particulier">Particulier</span>',
    '<span class="filter-item" data-filter="Entreprise">Entreprise</span>',
'</div>',

'<div class="post">';


// Connexion au serveur de BD
$bd = bdConnect();

$sql = 'SELECT id, titre, date, type, resume
        FROM article
        ORDER BY date DESC;';

$result = bdSendRequest($bd, $sql);

// Fermeture de la connexion au serveur de BdD
mysqli_close($bd);


while($tab = mysqli_fetch_assoc($result)) {

    if($tab['type'] == 1) {
        $type = 'Particulier';
    } else {
        $type = 'Entreprise';
    }

    // Chiffrement de l'id pour le passage dans l'URL
    $id_chiffre = chiffrerSignerURL($tab['id']);

    echo 
    '<article class="post-box ', $type, '">',
        '<a class="portfolio-card" href="./article.php?id=',  $id_chiffre, '">',
            '<img src="./assets/pictures/img-article/', $tab['id'], '.png" alt="image du site ', $tab['titre'], '" loading="lazy">',
            '<h2 class="category">', $type, '</h2>',
            '<span class="post-date">', $tab['date'], '</span>',
            '<p class="post-title">', $tab['titre'], '</p>',
            '<p class="post-description">', $tab['resume'], '</p>',
        '</a>',
    '</article>';
}


echo '</div>',
'</section>';

include('./assets/views/components/footer-call-to-action.php');
include('./assets/views/footer.php');

// Envoi du buffer
ob_end_flush();
