<?php
    include '../connection/config.php';

    $res = $connection->query("SELECT MAX(ID) + 1 AS indx FROM report_cliente");
    $max = $res->fetch_assoc();

    $sql = "INSERT 
    
              INTO report_cliente
              
                 ( ID
                 , nome
                 , sobrenome
                 , email
                 , cep
                 , cidade
                 , estado
                 , logradouro
                 , numero)
                 
           VALUES( '{$max['indx']}'
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
              
                 ( ID_cliente
                 , servico
                 , tempo
                 , valor
                 , data
                 , hora
                 , descricao)
                 
           VALUES( '{$max['indx']}'
                 , '{$_POST['servico']}'
                 , '{$_POST['tempo']}'
                 , '{$_POST['valor']}'
                 , '{$_POST['data']}'
                 , '{$_POST['hora']}'
                 , '{$_POST['descricao']}')";

    $connection->query($sql);

    header('location:/os');
?>