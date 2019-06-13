<?php
    include '../connection/config.php';
    session_start();

    $res = $connection->query("SELECT MAX(ID) + 1 AS indx FROM report_cliente WHERE ID_usuario = '{$_SESSION['ID']}'");
    $cliente = $res->fetch_assoc();

	$res = $connection->query("SELECT MAX(ID) + 1 AS indx FROM report_os WHERE ID_usuario = '{$_SESSION['ID']}'");
	$os = $res->fetch_assoc();

    $sql = "INSERT 
    
              INTO report_cliente
              
                 ( ID
                 , ID_usuario
                 , nome
                 , sobrenome
                 , email
                 , cep
                 , cidade
                 , estado
                 , logradouro
                 , numero)
                 
           VALUES( '{$cliente['indx']}'
                 , '{$_SESSION['ID']}'
                 , '{$_POST['nome']}'
                 , '{$_POST['sobrenome']}'
                 , '{$_POST['email']}'
                 , '{$_POST['cep']}'
                 , '{$_POST['cidade']}'
                 , '{$_POST['estado']}'
                 , '{$_POST['logradouro']}'
                 , '{$_POST['numero']}')";

	$connection->query($sql);

    $sql = "INSERT 
    
              INTO report_os
              
                 ( ID
				 , ID_cliente
                 , ID_usuario
                 , servico
                 , tempo
                 , valor
                 , data
                 , hora
                 , descricao)
                 
           VALUES( '{$os['indx']}'
			     , '{$cliente['indx']}'
                 , '{$_SESSION['ID']}'
                 , '{$_POST['servico']}'
                 , '{$_POST['tempo']}'
                 , '{$_POST['valor']}'
                 , '{$_POST['data']}'
                 , '{$_POST['hora']}'
                 , '{$_POST['descricao']}')";

	$connection->query($sql);

    header('location:/os');
