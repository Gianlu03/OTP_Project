<!--PAGINA DI CONNESSIONE AL SERVER SQLSERVER

    Viene eseguita la connessione al server tramite autenticazione windows -> forniti nome server
    e nome DB che vengono inseriti in un array associativo, in quanto parametro richiesto dalla libreria sqlsrv
    (sqlsrv_connect) -> il quale stabilisce la connessione al db

    Il risultato di sqlsrv_connect è ritornato in $conn_sql -> booleano, se falso il server non è connesso 
    correttamente

    verifica funzionalità tramite localhost/sitocrittografia/php/Connect_Db.php

-->

<?php
    $serverName = "HP-GIANLU03\SCUOLA";
    $sql_dbnm = "DatabaseOTP";

    $connectionInfo = array( "Database"=>"$sql_dbnm");

    $conn_sql = sqlsrv_connect($serverName, $connectionInfo);

    if(!$conn_sql){
        //stringa utilizzata per verificare che il server si connetta correttamente
        echo "Connessione al database fallita!";
    }

    //Se il server si è connesso correttamente lo possiamo utilizzare in altri file php in quanto incluso

?>