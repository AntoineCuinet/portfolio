<?php
$title = 'CUINET';
$title_page = 'Accueil';
$description_page = 'Page d\'accueuil';

include('./assets/views/header.php');

echo <<<HTML
    <section class="landing-page">
        <h1 id="first-title">ANTOINE
            <br>
            CUINET
        </h1>
        <h2>Hey, moi c'est Antoine !</h2>
        <p class="synopsis">Bienvenue sur mon portfolio ! Je suis <a class="text-links" href="./about.php">Antoine CUINET</a>, un développeur web passionné, et je suis ravi de vous présenter <a class="text-links" href="./portfolio.php">mes réalisations</a> et <a class="text-links" href="./about.php">mon expertise</a> dans le domaine du développement web.</p>

        <a class="btn" href="./contact.php">Me contacter</a>
    </section>


    <section class="section-cards">
        <a href="./about.php#professional-career">
            <div class="card">
                <div class="content-card">
                    <img src="./assets/pictures/logos/parcours.svg" alt="Image parcours personnel" width="100">
                    <h2>Parcours</h2>
                    <p>Une section où vous trouverez le détaille de mon parcours professionnel.</p>
                </div>
            </div>
        </a>
        <a href="./about.php#skills">
            <div class="card">
                <div class="content-card">
                    <img src="./assets/pictures/logos/grades.svg" alt="Image qualifications personnel" width="100">
                    <h2>Qualifications</h2>
                    <p>Une section donnant une liste détaillée de mes compétences techniques et professionnelles.</p>
                </div>
            </div>
        </a>
        <a href="./about.php#cv">
            <div class="card">
                <div class="content-card">
                    <img src="./assets/pictures/logos/cv.svg" alt="Image CV" width="100">
                    <h2>Mon CV</h2>
                    <p>Une section dédiée à mon CV. Vous pouvez le télécharger au format PDF.</p>
                </div>
            </div>
        </a>
        <a href="./portfolio.php">
            <div class="card">
                <div class="content-card">
                    <img src="./assets/pictures/logos/projects.svg" alt="Image projets" width="100">
                    <h2>Projets livrés</h2>
                    <p>Une page qui montre et explique mes projets web réalisés.</p>
                </div>
            </div>
        </a>
    </section>

    <div class="transition-section">
        <span class="overlay"></span>
    </div>

    <section class="white-section">
        <h2>En quelques lignes ...</h2>
        <p>Explorez mon univers digital où <a class="text-links" href="./portfolio.php">chaque projet</a> est une histoire unique, une fusion de créativité, de technologie et d'innovation. Plongez dans <a class="text-links" href="./portfolio.php">mon portfolio</a> pour découvrir mes projets les plus récents et les plus remarquables, où chaque ligne de code raconte une histoire.</p>

        <p>Que vous soyez à la recherche d'un design épuré, d'une fonctionnalité exceptionnelle ou d'une expérience utilisateur immersive, vous <a class="text-links" href="./portfolio.php">trouverez ici</a> une vitrine de mon savoir-faire et de ma passion pour le web.</p>

        <p>En tant que <a class="text-links" href="./about.php">professionnel</a> du développement web, je suis spécialisé dans la création de sites e-commerce, de sites sur WordPress, ainsi que dans le développement web sur-mesure. Chaque projet est conçu avec une attention méticuleuse pour répondre à vos besoins spécifiques et à ceux de votre entreprise.</p>

        <p>Prenez le temps de <a class="text-links" href="./about.php#cv">parcourir mon CV</a>, de découvrir mes compétences techniques et de <a class="text-links" href="./contact.php">me contacter</a> pour discuter de vos projets web. Ensemble, transformons vos idées en réalité digitale.</p>
    </section>

    <div class="end-transition-section">
        <span class="overlay"></span>
    </div>

    <section class="slider-section">
        <h2>Quelques réalisations</h2>
        <!-- <p>(Mettre un caroucelle des réalisations)</p> -->

        <div class="container-slider">
            <i id="left" class='bx bx-chevron-left'></i>
            <ul class="carousel">
                <li>
                    <img src="./assets/pictures/image_template.jpeg" alt="img" draggable="false">
                    <h2>R&Day Informatique 2024</h2>
                    <a class="btn" href="./portfolio.php#r&d">Découvrir</a>
                </li>

                <li>
                    <img src="./assets/pictures/image_template.jpeg" alt="img" draggable="false">
                    <h2>R&Day Informatique 2024</h2>
                    <a class="btn" href="./portfolio.php#r&d">Découvrir</a>
                </li>
            </ul>
            <i id="right" class='bx bx-chevron-right'></i>
        </div>
    </section>

    <div class="transition-section">
        <span class="overlay"></span>
    </div>

    <section class="white-section">
        <h2>Besoin d’un accompagnement professionnel pour votre projet ?</h2>
        <p>Vous pouvez me contactez via le formulaire de contact afin de discuter ensenble de solutions pour vos projets webs.</p>
        <a class="btn" href="./contact.php">Contact/Devis</a>
    </section>
HTML;

include('./assets/views/footer.php');
