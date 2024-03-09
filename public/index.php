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
        <p class="synopsis">Bienvenue sur mon portfolio ! Je suis Antoine CUINET, un développeur web passionné, et je suis ravi de vous présenter mes réalisations et mon expertise dans le domaine du développement web.</p>

        <button class="btn-danger">Me contacter</button>
    </section>


    <section>
        <div class="card"></div>
        <div class="card"></div>
        <div class="card"></div>
        <div class="card"></div>
    </section>
HTML;

include('./assets/views/footer.php');