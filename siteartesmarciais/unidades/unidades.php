<?php 
$rootserver = $_SERVER['DOCUMENT_ROOT'];
include($rootserver . "/siteartesmarciais/header.php");
?>

<head>
    <link rel="stylesheet" href="styleUnidades.css" type="text/css">
</head>

<body style="margin: 0">
    <div class="containerUnidades">
        <img class="imagemBackground" src="/siteartesmarciais/unidades/background.jpeg">

        <div class="containerApenasUnidades">
            <div class="botaoSeta botaoEsquerda" onclick="alteraUnidadeAtras()"></div>
            <div class="botaoSeta botaoDireita" onclick="alteraUnidadeFrente()"></div>

            <div class="containerImagemTexto " style="background-image: url(academia1.jpeg);">
                <div class="containerTextoUnidade">
                    <div class="textoUnidade"> 
                        <div class="divisaoTextosUnidade" style="order: 1;"><span style="color: #ff2828;">Unidade:</span> Santana</div>

                        <div class="divisaoTextosUnidade" style="order: 2;"><span style="color: #ff2828;">Cursos oferecidos:</span> judô, jiu jitsu, boxe</div>

                        <div class="divisaoTextosUnidade" style="order: 3;"><span style="color: #ff2828;">localização:</span> Avenida brás leme, Nº 123</div>

                        <div class="divisaoTextosUnidade" style="order: 4;"><span style="color: #ff2828;">descrição:</span> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Vivamus aliquam massa ac ipsum cursus imperdiet finibus tincidunt nisi. Proin eu volutpat massa. Fusce
                        hendrerit venenatis elit sit amet pretium. Quisque sed erat eget justo tincidunt efficitur.</div>
                    </div>
                </div>
            </div>

            <div class="containerImagemTexto inativo" style="background-image: url(academia2.jpeg);">
                <div class="containerTextoUnidade">
                    <div class="textoUnidade"> 
                        <div class="divisaoTextosUnidade" style="order: 1;"><span style="color: #ff2828;">Unidade:</span> Mandaqui</div>

                        <div class="divisaoTextosUnidade" style="order: 2;"><span style="color: #ff2828;">Cursos oferecidos:</span> judô, jiu jitsu, boxe, kendô, krav maga</div>

                        <div class="divisaoTextosUnidade" style="order: 3;"><span style="color: #ff2828;">localização:</span> Rua dos Palmares, Nº 321</div>

                        <div class="divisaoTextosUnidade" style="order: 4;"><span style="color: #ff2828;">descrição:</span> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Vivamus aliquam massa ac ipsum cursus imperdiet finibus tincidunt nisi. Proin eu volutpat massa. Fusce
                        hendrerit venenatis elit sit amet pretium. Quisque sed erat eget justo tincidunt efficitur.</div>
                    </div>
                </div>
            </div>

            <div class="containerImagemTexto inativo" style="background-image: url(academia3.jpeg);">
                <div class="containerTextoUnidade">
                    <div class="textoUnidade"> 
                        <div class="divisaoTextosUnidade" style="order: 1;"><span style="color: #ff2828;">Unidade:</span> Jardim São Paulo</div>

                        <div class="divisaoTextosUnidade" style="order: 2;"><span style="color: #ff2828;">Cursos oferecidos:</span> krav maga, boxe, muay thai, caratê</div>

                        <div class="divisaoTextosUnidade" style="order: 3;"><span style="color: #ff2828;">localização:</span> Rua leôncio de magalhães, Nº 4444</div>

                        <div class="divisaoTextosUnidade" style="order: 4;"><span style="color: #ff2828;">descrição:</span> Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Vivamus aliquam massa ac ipsum cursus imperdiet finibus tincidunt nisi. Proin eu volutpat massa. Fusce
                        hendrerit venenatis elit sit amet pretium. Quisque sed erat eget justo tincidunt efficitur.</div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>

<script type="text/javascript" src="jsUnidades.js"></script>