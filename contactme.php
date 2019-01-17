<?php include 'includes/config.php';?>
<!DOCTYPE html>
<html lang="en-US">
<head>
    <title>Contact Dai</title>
    <!-- Enhance Websites Detail to Help Search Engines -->
    <meta charset="UTF-8">
    <meta name="description" content="Dai Nguyen - Contact Me">
    <meta name="keywords" content="dai, nguyen, contact, me">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

 <!-- Images for favicon -->
    <meta name="msapplication-TileColor" content="#da532c">
	<meta name="theme-color" content="#ffffff">
	<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="196x196" href="/favicon-196x196.png">
	<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
	<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
	<link rel="icon" type="image/png" sizes="128x128" href="/favicon-128.png">
	<link rel="manifest" href="/site.webmanifest">
	<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
	
	<!-- CSS & Font Awesome-->
	<link rel="preload" href="css/main.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="css/form.css" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="preload" href="css/all.min.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

	<!-- No Javascript Support -->
	<noscript>
        <link rel="stylesheet" type="text/css" media="screen" href="css/main.min.css">
        <link rel="stylesheet" type="text/css" media="screen" href="css/form.css">
		<link rel="stylesheet" type="text/css" href="/css/all.min.css" > 
	</noscript>

	<!-- Javascript -->
	<script async src="js/cssrelpreload.js"></script>

	<!-- Global site tag (gtag.js) - Google Analytics & Google Optimize-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127509718-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-127509718-1', {'optimize_id': 'GTM-52RZ2ZP'});
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
        target="_blank" rel="noopener"><img style="border:0;width:88px;height:26px;margin-top:10px;"
        src="imgs/valid_html.png" alt="Valid HTML!"/></a>  
        
        <a href="https://jigsaw.w3.org/css-validator/validator?uri=dai-nguyen.com&profile=css3svg" target="_blank" rel="noopener"><img style="border:0;width:95px;height:26px"
            src="imgs/valid_css.svg"
            alt="Valid CSS!"/></a>
    </footer>
</body>
</html>