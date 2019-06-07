<?php
    $xmldata = simplexml_load_file("../config.xml") or die("Falha ao carregar XML");
    
    $host = $xmldata->host;
    $user = $xmldata->user;
    $password = $xmldata->password;
    $database = $xmldata->database;
    $port = (int)$xmldata->port;
    
    ini_set('default_charset', 'UTF-8');
    $mysqli = new mysqli($host, $user, $password, $database, $port) or die ("Erro ao conectar ao banco de dados");
    $mysqli->query("SET NAMES UTF8");

    $mysqli->query("DELETE FROM report_os WHERE ID = {$_GET['id']}");

    header("location:/pesquisar");
?>