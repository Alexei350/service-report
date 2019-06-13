<?php
    include '../connection/config.php';
    session_start();

    $connection->query("DELETE 
    
                          FROM report_os 
                          
                         WHERE ID = {$_GET['id']} 
                           AND ID_usuario = {$_SESSION['ID']}");

    header("location:/" . $_GET['ref']);
?>