<?php
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

'<div class="post">',

'<article class="post-box Particulier">',
'<a class="portfolio-card" href="article.php?id=2">',
'<img src="./assets/pictures/img-article/PORTFOLIO_main.png" alt="img portfolio" loading="lazy">',
'<h2 class="category">Particulier</h2>',
'<span class="post-date">26-03-2024</span>',
'<p class="post-title">Portfolio CUINET Antoine</p>',
'<p class="post-description">Portfolio de Antoine CUINET, un développeur web passionné.</p>',
'</a>',
'</article>',

'<article class="post-box Entreprise">',
'<a class="portfolio-card" href="article.php?id=1">',
'<img src="./assets/pictures/img-article/RD_main.png" alt="img R&D" loading="lazy">
<h2 class="category">Entreprise</h2>
<span class="post-date">13-03-2024</span>
<p class="post-title">R&Day Informatique 2024</p>
<p class="post-description">Site vitrine réalisé pour la Journée Recherche et Développement (R&D ou encore R&Day) informatique 2024 des étudiants deuxièmes années de l\'Université de Franche-comté.</p>',
'</a>',
'</article>',

'</div>',
'</section>';

include('./assets/views/components/footer-call-to-action.php');
include('./assets/views/footer.php');