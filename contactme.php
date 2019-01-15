<?php include 'includes/config.php';?>
<!DOCTYPE html lang="en-US">
<html>
<head>
    <title>Contact Dai</title>
    <!-- Enhance Websites Detail to Help Search Engines -->
    <meta charset="UTF-8">
    <meta name="description" content="Dai Nguyen - Personal Website / Resume">
    <meta name="keywords" content="dai, nguyen, contact, me">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Images for favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="196x196" href="/favicon-196x196.png">
    <link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
    <link rel="icon" type="image/png" sizes="128x128" href="/favicon/favicon-128.png">
    <link rel="manifest" href="/site.webmanifest">
    <link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">

    <!-- CSS & Font Awesome-->
    <link rel="stylesheet" type="text/css" media="screen" href="css/main.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/nav.css">
    <link rel="stylesheet" type="text/css" media="screen" href="css/form.css">
    <link href="/css/all.css" rel="stylesheet"> 
    
    <!-- Javascript -->
    <script defer src="/js/main.js"></script>
    <script defer src="/js/all.js"></script>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127509718-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-127509718-1');
    </script>
</head>

<body>
    <header>
        <!--google downloadhttps://drive.google.com/uc?authuser=0&id=FILE_ID9&export=download-->
        <div class="headerBackgroundImage"></div>
        <nav class="topnav">
            <a href="index.html">Home</a>
            <a href="http://dlresume.dai-nguyen.com">Download Resume</a>
            <a href="contactme.php">Contact Me</a>
        </nav>
    </header>

    <!-- FORM -->
    <?php include 'includes/simple.php'; ?>
    <div class="clear-recaptcha"></div>

    <footer>
        &copy; 2018 - <script>document.write(new Date().getFullYear());</script> by Dai Nguyen, All Rights Reserved<br>

        <a href="http://validator.w3.org/check/referer"
        target="_blank" rel="noopener">Valid HTML</a> ~ 
        
        <a href="http://jigsaw.w3.org/css-validator/check?uri=referer" target="_blank" rel="noopener">Valid CSS</a>
    </footer>
</body>
</html>