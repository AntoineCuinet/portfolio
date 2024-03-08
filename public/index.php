<?php
$title = 'CUINET';
$title_page = 'Accueil';
$description_page = 'Page d\'accueuil';

include('./assets/views/header.php');

echo <<<'HTML'
    <section>
        <h1>Template</h1>
        <h2>ANTOINE
            <br>
            CUINET
        </h2>
        <br>
        <p><a href="">coucou toi</a></p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique vitae amet culpa exercitationem a molestias ipsam impedit facere optio ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique vitae amet culpa exercitationem a molestias ipsam impedit facere optio ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique vitae amet culpa exercitationem a molestias ipsam impedit facere optio ad.</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique vitae amet culpa exercitationem a molestias ipsam impedit facere optio ad.</p>
        <br>

        <img src="./assets/pictures/image_template.jpeg" alt="image template" width=300>
        <br>
        <button class="btn-danger">template</button>
    </section>
HTML;

include('./assets/views/footer.php');