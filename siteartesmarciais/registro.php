<?php 
$rootserver = $_SERVER['DOCUMENT_ROOT'];
include($rootserver . "/siteartesmarciais/header.php");
?>

<head>
  <link rel="stylesheet" href="styleRegistro.css" type="text/css">
</head>

<body style="margin: 0">
    <div class="containerUnidades">
        <img class="imagemBackground" src="/siteartesmarciais/unidades/background.jpeg">

        <div class="containerApenasUnidades">
            <div class="containerImagemTexto " style="background-image: url(background.jpeg); z-index: 3">
                <div class="containerTextoUnidade">
                    <div class="textoUnidade"> 
                        <div class="divisaoTextosUnidade" style="order: 1;">
                            Cadastro<br>
                            <br>
                            <form method="POST" action="registroUsuario.php">
                                E-mail:<br>
                                <input class="caixaRegistro" type="email" name="email"><br>
                                Senha:<br>
                                <input class="caixaRegistro" type="text" name="password"><br>
                                <br>
                                Nome:<br>
                                <input class="caixaRegistro" type="text" name="nome"><br>
                                Sobrenome:<br>
                                <input class="caixaRegistro" type="text" name="sobrenome"><br>
                                CPF:<br>
                                <input class="caixaRegistro" pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" placeholder="xxx.xxx.xxx-xx" type="text" name="cpf"><br>
                                <!-- pattern="[0-9]{3}.[0-9]{3}.[0-9]{3}-[0-9]{2}" -->
                                Data de nascimento:<br>
                                <input class="caixaRegistro" type="date" name="dtNascimento"><br>
                                Sexo:<br>
                                <input class="caixaRegistro" type="text" name="sexo"><br>
                                Telefone:<br>
                                <input class="caixaRegistro" type="number" name="telefone"><br>
                                
                                <button type="reset"> reset </button>
                                <button type="submit"> enviar </button>
                            </form></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</body>

<script type="text/javascript" src="jsRegistro.js"></script>