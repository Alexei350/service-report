<?php
    $xmldata = simplexml_load_file("database/config.xml") or die("Falha ao carregar XML");

    session_start();
    
    $host = $xmldata->host;
    $user = $xmldata->user;
    $password = $xmldata->password;
    $database = $xmldata->database;
    $port = (int)$xmldata->port;
    
    $mysqli = new mysqli($host, $user, $password, $database, $port) or die ("Erro ao conectar ao banco de dados");
?>