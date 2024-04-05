<?php
$title = 'CUINET';
$title_page = 'Article';
$description = 'Page présentant un article';
$keywords = '';

include('./assets/views/header.php');

echo
'<section id="portfolio-section">',
'<h2>', $title_page, '</h2>',

'<p>Cet article n\'a pas encore été écrit, nous nous excusons pour la gène occasionnée.</p>',
'<a class="btn" href="./index.php">Accueil</a>',

'</section>';

include('./assets/views/components/footer-call-to-action.php');
include('./assets/views/footer.php');