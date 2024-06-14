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



// Vérification de GET et déchiffrement de l'id
$id = verifGet('id', 'article');


include('./assets/views/header.php');

echo
'<section id="portfolio-section">';

$bd = bdConnect();

$sql = "SELECT id, titre, contenu, date, type
        FROM article_portfolio
        WHERE id = '$id'";

$res = bdSendRequest($bd, $sql);

mysqli_close($bd);

$tab = mysqli_fetch_assoc($res);

// Libération de la mémoire associée au résultat de la requête
mysqli_free_result($res);

if(! empty($tab['id'])) {
    echo '<h2>', $tab['titre'], '</h2>',
    '<span class="post-date">', $tab['date'], '</span>',
    '<h2 class="category">';
    if($tab['type'] == 1) {
        echo 'Particulier';
    } else {
        echo 'Entreprise';
    }
    echo '</h2>',
    '<p>', $tab['contenu'], '</p>';

} else {
    echo '<h2>', $title_page, '</h2>',
    '<p>Cet article n\'a pas encore été écrit, nous nous excusons pour la gène occasionnée.</p>',
    '<a class="btn" href="./index.php">Accueil</a>';
}



echo '</section>';

include('./assets/views/components/footer-call-to-action.php');
include('./assets/views/footer.php');


// Envoi du buffer
ob_end_flush();



// <br>
// <br>
// <br>

// Voir le site <a class="footer-links" href="https://rnday.ofni.asso.fr/" target="_blank">ici: https://rnday.ofni.asso.fr/</a>.
// <br>
// <br>
// Retrouvez tout les codes sources sur <a class="footer-links" href="https://github.com/AntoineCuinet" target="_blank">mon Github</a>.