<?php 

// for 30 days
setcookie('cookie-accept', 'false', time() + 30*24*3600, '/', null, false, true);

if (isset($_SERVER['HTTP_REFERER']) && !empty($_SERVER['HTTP_REFERER'])) {
    header('Location:'.$_SERVER['HTTP_REFERER']);
} else {
    header('Location: /');
}