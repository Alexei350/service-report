<?php  
    $xmldata = simplexml_load_file("config.xml") or die("Falha ao carregar XML");

    session_start();
    
    $host = $xmldata->host;
    $user = $xmldata->user;
    $password = $xmldata->password;
    $database = $xmldata->database;
    $port = (int)$xmldata->port;
    
    ini_set('default_charset', 'UTF-8');
    $mysqli = new mysqli($host, $user, $password, $database, $port) or die ("Erro ao conectar ao banco de dados");
    $mysqli->query("SET NAMES UTF8");

    $senha = md5($_POST['senha']);

    $sql = "SELECT * FROM `usuario` WHERE `email` = '{$_POST['email']}' AND `senha`= '{$senha}'";

    $consulta = $mysqli->query($sql);

    if(mysqli_num_rows($consulta) > 0)
    {
        $resultado = $consulta->fetch_assoc();

        $_SESSION['Nome'] = $resultado['nome'];
        $_SESSION['Email'] = $resultado['email'];

        header('location:/');
    }
    else
    {
        unset ($_SESSION['Nome']);
        unset ($_SESSION['Email']);

        header('location:/login');
    }
?>