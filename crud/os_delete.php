<?php
    include('../connection/config.php');

    $connection->query("DELETE FROM report_os WHERE ID = {$_GET['id']}");

    header("location:/" . $_GET['ref']);
?>