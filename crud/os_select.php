<?php
    function SelectTable()
    {
        include 'connection/config.php';

        $res = $connection->query("SELECT *
                                         , os.ID as ID_os
                                         , TIME_FORMAT(hora, '%H:%i') as hra
                             
                                      FROM report_os as os 
                                     
                                INNER JOIN report_cliente as cliente 
                                        ON os.ID_cliente = cliente.ID 
                                             
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
                                            
                                    WHERE os.ID = {$id}");

        return $res;
    }
