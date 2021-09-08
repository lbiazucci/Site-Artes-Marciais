<?php 
$rootserver = $_SERVER['DOCUMENT_ROOT'];
include($rootserver . "/siteartesmarciais/header.php");

$db = mysqli_connect("localhost","root","","amteste2");

if(!$db)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>

<head>
  <link rel="stylesheet" href="styleMinhaConta.css" type="text/css">
</head>

<body style="margin: 0">
    <div class="containerUnidades">
        <img class="imagemBackground" src="/siteartesmarciais/unidades/background.jpeg">

        <div class="containerApenasUnidades">
            <div class="tituloConta">Informações do usuário</div>
            <div class="containerInfosPessoais">
              <div class="textoConta">
                <?php 
                  $querySQL = "SELECT * FROM cliente WHERE email='" . $_SESSION['email'] . "'";
                  $records = mysqli_query($db, $querySQL);
                  $idcliente = null;
                  while($data = mysqli_fetch_array($records)){
                    echo "Nome: " . $data['nome'] . " " . $data['sobrenome'] . "<br>"
                    . "Sexo: " . $data['sexo'] . "<br>"
                    . "CPF: " . $data['cpf'] . "<br>"
                    . "Data de nascimento: " . $data['dt_nascimento'] . "<br>"
                    . "E-mail: " . $data['email'] . "<br>"
                    . "Telefone: " . $data['telefone'] . "<br>";
                    $idcliente = $data['id_cliente'];
                  }
                  
                ?>
              </div>
            </div>

            <div class="containerMatriculaCursos">
              <div class="textoConta" style="grid-column: 1; grid-row: 1;">
                <?php 
                  // echo $idcliente;
                  $querySQL = "SELECT nome_plano FROM matricula INNER JOIN cliente ON matricula.id_cliente = $idcliente";
                  $result = mysqli_query($db, $querySQL);
                  if (mysqli_fetch_array($result) == null){
                    echo "Você ainda não fez uma matrícula. Clique no botão abaixo para despertar sua força!";
                  }else{
                    $printa = '';
                    while($data = mysqli_fetch_array($result)){
                      $printa = $data['nome_plano'];
                    }
                    echo "Matrícula: " . $printa;
                  }
                ?>
              </div>
              <div class="containerImagemMatricula" onclick="realizaMatricula()"><img class="imagemMatricula" src="backgroundMatricula.jpeg"></div>
              <div class="fundoEscuroImagemMatricula"></div>
              <div class="textoMudarMatricula"><span>Faça um upgrade de matrícula!</span></div>
            </div>
        </div>
    </div>
</body>

<script type="text/javascript" src="jsMinhaConta.js"></script>