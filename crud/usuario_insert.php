<?php
    include '../connection/config.php';

    $senha = md5($_POST['senha']);
    $sql = "INSERT 
    
              INTO usuario
              
                 ( nome
                 , sobrenome
                 , email
                 , senha
                 , empresa
                 , endereco
                 , cpfcnpj
                 , pais
                 , estado
                 , cep)
                 
           VALUES( '{$_POST['nome']}'
                 , '{$_POST['sobrenome']}'
                 , '{$_POST['email']}'
                 , '{$senha}'
                 , '{$_POST['empresa']}'
                 , '{$_POST['endereco']}'
                 , '{$_POST['cpfcnpj']}'
                 , '{$_POST['pais']}'
                 , '{$_POST['estado']}'
                 , '{$_POST['cep']}')";

    $connection->query($sql);

    header('location:/login');
?>