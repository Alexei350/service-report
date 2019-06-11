<?php  
    session_start();

    include('../connection/config.php');

    $senha = md5($_POST['senha']);
    $sql = "SELECT * FROM `usuario` WHERE `email` = '{$_POST['email']}' AND `senha`= '{$senha}'";

    $consulta = $connection->query($sql);

    // var_dump($consulta);

    if(mysqli_num_rows($consulta) > 0)
    {
        $resultado = $consulta->fetch_assoc();

        $_SESSION['nome'] = $resultado['nome'];
        $_SESSION['email'] = $resultado['email'];

        header('location:/');
    }
    else
    {
        unset ($_SESSION['nome']);
        unset ($_SESSION['email']);

        header('location:/login');
    }
?>