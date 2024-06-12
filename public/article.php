<?php

// Chargement des bibliothèques de fonctions
require_once('./assets/views/library_app.php');
require_once('./assets/views/library_general.php');

// Bufferisation des sorties
ob_start();

// Démarrage ou reprise de la session
session_start();

$title = 'CUINET';
$title_page = 'Article';
$description = 'Page présentant un article';
$keywords = '';

include('./assets/views/header.php');

echo
'<section id="portfolio-section">';

$bd = bdConnect();
$id = $_GET['id'];

$sql = "SELECT id, titre, contenu, date, type, resume
        FROM article
        WHERE id = '$id'";

$res = bdSendRequest($bd, $sql);

$tab = mysqli_fetch_assoc($res);

if(! empty($tab['id'])) {
    echo '<h2>', $tab['titre'], '</h2>',
    '<span class="post-date">', $tab['date'], '</span>';
    
} else {
    echo '<h2>', $title_page, '</h2>',
    '<p>Cet article n\'a pas encore été écrit, nous nous excusons pour la gène occasionnée.</p>',
    '<a class="btn" href="./index.php">Accueil</a>';
}

// Libération de la mémoire associée au résultat de la requête
mysqli_free_result($res);
mysqli_close($bd);


echo '</section>';

include('./assets/views/components/footer-call-to-action.php');
include('./assets/views/footer.php');