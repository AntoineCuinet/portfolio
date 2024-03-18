<?php
$title = 'CUINET';
$title_page = 'Contact';
$description_page = 'Page de Contact';

include('./assets/views/header.php');

echo '<section class="login-container">',
'<div class="wrapper">',
'<div class="wrapper-contain">',
'<h2>', $title_page, '</h2>',
'<form action="./contact.php" method="POST">',

'<div class="form-field">',
'<input type="text" name="firstname" id="firstname" value="" required>',
'<label for="firstname">Prénom <span class="form-oblig">*</span></label>',
'</div>',
'<div class="form-field">',
'<input type="text" name="lastname" id="lastname" value="" required>',
'<label for="lastname">Nom <span class="form-oblig">*</span></label>',
'</div>',
'<div class="form-field">',
'<input type="email" name="email" id="email" value="" required>',
'<label for="email">E-mail <span class="form-oblig">*</span></label>',
'</div>',

'<div class="form-field">',
'<input type="text" name="subject" id="subject" value="" required>',
'<label for="subject">Sujet <span class="form-oblig">*</span></label>',
'</div>',
'<div class="form-field">',
'<textarea name="message" id="message" value="" rows="4" maxlength="1000" autocomplete="off" spellcheck="true" required></textarea>',
'<label for="message">Message <span class="form-oblig">*</span></label>',
'</div>',

'<input type="submit" value="Me connecter" name="valider" class="btn">',
'</form>',
'</div>',
'</div>',
'</section>';

include('./assets/views/footer.php');
