<?php 
$rootserver = $_SERVER['DOCUMENT_ROOT'];
include($rootserver . "/siteartesmarciais/header.php");
?>

<head>
  <link rel="stylesheet" href="styleHomepage.css" type="text/css">
</head>

<body style="margin: 0">
	<div class="videoContainer" id="a">
		<video src="" class="videoPrincipal" id="video0" style="display: none;" preload autoplay muted playsinline></video>
		<video src="" class="videoPrincipal" id="video1" style="display: none;" preload autoplay muted playsinline></video>
		<video src="" class="videoPrincipal" id="video2" style="display: none;" preload autoplay muted playsinline></video>
		<video src="" class="videoPrincipal" id="video3" style="display: none;" preload autoplay muted playsinline></video>
	</div>
	<button class="textoEntrada"><p><b style="color: #ff3838">Desperte</b> sua força <br> venha para a <b style="color: #ff3838">rito gomes</b> </p></button>

	<div class="containerCurso">
		<div class="titulo" style="color: #ff3838">conheça nossos cursos</div>
		<div class="containerCardsCurso">
			
			<div class="wrapper">
			  <div class="card" style="background-image: url('card1.jpeg');">
			    <h1>Boxe</h1>
			  </div>
			</div>

			<div class="wrapper">
			  <div class="card" style="background-image: url('card2.jpeg')">
			    <h1>Judô</h1>
			  </div>
			</div>

			<div class="wrapper">
			  <div class="card" style="background-image: url('card3.jpeg')">
			    <h1>Jiu Jitsu</h1>
			  </div>
			</div>
		</div>
	</div>

	<!-- <div class="containerMapa">
		<div class="fundoVermelho"></div>
	</div> -->

</body>

<script type="text/javascript" src="jsHomepage.js"></script>