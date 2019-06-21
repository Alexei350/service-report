<?php
    include '../connection/config.php';

    $senha = md5($_POST['senha']);
    $sql = "UPDATE usuario
              
                   nome = '{$_POST['nome']}'
                 , sobrenome = '{$_POST['sobrenome']}'
                 , email = '{$_POST['email']}'
                 , senha = '{$senha}'
                 , empresa = '{$_POST['empresa']}'
                 , logradouro = '{$_POST['logradouro']}'
                 , numero = '{$_POST['numero']}'
                 , cpfcnpj = '{$_POST['cpfcnpj']}'
                 , estado = '{$_POST['estado']}'
                 , cep) = '{$_POST['cep']}'
                 
             WHERE id = {}";

    $connection->query($sql);

    header('location:/');
?>