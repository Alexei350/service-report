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


    session_start();

    $_SESSION['Nome'] = 'Alexei';
    $_SESSION['Email'] = $_POST['email'];

    $login = $_POST['email'];
    $senha = $_POST['senha'];

    $mysqli = new mysqli("127.0.0.1", "root", "", "projeto", 3306);
    
    $mysqli->query("SELECT * FROM `usuario` WHERE `Nome` = '$login' AND `Senha`= '$senha'");

    if(mysqli_num_rows($mysqli) > 0)
    {
        $_SESSION['login'] = $login;
        $_SESSION['senha'] = $senha;

        header('location:login.php');
    }
    else
    {
        unset ($_SESSION['login']);
        unset ($_SESSION['senha']);

        header('location:login.php');
    }
?>