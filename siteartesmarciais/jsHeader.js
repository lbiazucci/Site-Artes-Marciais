function botaoHome(){
	window.location.href = "/siteartesmarciais/homepage.php";
}

function botaoUnidades(){
	window.location.href = "/siteartesmarciais/unidades/unidades.php";
}

function botaoCursos(){
	window.location.href = "/siteartesmarciais/cursos/cursos.php";
}

function botaoSuporte(){
	window.location.href = "/siteartesmarciais/suporte/suporte.php";
}

function botaoRegistro(){
	window.location.href = "/siteartesmarciais/registro.php";
}

function minhaConta(){
	window.location.href = "/siteartesmarciais/minhaConta.php";
}

// ---------------------------------------------------------------------------------------------------------//

var fundo = document.getElementById("fundo");
var janela = document.getElementById("janelaLogin");

function abreFundo(){
	fundo.style.display = "block";
	setTimeout(function(){ fundo.style.opacity = "1"; }, 50);
}

function fechaFundo(){
	fundo.style.opacity = "0";
	// setTimeout(function(){ fundo.style.opacity = "0"; }, 50);
	setTimeout(function(){ fundo.style.display = "none"; }, 1000);
}

function abreJanela(){
	janela.style.display = "grid";
	setTimeout(function(){ janela.style.opacity = "1"; }, 50);
}

function fechaJanela(){
	janela.style.opacity = "0";
	setTimeout(function(){ janela.style.display = "none"; }, 1000);
}

function iniciaLogin(){
	abreFundo();
	abreJanela();
}

function fechaLogin(){
	fechaFundo();
	fechaJanela();
}

// ---------------------------------------------------------------------------------------------------------//