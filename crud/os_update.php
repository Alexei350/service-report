<?php
    include '../connection/config.php';
    session_start();

    $sql = "UPDATE report_os 
    
               SET servico = '{$_POST['servico']}'
                 , tempo = '{$_POST['tempo']}'
                 , valor = '{$_POST['valor']}'
                 , data = '{$_POST['data']}'
                 , hora = '{$_POST['hora']}'
                 , descricao = '{$_POST['descricao']}'
                 
             WHERE ID = '{$_GET['id']}'
               AND ID_usuario = '{$_SESSION['ID']}'";

    $connection->query($sql);

    $sql = "SELECT cliente.ID AS clienteID
              
              FROM report_cliente AS cliente
          
        INNER JOIN report_os AS os
                ON os.ID_cliente = cliente.id
                
             WHERE os.ID = '{$_GET['id']}'
               AND os.ID_usuario = '{$_SESSION['ID']}'
               AND cliente.ID_usuario = '{$_SESSION['ID']}'";

    $res = $connection->query($sql);
    $cliente = $res->fetch_assoc();

    $sql = "UPDATE report_cliente 
    
               SET nome = '{$_POST['nome']}'
                 , sobrenome = '{$_POST['sobrenome']}'
                 , email = '{$_POST['email']}'
                 , cep = '{$_POST['cep']}'
                 , cidade = '{$_POST['cidade']}'
                 , estado = '{$_POST['estado']}'
                 , logradouro = '{$_POST['logradouro']}'
                 , numero = '{$_POST['numero']}'
                 
			 WHERE ID = '{$cliente['clienteID']}'
			   AND ID_usuario = '{$_SESSION['ID']}'";

    $connection->query($sql);

    header('location:/pesquisar');
