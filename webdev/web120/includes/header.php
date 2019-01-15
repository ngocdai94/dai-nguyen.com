<!DOCTYPE html>
<html lang="en-us">
<head>
    <title><?=$title?></title>
    <meta name="viewport" content="width=device-width"/>
    <meta name="robots" content="noindex,nofollow"/>
    <meta charset="utf-8">
    <script src="https://use.fontawesome.com/6a71565c22.js"></script>
    <link rel="stylesheet" href="<?=$cssPath?>/nav.css"/> 
    <link rel="stylesheet" href="<?=$cssPath?>/portal.css"/>
    <link rel="stylesheet" href="<?=$cssPath?>/form.css"/>

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-127509718-1">
    </script>

    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());

        gtag('config', 'UA-127509718-1');
    </script>
</head>

<body>
<!-- START WRAPPER -->
<div class="wrapper">
    <header>
        <h1><a href="/webdev/web120/index.php"><i class="logo fa fa-home"></i> Dai Nguyen's SCC WEB120 Portal</a></h1>

        <nav>
            <ul class="topnav" id="myTopnav">
                <li><a href="/webdev/web120/index.php" class="selected">Welcome</a></li>
                <li><a href="/webdev/web120/big/index.php">Big</a></li>
                <li><a href="/webdev/web120/aia.php">AIA</a></li>
                <li><a href="/webdev/web120/flowchart.php">Flowchart</a></li>
                <li><a href="/webdev/web120/fp/index.php">Final Project</a></li>
                <li><a href="/webdev/web120/contactme.php">Contact Dai</a></li>
                <li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
            </ul>
        </nav> 
    </header>
    <!-- end of header here -->
