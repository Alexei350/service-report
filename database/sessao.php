<?php  
    $xmldata = simplexml_load_file("config.xml") or die("Falha ao carregar XML");

    session_start();
    
    $host = $xmldata->host;
    $user = $xmldata->user;
    $password = $xmldata->password;
    $database = $xmldata->database;
    $port = (int)$xmldata->port;
    
    $mysqli = new mysqli($host, $user, $password, $database, $port) or die ("Erro ao conectar ao banco de dados");

    $_SESSION['Nome'] = 'Alexei';
    $_SESSION['Email'] = $_POST['email'];

    $senha = $_POST['senha'];
    $senhaMD5 = md5($senha);

    $sql = "SELECT * FROM `usuario` WHERE `email` = '{$_POST['email']}' AND `senha`= '{md5($senha)}'";
    $resultado = $mysqli->query($sql);

    if(mysqli_num_rows($resultado) > 0)
    {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;

        header('location:/login');
    }
    else
    {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);

        header('location:/login');
    }
?>