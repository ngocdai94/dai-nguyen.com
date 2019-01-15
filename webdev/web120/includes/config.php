<?php 
// config.php

// file name config
define ('SERVER_PATH', $_SERVER['PHP_SELF']);
define('FILE_NAME', basename(SERVER_PATH));
define('BIG_PROJECT_PATH', '/webdev/web120/big');
define('FINAL_PROJECT_PATH', '/webdev/web120/fp');
define('CONTACT_ME', 
    '<div class="contactMe">
        <a href="../contactme.php">CONTACT ME</a>
    </div>');

// reCAPTCHA credentials here
$siteKey = '6LfwrIkUAAAAAKlZR9iUgvACsKN29d_GUkaNQ12m';
$secretKey = '6LfwrIkUAAAAAEd9AODpu2cj85jvopaQsURJ3BKF';

$parentDir = dirname(SERVER_PATH, 1);
$title = '';
$cssPath = '';
$contactMe = '';

if ($parentDir == BIG_PROJECT_PATH) {
    $title = "Big Project";
    $cssPath = '../css/';
    $contactMe = CONTACT_ME;
} elseif ($parentDir == FINAL_PROJECT_PATH) {
    $title = "Final Project";
    $cssPath = '../css/';
    $contactMe = CONTACT_ME;
} else {
    $title = FILE_NAME;
    $cssPath = 'css/';
    switch(FILE_NAME){
        case 'index.php':
            $title = "Dai Nguyen's Home";
            $contactMe = CONTACT_ME;
        break;

        case 'aia.php':
            $title = "AIA";
            $contactMe = CONTACT_ME;
        break;

        case 'flowchart.php':
            $title = "Flowchart";
            $contactMe = CONTACT_ME;
        break;

        case 'contactme.php':
            $title = "Contact Dai";
        break;
    };
}
?>