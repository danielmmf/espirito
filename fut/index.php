<!DOCTYPE html>
<html lang="en" ng-app="gfpApp">
<base href="/">
<head>
	<meta charset="UTF-8">
	<title>.:: Global Fut Pro :: Sp :: Brasil ::.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1  maximum-scale=1 user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="HandheldFriendly" content="True">
	
	<link rel="shortcut icon" href="img/icon.png">
	
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link rel="stylesheet" href="css/materialize.min.css">
	<link rel="stylesheet" href="css/slick.css">
	<link rel="stylesheet" href="css/slick-theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.transitions.css">
	<link rel="stylesheet" href="css/lightbox.min.css">
	<link rel="stylesheet" href="css/style.css">
	
</head>

  <body ng-controller="MainCtrl">

	<!-- navbar -->
	<div class="navbar">
		<div class="container">
			<div class="panel-control-left">
				<a href="#" data-activates="slide-out-left" class="sidenav-control"><i class="fa fa-bars"></i></a>
			</div>
			<div class="site-title">
				<a href="index.php" class="logo"><h1>Global Fut PRO</h1></a>
			</div>
			<div class="panel-control-right">
				<a href="#l"><i class="fa fa-envelope"></i></a>
			</div>
		</div>
	</div>
	<!-- end navbar -->

	<!-- panel control -->
	<div class="panel-control-left">
		<ul id="slide-out-left" class="side-nav collapsible"  data-collapsible="accordion">
			<li>
				<div class="photos">
					<img ng-src="{{foto_logado}}" alt="{{nome_logado}}">
					<h3>{{nome_logado}}</h3>
				</div>
			</li>
			<li class="first-list">
				<a href="index.php"  data-activates="slide-out-left" ><i class="fa fa-home"></i>Home</a>
			</li>
			<li>
				<a href="/minha_pagina"  data-activates="slide-out-left"><i class="fa fa-question-circle"></i>Minha Pagina</a>
			</li>
			<li>
				<a href="/jogador"  data-activates="slide-out-left"><i class="fa fa-question-circle"></i>Meu Jogador</a>
			</li>
			<li ng-show='logado'>
				<div class="collapsible-header"><i class="fa fa-play"></i>Jogos <span><i class="fa fa-chevron-right"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="#">Proximos</a></li>
						<li><a href="#">Historico</a></li>
					</ul>
				</div>
			</li>
			<li ng-show='logado'>
				<div class="collapsible-header"><i class="fa fa-book"></i>Equipe <span><i class="fa fa-chevron-right"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="/minhas_equipes">Minhas equipes</a></li>
						<li><a href="/equipes">Todas as equipes</a></li>
						<li><a href="#">Jogadores</a></li>
					</ul>
				</div>
			</li>
			<li ng-show='logado'>
				<div class="collapsible-header"><i class="fa fa-shopping-bag"></i>Mercado <span><i class="fa fa-chevron-right"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="#">Buscar jogadores</a></li>
						<li><a href="#">Transferencias</a></li>
					</ul>
				</div>
			</li>
			<!--li ng-show='logado'>
				<div class="collapsible-header"><i class="fa fa-rss"></i>Blog <span><i class="fa fa-chevron-right"></i></span></div>
				<div class="collapsible-body">
					<ul class="side-nav-panel">
						<li><a href="#">Escrever</a></li>
					</ul>
				</div>
			</li>
			<li>
				<a href="#"  data-activates="slide-out-left"><i class="fa fa-question-circle"></i>Faq</a>
			</li-->

			<li>
				<a href="#"><i class="fa fa-envelope"></i>Contato</a>
			</li>
			<li ng-show='logado'>
				<a href="#" ng-click="logoff()"><i class="fa fa-sign-in"></i>Logoff</a>
			</li>
			<li ng-hide=logado>
				<a href="#" ng-click="login()"><i class="fa fa-sign-in"></i>Login</a>
			</li>
			<!--li>
				<a href="register.html"><i class="fa fa-user-plus"></i>Registrar</a>
			</li-->
		</ul>
	</div>
	<!-- end panel control -->
	
	<!-- slider -->
	<div class="slider-slick app-pages">
		<div class="slider-entry">
			
			<img src="img/slider1.jpg" alt="">
			<div class="overlay"></div>
			<div class="caption">
				<div class="container">
					<h2>Ganhe dinheiro</h2>
					<p>Lorem Ipsum Dolor Sit Meta</p>
					<button class="button">Learn More</button>
				</div>
			</div>
		</div>
		<div class="slider-entry">
			<div class="overlay"></div>
			<img src="img/slider2.jpg" alt="">
			<div class="caption">
				<div class="container">
					<h2>Monte seu time</h2>
					<p>Lorem Ipsum Dolor Sit Meta</p>
					<button class="button">Learn More</button>
				</div>
			</div>
		</div>
		<div class="slider-entry">
			<div class="overlay"></div>
			<img src="img/slider3.jpg" alt="">
			<div class="caption">
				<div class="container">
					<h2>Participe de campeonatos</h2>
					<p>Lorem Ipsum Dolor Sit Meta</p>
					<button class="button">Learn More</button>
				</div>
			</div>
		</div>
	</div>
	<!-- end slider -->

<ui-view></ui-view>
	
	<!-- footer -->
	<footer>
		<div class="container">
			<h6>Siga me os bons !</h6>
			<ul class="icon-social">
				<li class="facebook"><a href=""><i class="fa fa-facebook"></i></a></li>
				<li class="twitter"><a href=""><i class="fa fa-twitter"></i></a></li>
				<li class="google"><a href=""><i class="fa fa-google"></i></a></li>
				<li class="instagram"><a href=""><i class="fa fa-instagram"></i></a></li>
				<li class="rss"><a href=""><i class="fa fa-rss"></i></a></li>
			</ul>
			<ul>
      <li ng-repeat="message in messages">
        <!-- edit a message -->
        <input ng-model="message.text" ng-change="messages.$save(message)" />
        <!-- delete a message -->
        <button ng-click="messages.$remove(message)">Delete Message</button>
      </li>
    </ul>
			<div class="tel-fax-mail">
				<ul>
					<li><span>Tel:</span> +55 11 94043 2177</li>
					<li><span>Email:</span> globalfutpro@gmail.com</li>
				</ul>
			</div>
		</div>
		<div class="ft-bottom">
			<span>Copyright © 2017 All Rights Reserved </span>
		</div>
	</footer>
	<div id="fb-root"></div>
	<!-- end footer -->
	
	<!-- script -->
	<script src="js/jquery.min.js"></script>
	<script src="js/materialize.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/custom.js"></script>
	<script src="js/angular.min.js"></script>
	<script src="js/angular-ui-router.js"></script>
	<script src="js/firebase.js"></script>
	<script src="js/angularfire.min.js"></script>
	<script src="https://connect.facebook.net/en_US/all.js"></script>
	<script src="js/app.js"></script>
	<script src="js/controllers.js"></script>

</body>
</html>