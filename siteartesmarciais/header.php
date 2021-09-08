<?php
	session_start();
?>

<link rel="stylesheet" href="/siteartesmarciais/styleHeader.css" type="text/css">

<div class="containerGeral">
	<div class="flexEsquerdo">
		<div class="logo"><img src="/siteartesmarciais/logo.png" style="object-fit: contain; height: 100%; z-index:100"></div>
		<button class="botaoHeader" onclick="botaoHome()">Início</button>
		<button class="botaoHeader" onclick="botaoUnidades()">Unidades</button>
		<button class="botaoHeader" onclick="botaoCursos()">Cursos</button>
		<button class="botaoHeader" onclick="botaoSuporte()">Suporte</button>
	</div>
	<div class="flexDireito">
		<?php if(!isset($_SESSION['email'])) {echo "<button class='botaoHeader' onclick='iniciaLogin()'>Login</button>";}?>
		<?php if(isset($_SESSION['email'])) {echo "
			<button class='botaoHeader' style='width: 130px;' onclick='minhaConta()'>Minha Conta</button>
			<form method='POST' action='logout.php'>
				<input type='hidden' value='<?=$nome?>'>
				<button class='botaoHeader' onclick='minhaConta()'>logout</button>
			</form>"
			;}?>
	</div>
</div>

<form method="POST" action="confLogin.php">
	
	<div class="fundoLogin" id="fundo" onclick="fechaLogin()"></div>
	<div class="popUpLogin" id="janelaLogin">
		<div class="textoLogin" style="grid-row: 2;">login</div>
		<input class="caixaLogin" style="grid-row: 3;" type="text" name="email" placeholder="Email">
		<div class="textoLogin" style="grid-row: 4;">senha</div>
		<input class="caixaLogin" style="grid-row: 5;" type="password" name="passwd" placeholder="Password">
		<div class="containerBotoesLogin" style="grid-row: 7;">
			<div class="botaoLoginRegistro" style="order: 1; line-height: 40px;" onclick="botaoRegistro()">registro</div>
			<button class="botaoLoginRegistro" style="order: 2">login</button>
		</div>
	</div>

</form>


<script type="text/javascript" src="/siteartesmarciais/jsHeader.js"></script>