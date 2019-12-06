<?php
    include 'connection/config.php';

    if (session_status() == PHP_SESSION_NONE) 
    {
        session_start();
    }

    $res = $connection->query("SET lc_time_names = 'pt_BR';");
    $res = $connection->query("SELECT DATE_FORMAT(os.data, '%M') AS mes
                                    , DATE_FORMAT(os.data, '%Y') AS ano
                                    , SUM(os.tempo) AS temp
                                    , REPLACE(SUM(os.valor), '.', ',') AS val 
                                    , COUNT(os.id) as qtd
                                    , COUNT(DISTINCT(os.data)) as dias
                                    
                                FROM report_os AS os 
                                
                          INNER JOIN report_cliente AS cliente 
                                  ON os.ID_cliente = cliente.id 
                                
                               WHERE os.ID_usuario = '{$_SESSION['ID']}'
                                 AND cliente.ID_usuario = '{$_SESSION['ID']}'
                                    
                            GROUP BY DATE_FORMAT(os.data, '%Y-%m') 
                            
                            ORDER BY DATE_FORMAT(os.data, '%Y-%m') desc");
