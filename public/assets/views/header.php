<!--
    ______   __    __  ______  __    __  ________  ________ 
  /       \ /  |  /  |/      |/  \  /  |/        |/        |
 |$$$$$$$ ||$$ |  $$ |$$$$$$/|$$  \ $$ |$$$$$$$$/|$$$$$$$$/ 
 |$$  /\$$/|$$ |  $$ | |$$ | |$$$  \$$ |$$ |__      |$$ |   
 |$$ |     |$$ |  $$ | |$$ | |$$$$  $$ |$$    |     |$$ |   
 |$$ |   __|$$ |  $$ | |$$ | |$$ $$ $$ |$$$$$/      |$$ |   
 |$$ \__/  |$$ \__$$ | |$$ | |$$ |$$$$ |$$ |_____   |$$ |   
 |$$    $$/|$$    $$/ / $$  \|$$ |\$$$ |$$       |  |$$ |   
  \$$$$$$/  \$$$$$$/ |$$$$$$/\$$/  \$$/\$$$$$$$$/   |$$/  
  
 A CUINET realization, see the website https://acuinet.fr 
-->
<?php
echo 
'<!DOCTYPE html>',
'<html lang="fr">',
'<head>',
    '<meta charset="UTF-8">',
	'<meta http-equiv="X-UA-Compatible" content="IE=edge">',
    '<meta name="viewport" content="width=device-width, initial-scale=1.0">',
    '<meta name="description" content="', $description, '">',
    '<meta name="keywords" content="', $keywords, '">',
    '<link rel="canonical" href="https://acuinet.fr/" />',

    '<link rel="apple-touch-icon" sizes="180x180" href="./assets/favicon/apple-touch-icon.png">',
    '<link rel="icon" type="image/png" sizes="32x32" href="./assets/favicon/favicon-32x32.png">',
    '<link rel="icon" type="image/png" sizes="16x16" href="./assets/favicon/favicon-16x16.png">',
    '<link rel="manifest" href="/site.webmanifest">',
    '<link rel="mask-icon" href="./assets/favicon/safari-pinned-tab.svg" color="#5bbad5">',
    '<meta name="msapplication-TileColor" content="#da532c">',
    '<meta name="theme-color" content="#ffffff">',
    // '<link rel="shortcut icon" type="image/icon" href="./assets/favicon/favicon.jpeg"/>',

    '<link rel="meta" type="application/json" href="./meta.json">',
    '<link rel="stylesheet" type="text/css" href="./style.css">',
    '<title>', $title.' - '.$title_page ?? '','</title>',

    '<meta property="og:image" content="http://acuinet.fr/assets/favicon/favicon.jpeg">',
    '<meta property="og:url" content="http://acuinet.fr/">',
    '<meta property="og:description" content="', $description, '">',
    '<meta property="og:title" content="', $title, '">',
    '<meta property="og:type" content="website">',

    '<link href="https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css" rel="stylesheet">',
    '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>',
'</head>',
'<body>',
    '<div id="loader">',
        'Loading...',
    '</div>',

    '<header>',
        '<div class="infinit-part">',
            '<div class="container-infinit-part">',
                '<span class="txt">Bienvenue sur le portfolio de <span class="it">CUINET Antoine</span>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Demandez un devis <span class="it">gratuitement</span> pour votre projet web&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Bienvenue sur le portfolio de <span class="it">CUINET Antoine</span>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Demandez un devis <span class="it">gratuitement</span> pour votre projet web&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;</span>',
                '<span class="txt">Bienvenue sur le portfolio de <span class="it">CUINET Antoine</span>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Demandez un devis <span class="it">gratuitement</span> pour votre projet web&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Bienvenue sur le portfolio de <span class="it">CUINET Antoine</span>&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;Demandez un devis <span class="it">gratuitement</span> pour votre projet web&nbsp;&nbsp;&nbsp;•&nbsp;&nbsp;&nbsp;</span>',
            '</div>',
        '</div>',

        '<nav id="navbar">',
            '<div class="first-container">',
                '<a href="./index.php" class="nav-icon" aria-label="Visit homepage" aria-current="page">',
                    '<img src="./assets/favicon/favicon.jpeg" alt="Web site icon" width="40" loading="lazy">',
                    '<span>', $title, '</span>',
                '</a>',

                '<div class="main-navlinks">',
                    '<button class="hamburger" type="button" aria-label="Toggle navigation" aria-expanded="false">',
                        '<span></span>',
                        '<span></span>',
                        '<span></span>',
                    '</button>',
                '</div>',

                '<div class="navlinks-container">',
                    '<!-- <a href="./index.php" aria-current="page">Accueil</a> -->',
                    '<a href="./portfolio.php">Portfolio</a>',
                    '<a href="./about.php">À propos</a>',
                    '<!-- <a href="./blog.php">Blog</a> -->',
                    '<a class="btn" href="./contact.php">Contact</a>',
                '</div>',
            '</div>',
        '</nav>',
    '</header>',
    '<main>';