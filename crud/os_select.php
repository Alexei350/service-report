<?php
    function SelectTable()
    {
        include 'connection/config.php';

        if (session_status() == PHP_SESSION_NONE) 
        {
            session_start();
        }

        $res = $connection->query("SELECT *
                                         , os.ID as ID_os
                                         , DATE_FORMAT(data, '%d/%m/%Y') as dta
                                         , TIME_FORMAT(hora, '%H:%i') as hra
                                         , REPLACE(valor, '.', ',') as val
                             
                                      FROM report_os as os 
                                     
                                INNER JOIN report_cliente as cliente 
                                        ON os.ID_cliente = cliente.ID

                                     WHERE os.ID_usuario = '{$_SESSION['ID']}'
                                       AND cliente.ID_usuario = '{$_SESSION['ID']}'
                                             
                                  ORDER BY data DESC");

        return $res;
    }

    function SelectEdit($id)
    {
        include 'connection/config.php';

        $res = $connection->query("SELECT *
                                        , TIME_FORMAT(hora, '%H:%i') as hra
                            
                                     FROM report_os as os 
                                    
                               INNER JOIN report_cliente as cliente 
                                       ON os.ID_cliente = cliente.ID 
                                            
                                    WHERE os.ID = '{$id}'
                                      AND os.ID_usuario = '{$_SESSION['ID']}'
                                      AND cliente.ID_usuario = '{$_SESSION['ID']}'");

        return $res;
    }
