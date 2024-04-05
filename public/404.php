<?php 
$title = 'CUINET';
$title_page = '404';
$description = '404 not found';
$keywords = '';

include('./assets/views/header.php');

echo 
    '<br>',
    '<br>',
    '<br>',
    '<br>',
    '<br>',
    '<br>',
    '<section>',
        '<h1>', $description, '</h1>',
        '<br>',
        '<a class="btn" href="./index.php">Accueil</a>',
    '</section>';

include('./assets/views/footer.php');