<?php
    $xmldata = simplexml_load_file($_SERVER['DOCUMENT_ROOT'] . "/connection/config.xml") or die("Falha ao carregar XML");

    $host = $xmldata->host;
    $user = $xmldata->user;
    $password = $xmldata->password;
    $database = $xmldata->database;
    $port = (int)$xmldata->port;
    
    ini_set('default_charset', 'UTF-8');
    $connection = new mysqli($host, $user, $password, $database, $port) or die ("Erro ao conectar ao banco de dados");
    $connection->query("SET NAMES UTF8");
?>