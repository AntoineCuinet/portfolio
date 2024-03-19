<?php
$title = 'CUINET';
$title_page = 'Contact';
$description_page = 'Page de Contact';
$firstname = $lastname = $email = $subject = $message = "";
$firstnameError = $lastnameError = $emailError = $subjectError = $messageError = "";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);

    //fonction de vérif
	function verifyInput($var) {
		$var = trim($var);
		$var = stripslashes($var);
		$var = htmlspecialchars($var);
	  
		return $var;
	}

    $firstname = verifyInput($_POST["firstname"]);
    $lastname = verifyInput($_POST["lastname"]);
    $email = verifyInput($_POST["email"]);
    $password = $_POST["password"];
    
    
    if(empty($firstname) || strlen($firstname) < 3) {
        $firstnameError = 'Le prénom n\'est pas valide.';
        $firstname = '';
    }
    if(empty($lastname) || strlen($lastname) < 3) {
        $lastnameError = 'Le nom n\'est pas valide.';
        $lastname = '';
    }
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'L\'email n\'est pas valide.';
        $email = '';
    }
    if(empty($password) || strlen($password) < 7) {
        $passwordError = 'Le mot de passe doit contenir au moins 7 charactères.';
    }

    if(empty($firstnameError) && empty($lastnameError) && empty($emailError) && empty($passwordError)){
        $req = $db->prepare('SELECT * FROM users WHERE email = :email');
        $req->bindValue(':email', $email, PDO::PARAM_STR);
        $req->execute();

        if($req->rowCount() > 0) {
            $emailError = 'Un utilisateur est déjà enregistré avec cet Email.';
        }

        // $filename = "./icon-user.png";

        if(empty($firstnameError) && empty($lastnameError) && empty($emailError) && empty($passwordError)) {
            $req = $db->prepare('INSERT INTO users (firstname, lastname, email, password, created_at) VALUES (:firstname, :lastname, :email, :password, NOW())');
            $req->bindValue(':firstname', $firstname, PDO::PARAM_STR);
            $req->bindValue(':lastname', $lastname, PDO::PARAM_STR);
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            // $req->bindValue(':file', $filename, PDO::PARAM_STR); // Utilisez le chemin de l'image par défaut
            $req->bindValue(':password', password_hash($password, PASSWORD_DEFAULT), PDO::PARAM_STR);
            $req->execute();


            $req = $db->prepare('SELECT * FROM users WHERE email = :email');
            $req->bindValue(':email', $email, PDO::PARAM_STR);
            $req->execute();

            $user = $req->fetch();
            if($user) {
                $_SESSION['user'] = $user;
                header('Location: begining_account.php');
                exit();
            }
        }
    }
}

include('./assets/views/header.php');

echo '<section class="login-container">',
'<div class="wrapper">',
'<h2>', $title_page, '</h2>',
'<h3>Un projet à confier ? Je suis à votre écoute.</h3>',
'<p>Prenez contacte via le formulaire ci-dessous ou via <a class="text-links" href="mailto:antoine@acuinet.fr?subject=Demande%20de%20création%20de%20site%20web&body=Bonjour%2C%20%0D%0A%0D%0AJe%20vous%20contacte%20pour...">mon adresse E-mail</a>.</p>',
'<form action="./contact.php" method="POST">',

'<div class="form-field">',
'<input type="text" name="firstname" id="firstname" value="', $firstname ?? '', '" required>',
'<label for="firstname">Prénom<span class="form-oblig">*</span></label>',
'</div>',
'<div class="form-field">',
'<input type="text" name="lastname" id="lastname" value="', $lastname ?? '', '" required>',
'<label for="lastname">Nom<span class="form-oblig">*</span></label>',
'</div>',
'<div class="form-field">',
'<input type="email" name="email" id="email" value="', $email ?? '', '" required>',
'<label for="email">E-mail<span class="form-oblig">*</span></label>',
'</div>',

'<div class="form-field">',
'<input type="text" name="subject" id="subject" value="', $subject ?? '', '" required>',
'<label for="subject">Sujet<span class="form-oblig">*</span></label>',
'</div>',
'<div class="form-field">',
'<textarea name="message" id="message" value="" rows="4" maxlength="1000" autocomplete="off" spellcheck="true" required>', $message ?? '', '</textarea>',
'<label for="message">Message<span class="form-oblig">*</span></label>',
'</div>',

'<input type="submit" value="Me connecter" name="valider" class="btn">',
'</form>',
'</div>',
'</section>';

include('./assets/views/footer.php');
