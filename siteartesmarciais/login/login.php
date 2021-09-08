<?php 
$rootserver = $_SERVER['DOCUMENT_ROOT'];
include($rootserver . "/siteartesmarciais/header.php");
?>

<head>
    <link rel="stylesheet" href="styleLogin.css" type="text/css">
</head>

<body style="margin: 0">
    <div class="containerUnidades">
        <img class="imagemBackground" src="/siteartesmarciais/unidades/background.jpeg">

        <div class="containerApenasUnidades">
            <div class="botaoSeta botaoEsquerda" onclick="alteraUnidadeAtras()"></div>
            <div class="botaoSeta botaoDireita" onclick="alteraUnidadeFrente()"></div>

            <div class="containerImagemTexto " style="background-image: url(judo.jpeg);">
                <div class="containerTextoUnidade">
                    <div class="textoUnidade"> 
                        <div class="divisaoTextosUnidade" style="order: 1;"><span style="color: #ff2828;">Curso:</span> judô</div>

                        <div class="divisaoTextosUnidade" style="order: 2;"><span style="color: #ff2828;">Unidades disponíveis:</span> Santana, Mandaqui</div>

                        <div class="divisaoTextosUnidade" style="order: 4;"><span style="color: #ff2828;">descrição:</span> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Vivamus aliquam massa ac ipsum cursus imperdiet finibus tincidunt nisi. Proin eu volutpat massa. Fusce
                        hendrerit venenatis elit sit amet pretium. Quisque sed erat eget justo tincidunt efficitur.</div>
                    </div>
                </div>
            </div>

            <div class="containerImagemTexto inativo" style="background-image: url(jiujitsu.jpeg);">
                <div class="containerTextoUnidade">
                    <div class="textoUnidade"> 
                        <div class="divisaoTextosUnidade" style="order: 1;"><span style="color: #ff2828;">Curso:</span> jiu jitsu</div>

                        <div class="divisaoTextosUnidade" style="order: 2;"><span style="color: #ff2828;">Unidades disponíveis:</span> Santana, Mandaqui</div>

                        <div class="divisaoTextosUnidade" style="order: 4;"><span style="color: #ff2828;">descrição:</span> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Vivamus aliquam massa ac ipsum cursus imperdiet finibus tincidunt nisi. Proin eu volutpat massa. Fusce
                        hendrerit venenatis elit sit amet pretium. Quisque sed erat eget justo tincidunt efficitur.</div>
                    </div>
                </div>
            </div>

            <div class="containerImagemTexto inativo" style="background-image: url(boxe.jpeg);">
                <div class="containerTextoUnidade">
                    <div class="textoUnidade"> 
                        <div class="divisaoTextosUnidade" style="order: 1;"><span style="color: #ff2828;">Curso:</span> boxe</div>

                        <div class="divisaoTextosUnidade" style="order: 2;"><span style="color: #ff2828;">Unidades disponíveis:</span> Santana, Mandaqui, Jardim São Paulo</div>

                        <div class="divisaoTextosUnidade" style="order: 4;"><span style="color: #ff2828;">descrição:</span> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Vivamus aliquam massa ac ipsum cursus imperdiet finibus tincidunt nisi. Proin eu volutpat massa. Fusce
                        hendrerit venenatis elit sit amet pretium. Quisque sed erat eget justo tincidunt efficitur.</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>

<script type="text/javascript" src="jsLogin.js"></script>