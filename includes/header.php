<!DOCTYPE html>
<html lang="en-US">
<head>
	<title> <?=$title?> </title>

	<!-- Enhance Websites Detail to Help Search Engines -->
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="description" content="<?=$meta_description?>">
	<meta name="keywords" content="<?=$meta_keyword?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<!-- Robot SEO Tag -->
	<meta name="robots" content="index,follow">

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

	<!-- CSS & FontAwesome-->
	<link rel="preload" href="/css/all.css" as="style" onload="this.onload=null;this.rel='stylesheet'">

	<?=$formCSS?>

	<!-- Javascript -->
	<script defer src="/js/all.js"></script>
	
	<!-- Global site tag (gtag.js) - Google Analytics & Google Optimize-->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-127509718-1"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag() { dataLayer.push(arguments); }
		gtag('js', new Date());

		gtag('config', 'UA-127509718-1');
	</script>

	<!-- Load CSS & FontAwesome When JavaScript is Disabled -->
	<noscript>
        <link rel="stylesheet" type="text/css" href="/css/main.min.css">
        <link rel="stylesheet" type="text/css" href="/css/form.min.css">
		<link rel="stylesheet" type="text/css" href="/css/fasolidbrand.css">
	</noscript>
</head>

<body>
	<div class="content">
		<header>
			<div class="headerBackgroundImage"></div>
			<nav>
				<ul class="topnav" id="myTopnav">
					<li><a href="/">Home</a></li>
					<li><a href="http://dlresume.dai-nguyen.com" download="Dai Nguyen - Resume">Download Resume</a></li>
					<li><a href="/#project">Projects</a></li>
					<li><a href="/contactme.php">Contact Me</a></li>
					<li class="icon"> <a href="javascript:void(0);" onclick="myFunction()">&#9776;</a> </li>
				</ul>
			</nav>
		</header>