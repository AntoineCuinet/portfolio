<?php
echo
'</main>',
'<div id="to-top-btn">',
    '<i class="bx bx-up-arrow-circle"></i>',
'</div>',

'<footer>',
    '<div class="footer-container">',
        '<div class="bloc">',
            '<h3>Informations</h3>',
            '<ul>',
                '<li>',
                    '<p><span>Lieu: </span><a class="footer-links" href="https://maps.app.goo.gl/iv6a3NZTZPE6r9pk7" target="_blank" rel="noopener">25000 Besançon</a></p>',
                '</li>',
                '<li>',
                    '<p><span>E-mail: </span><a class="footer-links" href="mailto:antoine@acuinet.fr?subject=Demande%20de%20création%20de%20site%20web&body=Bonjour%2C%20%0D%0A%0D%0AJe%20vous%20contacte%20pour...">antoine@acuinet.fr</a></p>',
                '</li>',
                '<li>',
                    '<p><span>Téléphone: </span><a class="footer-links" href="tel:+33625330842">06 25 33 08 42</a></p>',
                '</li>',
            '</ul>',
        '</div>',

        '<div class="bloc">',
            '<h3>Liens pratiques</h3>',
            '<ul>',
                '<li><a class="footer-links" href="./portfolio.php">Portfolio</a></li>',
                '<li><a class="footer-links" href="./about.php">À propos</a></li>',
                '<!-- <li><a class="footer-links" href="./blog.php">Blog</a></li> -->',
                '<li><a class="footer-links" href="./contact.php">Contact</a></li>',
                '<li><a class="footer-links" href="./legal.php">Mentions légales</a></li>',
            '</ul>',
        '</div>',

        '<div class="bloc">',
            '<h3>Réseaux</h3>',
            '<ul>',
                '<li><a class="footer-links" href="https://linkedin.com/in/antoine-cuinet" target="_blank" rel="noopener">LinkedIn</a></li>',
                '<li><a class="footer-links" href="https://github.com/AntoineCuinet" target="_blank" rel="noopener">GitHub</a></li>',
            '</ul>',
        '</div>',
    '</div>',
    '<div class="footer-legal">',
        '<p>&copy; 2024 - CUINET - Tous droits réservés</p>',
    '</div>',
'</footer>',

'<script src="./script.js"></script>',
'<script src="./assets/scripts/jquery-search.js"></script>',
'<script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>';
// Vérifier si la page actuelle est index.php
if (basename($_SERVER['PHP_SELF']) == 'index.php') {
    // Charger le script uniquement si nous sommes sur index.php
    echo '<script src="./assets/scripts/index.js"></script>';
} else {
    echo '<script src="./assets/scripts/notIndex.js"></script>';
}
echo 
'<script src="./assets/scripts/vanilla-tilt.js"></script>',
'<script>',
    'VanillaTilt.init(document.querySelectorAll(".card"), {',
        'max: 10,',
        'speed: 200,',
        'reverse: true,',
        'glare: true,',
        '"max-glare": 0.1,',
    '});',
'</script>',
'</body>',
'</html>';