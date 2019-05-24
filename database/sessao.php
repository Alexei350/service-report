<?
    /*$mysqli = new mysqli("127.0.0.1", "root", "", "projeto", 3306);

    $_SESSION['Nome'] = 'Seu Zé';
    $_SESSION['Email'] = $_POST['email'];

    $sql = "INSERT 
            
              INTO USUARIO 
            
              ( Nome
              , Email
              , Senha)
            
          VALUES ('Seu Zé'
              ,  '{$_POST['email']}'
              ,  '{$_POST['senha']}')";

    $mysqli->query($sql);

    header("location:login.php");*/

    $xmldata = simplexml_load_file("config.xml") or die("Falha ao carregar XML");

    $host = $xmldata->host;
    $user = $xmldata->user;
    $password = $xmldata->password;
    $database = $xmldata->database;
    $port = $xmldata->port;
    
    $mysqli = new mysqli($host, $user, $password, $database, $port) or die ("Erro ao conectar ao banco de dados");

    session_start();

    $_SESSION['Nome'] = 'Alexei';
    $_SESSION['Email'] = $_POST['email'];

    $login = $_POST['email'];
    $senha = $_POST['senha'];
    
    $senhaMD5 = md5($senha);
    $sql = "SELECT * FROM `usuario` WHERE `email` = '$login' AND `senha`= '{$senhaMD5}'";
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