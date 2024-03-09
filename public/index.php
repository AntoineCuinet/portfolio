<?php
$title = 'CUINET';
$title_page = 'Accueil';
$description_page = 'Page d\'accueuil';

include('./assets/views/header.php');

echo <<<'HTML'
    <section class="landing-page">
        <h1 id="first-title">ANTOINE
            <br>
            CUINET
        </h1>
        <h2>Hey, moi c'est Antoine !</h2>
        <p class="synopsis">Bienvenue sur mon portfolio ! Je suis <a class="text-links" href="./about.php">Antoine CUINET</a>, un développeur web passionné, et je suis ravi de vous présenter <a class="text-links" href="./portfolio.php">mes réalisations</a> et <a class="text-links" href="./about.php">mon expertise</a> dans le domaine du développement web.</p>

        <a class="btn" href="./contact.php">Me contacter</a>
    </section>


    <section>
        <div class="card"></div>
        <div class="card"></div>
        <div class="card"></div>
        <div class="card"></div>
    </section>
HTML;

include('./assets/views/footer.php');