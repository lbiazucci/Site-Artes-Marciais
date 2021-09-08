<?php 
$rootserver = $_SERVER['DOCUMENT_ROOT'];
include($rootserver . "/siteartesmarciais/header.php");

$db = mysqli_connect("localhost","root","","amteste2");

if(!$db){
    die("Connection failed: " . mysqli_connect_error());
}


?>

<head>
  <link rel="stylesheet" href="styleMatricula.css" type="text/css">
</head>

<body style="margin: 0">
    <div class="containerUnidades">
        <img class="imagemBackground" src="/siteartesmarciais/unidades/background.jpeg">

        <div class="containerApenasUnidades">
            <div class="tituloConta">Matrícula</div>
            <form method="POST" action="realizaMatricula.php" class="containerTiposMatricula">
                <div class="textoTituloMatricula">clique no curso desejado para realizar a sua matrícula!</div>

                <input type="submit" name="basic" value="Basic" class="botaoRealizaMatricula" style="grid-column: 1;">
                <input type="submit" name="essential" value="Essential" class="botaoRealizaMatricula" style="grid-column: 2;">
                <input type="submit" name="master" value="Master" class="botaoRealizaMatricula" style="grid-column: 3;">
            </form>
        </div>
    </div>
</body>

<script type="text/javascript" src="jsMatricula.js"></script>