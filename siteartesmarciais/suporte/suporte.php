<?php 
$rootserver = $_SERVER['DOCUMENT_ROOT'];
include($rootserver . "/siteartesmarciais/header.php");
?>

<head>
    <link rel="stylesheet" href="styleSuporte.css" type="text/css">
</head>

<body style="margin: 0">

    <div class="containerUnidades">
        <img class="imagemBackground" src="/siteartesmarciais/unidades/background.jpeg">

        <div class="containerApenasUnidades">
            <div class="containerImagemTexto " style="background-image: url(background.jpeg); z-index: 3">
                <div class="containerTextoUnidade">
                    <div class="textoUnidade"> 
                        <div class="divisaoTextosUnidade" style="order: 1;">
                            Deseja falar conosco?<br>
                            Nos mande um e-mail!<br><br>
                            <form action="mailto:leonardo.biazucci@usp.br" method="post" enctype="text/plain">
                                Seu nome:<br>
                                <input type="text" name="Nome:"><br>
                                Comentário:<br>
                                <input type="text" name="Comentário:" size="50" style="height: 60%; width: 80%"><br>
                                <input type="submit" value="Send">
                                <input type="reset" value="Reset">
                            </form></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>

<script type="text/javascript" src="jsSuporte.js"></script>