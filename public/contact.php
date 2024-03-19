<?php
$title = 'CUINET';
$title_page = 'Contact';
$description_page = 'Page de Contact';
$firstname = $lastname = $email = $subject = $message = '';
$firstnameError = $lastnameError = $emailError = $subjectError = $messageError = '';
// $Errs = array(
//     'firstnameError' => '',
//     'lastnameError' => '',
//     'emailError' => '',
//     'subjectError' => '',
//     'messageError' => '',
// );

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
    // $x = array_keys($_POST);
    // if (count(array_diff($obligatoires, $x)) > 0){
    //     return false;
    // }

	function verifyInput($var) {
		$var = trim($var);
		$var = stripslashes($var);
		// $noTags = strip_tags($var);
        // if($var != $noTags) {
        //     $Errs["$var"."Error"] = 'La zone Nom ne peut pas contenir de code HTML';
        // }
        $var = htmlentities($var, ENT_QUOTES, 'UTF-8');
        // $var = mysqli_real_escape_string(mysqli $mysql, string $string);
		return $var;
	}
    $firstname = verifyInput($_POST['firstname']);
    $lastname = verifyInput($_POST['lastname']);
    $email = verifyInput($_POST['email']);
    $subject = verifyInput($_POST['subject']);
    $message = verifyInput($_POST['message']);
    
    if(empty($firstname) || strlen($firstname) < 3 || strlen($message) > 50) {
        $firstnameError = 'Le prénom n\'est pas valide.';
        $firstname = '';
    }
    if(empty($lastname) || strlen($lastname) < 3 || strlen($message) > 50) {
        $lastnameError = 'Le nom n\'est pas valide.';
        $lastname = '';
    }
    if(empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = 'L\'email n\'est pas valide.';
        $email = '';
    }
    if(empty($subject) || strlen($subject) < 7 || strlen($message) > 100) {
        $subjectError = 'Le sujet doit contenir au moins 7 charactères.';
        $subject = '';
    }

    if(empty($message) || strlen($message) < 100 || strlen($message) > 9999) {
        $messageError = 'Le message doit contenir au moins 100 charactères.';
        $message = '';
    }

    if(empty($firstnameError) && empty($lastnameError) && empty($emailError) && empty($subjectError) && empty($messageError)){
        //traitement de l'envoie ici.
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
'<textarea name="message" id="message" value="" rows="4" maxlength="10000" autocomplete="off" spellcheck="true" required>', $message ?? '', '</textarea>',
'<label for="message">Message<span class="form-oblig">*</span></label>',
'</div>',

'<input type="submit" value="Me connecter" name="valider" class="btn">',
'</form>',
'</div>',
'</section>';

include('./assets/views/footer.php');
