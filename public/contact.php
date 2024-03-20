<?php
$title = 'CUINET';
$title_page = 'Contact';
$description_page = 'Page de Contact';
$emailPerso = 'antoine@acuinet.fr';
$Datas  = array(
    'firstname' => '',
    'lastname' => '',
    'email' => '',
    'subject' => '',
    'message' => ''
);
$Errs = array(
    'validation' => '',
    'firstnameError' => '',
    'lastnameError' => '',
    'emailError' => '',
    'subjectError' => '',
    'messageError' => '',
);

if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['send'])) {
    $_POST = filter_input_array(INPUT_POST, FILTER_UNSAFE_RAW);
    function verifyInput($var) {
        $var = trim($var);
        $var = stripslashes($var);
        $noTags = strip_tags($var);
        if($var != $noTags) {
            $Errs["$var" . "Error"] = 'La zone ne peut pas contenir de code HTML.';
        } elseif (! preg_match('/^[a-zA-Z][a-zA-Z\' -]{1,29}$/u',$var)) {
            $Errs["$var" . "Error"] = 'La zone n\'est pas valide';
        }
        $var = htmlentities($var, ENT_QUOTES, 'UTF-8');
        return $var;
    }
    $Datas['firstname'] = verifyInput($_POST['firstname']);
    $Datas['lastname'] = verifyInput($_POST['lastname']);
    $Datas['email'] = verifyInput($_POST['email']);
    $Datas['subject'] = verifyInput($_POST['subject']);
    $Datas['message'] = verifyInput($_POST['message']);

    if (empty($Datas['firstname']) || strlen($Datas['firstname']) < 3 || strlen($Datas['firstname']) > 50) {
        $Errs['firstnameError'] = 'Le prénom n\'est pas valide.';
        $Datas['firstname'] = '';
    }
    if (empty($Datas['lastname']) || strlen($Datas['lastname']) < 3 || strlen($Datas['lastname']) > 50) {
        $Errs['lastnameError'] = 'Le nom n\'est pas valide.';
        $Datas['lastname'] = '';
    }
    if (empty($Datas['email']) || !filter_var($Datas['email'], FILTER_VALIDATE_EMAIL)) {
        $Errs['emailError'] = 'L\'email n\'est pas valide.';
        $Datas['email'] = '';
    }
    if (empty($Datas['subject']) || strlen($Datas['subject']) < 7 || strlen($Datas['subject']) > 100) {
        $Errs['subjectError'] = 'Le sujet doit contenir au moins 7 charactères.';
        $Datas['subject'] = '';
    }

    if (empty($Datas['message']) || strlen($Datas['message']) < 100 || strlen($Datas['message']) > 9999) {
        $Errs['messageError'] = 'Le message doit contenir au moins 100 charactères.';
        $Datas['message'] = '';
    }

    if(empty($Errs['firstnameError']) && empty($Errs['lastnameError']) && empty($Errs['emailError']) && empty($Errs['subjectError']) && empty($Errs['messageError'])){
        //traitement de l'envoie ici.
        $mailHeader = 'Name : ' . $Datas['firstname'] .
            "\r\n Last-name : " . $Datas['lastname'] . 
            "\r\n E-mail : " . $Datas['email'] . 
            "\r\n Subject : " . $Datas['subject'] . 
            "\r\n Message : " . $Datas['message'] . "\r\n"; 
        
        if(mail($emailPerso, $Datas['lastname'], $mailHeader)) {
            $Errs['validation'] = 'Toutes les informations ont bien étés envoyés !<br>Merci.';
        }
    }
}

include('./assets/views/header.php');

echo '<section class="login-container">',
'<div class="wrapper">',
'<h2>', $title_page, '</h2>',
'<h3>Un projet à confier ? Je suis à votre écoute.</h3>',
'<p>Prenez contacte via le formulaire ci-dessous ou via <a class="text-links" href="mailto:antoine@acuinet.fr?subject=Demande%20de%20création%20de%20site%20web&body=Bonjour%2C%20%0D%0A%0D%0AJe%20vous%20contacte%20pour...">mon adresse E-mail</a>.</p>',
'<form action="./contact.php" method="POST">';
if(!empty($Errs['validation'])):
echo '<div class="alert-green">',
        '<p>', $Errs['validation'], '</p>',
    '</div>';
endif;
echo '<div class="form-field">',
'<input type="text" name="firstname" id="firstname" value="', $Datas['firstname'] ?? '', '" required>',
'<label for="firstname">Prénom<span class="form-oblig">*</span></label>';
if(!empty($Errs['firstnameError'])):
    echo '<div class="alert">',
        '<p>', $Errs['firstnameError'], '</p>',
    '</div>';
endif;
echo '</div>',
'<div class="form-field">',
'<input type="text" name="lastname" id="lastname" value="', $Datas['lastname'] ?? '', '" required>',
'<label for="lastname">Nom<span class="form-oblig">*</span></label>';
if(!empty($Errs['lastnameError'])):
    echo '<div class="alert">',
        '<p>', $Errs['lastnameError'], '</p>',
    '</div>';
endif;
echo '</div>',
'<div class="form-field">',
'<input type="email" name="email" id="email" value="', $Datas['email'] ?? '', '" required>',
'<label for="email">E-mail<span class="form-oblig">*</span></label>';
if(!empty($Errs['emailError'])):
    echo '<div class="alert">',
        '<p>', $Errs['emailError'], '</p>',
    '</div>';
endif;
echo '</div>',

'<div class="form-field">',
'<input type="text" name="subject" id="subject" value="', $Datas['subject'] ?? '', '" required>',
'<label for="subject">Sujet<span class="form-oblig">*</span></label>';
if(!empty($Errs['subjectError'])):
    echo '<div class="alert">',
        '<p>', $Errs['subjectError'], '</p>',
    '</div>';
endif;
echo '</div>',
'<div class="form-field">',
'<textarea name="message" id="message" value="" rows="4" maxlength="10000" autocomplete="off" spellcheck="true" required>', $Datas['message'] ?? '', '</textarea>',
'<label for="message">Message<span class="form-oblig">*</span></label>';
if(!empty($Errs['messageError'])):
    echo '<div class="alert">',
        '<p>', $Errs['messageError'], '</p>',
    '</div>';
endif;
echo '</div>',

'<input type="submit" name="send" class="btn" value="Envoyer &rarr;">',
'</form>',
'</div>',
'</section>';

include('./assets/views/footer.php');