<?php
$title = 'CUINET';
$title_page = 'Contact';
$description_page = 'Page de Contact';

include('./assets/views/header.php');

echo <<<HTML
<section class="login-container">
    <div class="wrapper">
        <div class="wrapper-contain">
            <h2 class="login-title">Contact</h2>
            <form method="POST" action="contact.php" class="form">
                
                <div class="form-group">
                    <input type="email" name="email" value="" required>
                    <i class='bx bx-envelope' ></i>
                    <span>T'on meilleur Email</span>
                </div>
                <br>

                <div class="form-group">
                    <input type="password" name="password" value="" required>
                    <i class='bx bx-lock-alt' ></i>
                    <span>T'on meilleur mot de passe</span>
                </div>
                <br>

                <input type="submit" value="Me connecter" name="valider" class="btn btn-login">
            </form>
        </div>
    </div>
</section>
HTML;

include('./assets/views/footer.php');