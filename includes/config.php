<?php 
    /**
     * Filename: config.php
     * Description: this file will be responsible to dynamically response to other webpage requests, and
     * generate correct title, description for each requested webpage. 
     */

    // THIS_PAGE is a file path
    define ('THIS_PAGE', $_SERVER['PHP_SELF']);
    define('FILE_NAME', basename(THIS_PAGE));
    
    // helps prevent date errors
    date_default_timezone_set('America/Los_Angeles');

    // get keys from the confidential file
    include "confidential.php";

    // initilize frequently use variables
    $parentDir = dirname(THIS_PAGE, 1);
    $title = "";
    $formCSS = "";
    $meta_keyword = "resume, dai, đại, nguyen, nguyễn, ngoc, ngọc, seattle, university, vietnam, việt, nam, onepage, creative, html, software, network, electrical, engineer, forhire, hire, engineering, professional";
    $meta_description = "Dai Ngoc Nguyen - Personal Website / Resume. I am an Electrical & Computer Engineer with a passion in Computer Networking.";

    switch(FILE_NAME){
        case 'index.php':
            $title = "Dai Nguyen | Personal Website / Resume";
        break;

        case 'home-net.php':
            $title = "Home Gigabit Network";
            $meta_description = "Computer Networking Project";
        break;

        case 'puppet.php':
            $title = "Automated Puppet Dancing";
            $meta_description = "Automated Puppet Dancing - Junior Lab Project - Seattle University";
        break;

        case 'senior-design.php':
            $title = "Tractor/Trailer Communication Phass II";
            $meta_description = "Senior Design Project - Seattle University";
        break;

        case 'under-research.php':
            $title = "Image Processing with IoT";
            $meta_description = "Undergraduate Research Assistant - Seattle University";
        break;

        case 'contactme.php':
            $title = "Contact Dai";
            $meta_keyword = "contact, dai, nguyen";
            $meta_description = "Contact Dai Nguyen";
            $formCSS = "<link rel='preload' href='/css/form.min.css' as='style'" . 
                       'onload=' . "this.onload=null;this.rel='stylesheet'" . '>' . "\n";
            // <link rel='preload' href='/css/form.min.css' as='style' onload="this.onload=null;this.rel='stylesheet'">
        break;
    };
?>