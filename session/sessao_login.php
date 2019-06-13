<?php  
    session_start();

    include('../connection/config.php');

    $senha = md5($_POST['senha']);
    $sql = "SELECT * FROM `usuario` WHERE `email` = '{$_POST['email']}' AND `senha`= '{$senha}'";

    $consulta = $connection->query($sql);

    if(mysqli_num_rows($consulta) > 0)
    {
        $resultado = $consulta->fetch_assoc();

        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['ID'] = $resultado['ID'];

        header('location:/');
    }
    else
    {
        unset ($_SESSION['nome']);
        unset ($_SESSION['ID']);

        header('location:/login');
    }
?>