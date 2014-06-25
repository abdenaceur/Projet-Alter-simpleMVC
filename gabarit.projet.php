<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title>ALTER, Montres Intelligentes Montreal</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link href='http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/main.css">
    
    
    
    <!-- MVC -->
    		<link rel="stylesheet" href="./css/normalize.css" type="text/css" media="screen">
		<link rel="stylesheet" href="./css/base_h5bp.css" type="text/css" media="screen">
		<link rel="stylesheet" href="./css/main.css" type="text/css" media="screen">
		
		<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
		<script src="./js/plugins.js"></script>
		<script src="./js/main.js"></script>
    <!-- MVC -->
    
    
    
	<link href="//netdna.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
	<script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>
</head>
<body>
	<!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
	<!-- Header mobile -->
	<header class="smartphone-visible header container">
		<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 text-left">
			<input type="text" class="form-control" placeholder='Rechercher'>
		</div>
		<div class="col-lg-5 col-md-5 col-sm-7 col-xs-8 text-right">
			<a href="login.html">SE CONNECTER</a>
			<a href="formulaire.html">S'INSCRIRE</a>
			<a href="panier.html"><i class="fa fa-shopping-cart fa-2x"></i> [2]</a>
		</div>
	</header>
	<!-- /Header mobile -->
	<!-- Header desktop -->
	<header class="container desktop-visible header">
		<div class="col-lg-5 col-md-5 col-sm-5">
			<div class="col-lg-6 col-md-6 col-sm-8 text-left">
				<input type="text" class="form-control" placeholder='Rechercher'>
			</div>
			<div class="col-lg-6 col-md-6 col-sm-4">
			</div>
		</div>
		<div class="col-lg-2 col-md-2 col-sm-2 text-center">
			<a href="?requete=acceuil" title="Return to the homepage" id="logo">
				<img src="img/alter-logo.jpg" alt="Alter" />
			</a>
		</div>
		<div class="col-lg-5 col-md-5 col-sm-5 text-right">
			<a href="?requete=login">SE CONNECTER</a>
			<a href="?requete=formulaire">S'INSCRIRE</a>
			<a href="?requete=panier"><i class="fa fa-shopping-cart fa-2x"></i> [2]</a>
		</div>
	</header>
	<!-- /Header desktop -->
	<!-- navigation -->
	<nav class="container navbar navbar-default" role="navigation">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand container smartphone-visible" href="#">
				<img src="img/alter-logo.jpg" alt="Alter" />
			</a>
		</div>
		<div class="collapse navbar-collapse" id="example-navbar-collapse">
			<ul class="nav navbar-nav">
								<li><a href="?requete=acceuil">ACCUEIL</a>

				</li>
				<li><a href="?requete=magazine">MAGAZINE</a></li>
				<li><a href="?requete=apropos">&Agrave; PROPOS</a>
				</li>
				<li><a href="?requete=produit">SPÉCIFICATIONS</a>
				</li>
				<li><a href="?requete=contact">CONTACT</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="smartphone-visible container navbar_base"></div>
	<!-- /navigation -->
    
    

			<?php 		
				$oControleur = new Controler();	
				$oControleur->gerer();
				
			?>
			<!-- Footer -->
	<footer class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<p>
					<a href="?requete=politiqueretour">POLITIQUE DE RETOUR </a>
					<a href="?requete=infoexpedition">INFORMATION D’EXP&Eacute;DITION</a>
					<a href="?requete=faq">FAQ</a>
					<a href="?requete=plandusite">PLAN DU SITE</a>
					<a href="?requete=politiqueconfidentialite">POLITIQUE DE CONFIDENTIALIT&Eacute;</a> 
				</p>
			</div>
		</div>
		<div class="row">
			<div class="col-sm-12 text-center">
				<h3>
					<a href="#" target="_blank"><i class="fa fa-instagram"></i></a>
					<a href="#" target="_blank"><i class="fa fa-youtube-square"></i></a>
					<a href="#" target="_blank"><i class="fa fa-facebook-square"></i></a>
					<a href="#" target="_blank"><i class="fa fa-twitter-square"></i></a>
					<a href="#" target="_blank"><i class="fa fa-google-plus-square"></i></a>  
				</h3>
			</div>
			<div class="col-sm-12  text-center">
				<p>&copy; ALTER 2014</p>
			</div>
		</div>
	</footer>
	<!-- /Footer -->
  	<script>
		window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')
	</script>
	<script src="js/vendor/bootstrap.min.js"></script>
	<script src="js/main.js"></script>
	<!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
	<script>
		(function(b, o, i, l, e, r) {
			b.GoogleAnalyticsObject = l;
			b[l] || (b[l] =
				function() {
					(b[l].q = b[l].q || []).push(arguments)
				});
			b[l].l = +new Date;
			e = o.createElement(i);
			r = o.getElementsByTagName(i)[0];
			e.src = '//www.google-analytics.com/analytics.js';
			r.parentNode.insertBefore(e, r)
		}(window, document, 'script', 'ga'));
		ga('create', 'UA-XXXXX-X');
		ga('send', 'pageview');
		 // script pour magazine, magazine détail
		$(function() {
			$('.menulink1').click(function(e) {
				e.preventDefault();
				$("#bg").attr('src', "./img/alter-10-01.jpg");
			});
			$('.menulink2').click(function(e) {
				e.preventDefault();
				$("#bg").attr('src', "./img/alter-10-02.jpg");
			});
			$('.menulink3').click(function(e) {
				e.preventDefault();
				$("#bg").attr('src', "./img/alter-10-03.jpg");
			});
		});
	</script>
</body>
</html>