<?php
    session_start();
    
    $connect = mysqli_connect('127.0.0.1', 'root', '', 'amteste2');

    if(!$connect){
		die("Connection failed: " . mysqli_connect_error());
	}

    $inicioMatricula = date('Y-m-d');
    $terminoMatricula = new DateTime(date('Y-m-d'));
    date_add($terminoMatricula, date_interval_create_from_date_string('30 days'));
    $terminoMatricula = $terminoMatricula->format('Y-m-d');

    $querySQL = "SELECT * FROM cliente WHERE email='" . $_SESSION['email'] . "'";
    $records = mysqli_query($connect, $querySQL);
    $idcliente = null;
    while($data = mysqli_fetch_array($records)){
        $idcliente = $data['id_cliente'];
    }

    $querySQL = "SELECT nome_plano FROM matricula INNER JOIN cliente ON matricula.id_cliente = $idcliente";
    $result = mysqli_query($connect, $querySQL);
    while($data = mysqli_fetch_array($result)){
        $querySQL = "DELETE FROM matricula WHERE id_cliente=$idcliente";
        $register = mysqli_query($connect, $querySQL) or die('Erro ao apagar a matrícula!');
    }

    if(isset($_POST["basic"])) {
        $intrand = rand(0, 9999);
        $query = "INSERT INTO matricula (id_matricula, dt_inicio, dt_termino, id_cliente, nome_plano) VALUES ('$intrand', '$inicioMatricula', '$terminoMatricula', $idcliente, 'Basic')";
        $register = mysqli_query($connect, $query) or die('Erro ao executar a matrícula! 1');
        header("Location: minhaConta.php");
    } else{
        if (isset($_POST["essential"])){
            $intrand = rand(0, 9999);
            $query = "INSERT INTO matricula (id_matricula, dt_inicio, dt_termino, id_cliente, nome_plano) VALUES ('$intrand', '$inicioMatricula', '$terminoMatricula', $idcliente, 'Essential')";
            $register = mysqli_query($connect, $query) or die('Erro ao executar a matrícula! 2');
            header("Location: minhaConta.php");
        } else {
            if (isset($_POST["master"])){
                $intrand = rand(0, 9999);
                $query = "INSERT INTO matricula (id_matricula, dt_inicio, dt_termino, id_cliente, nome_plano) VALUES ('$intrand', '$inicioMatricula', '$terminoMatricula', $idcliente, 'Master')";
                $register = mysqli_query($connect, $query) or die(mysqli_error($connect));
                header("Location: minhaConta.php");
            }
        }
    }

?>