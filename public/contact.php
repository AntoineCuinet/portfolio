<?php
$title = 'CUINET';
$title_page = 'Accueil';
$description_page = 'Page d\'accueuil';

include('./assets/views/header.php');

echo <<<HTML
<section class="login-container">
    <?php if($detect->isMobile()): ?>
        <img src="../pictures/bglog-mobile.png" alt="bg">
    <?php else: ?>
        <img src="../pictures/bglog.png" alt="bg">
    <?php endif; ?>
   
    <div class="wrapper">
        <div class="wrapper-contain">
        
            <h2 class="login-title"><?= $title_page; ?></h2>

            <form method="POST" action="login.php" role="inscription" class="form">
                
                <div class="form-group">
                    <input type="email" name="email" value="<?= $email ?? ''; ?>" required>
                    <i class='bx bx-envelope' ></i>
                    <span>T'on meilleur Email</span>

                    <!-- afficher message erreur -->
                    <?php if(!empty($emailError)): ?>
                        <div class="alert alert-danger">
                            <p><?= $emailError; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <br>

                <div class="form-group">
                    <input type="password" name="password" value="" required>
                    <i class='bx bx-lock-alt' ></i>
                    <span>T'on meilleur mot de passe</span>
                    
                    <!-- afficher message erreur -->
                    <?php if(!empty($passwordError)): ?>
                        <div class="alert alert-danger">
                            <p><?= $passwordError; ?></p>
                        </div>
                    <?php endif; ?>
                </div>
                <br>

                <input type="submit" value="Me connecter" name="valider" class="btn btn-login">
            </form>

            <div class="redirect-lien">
                <p>Tu n'as pas de compte ? <a href="./inscription.php">Inscrit toi !</a></p>
            </div>

        </div>
    </div>
</section>
HTML;

include('./assets/views/footer.php');