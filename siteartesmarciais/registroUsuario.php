<?php

	$email = $_POST['email'];
	$passwd = $_POST['password'];
	$password = md5($passwd);
	$nome = $_POST['nome'];
	$sobrenome = $_POST['sobrenome'];
	$cpf = $_POST['cpf'];
	$dataNascimento = $_POST['dtNascimento'];
	$sexo = $_POST['sexo'];
	$telefone = $_POST['telefone'];
	
	
	$connect = mysqli_connect('127.0.0.1', 'root', '', 'amteste2');

	if(!$connect)
	{
		die("Connection failed: " . mysqli_connect_error());
	}
	
	$idcliente = 0;
	$idexiste = 2;

	while(!$idexiste == 0){
		// $idcliente = rand(1, 1000000);
		$idcliente = $idcliente + 1;
		$idexiste = 0;

		$result = mysqli_query($connect, "SELECT id_cliente FROM cliente");
		while($data = mysqli_fetch_array($result)){
			if($idcliente == $data['id_cliente']){
				$idexiste = 1;
			}
		}
	}

	$query = "INSERT INTO cliente (id_cliente, email, senha, nome, sobrenome, cpf, dt_nascimento, sexo, telefone) VALUES ('$idcliente', '$email', '$password', '$nome', '$sobrenome', '$cpf', '$dataNascimento', '$sexo', '$telefone')";
	
	$register = mysqli_query($connect, $query) or die('Erro ao cadastrar!');

	session_start();
	$_SESSION['email'] = $email;
	header("Location: minhaConta.php");
	
	exit();
?>