    <!-- PAGINA DI VERIFICA DI INSERIMENTO CORRETTO DEI DATI DELL'UTENTE-->

<?php
    session_start();
    
    include "Connect_DB.php";

    //Controllo se sono stati settati i valori nel form nei campi email e password
    if(isset($_POST['email']) && isset($_POST['password'])){
        /*
            La funzione ValidateValue:
            -Rimuove spazi bianchi prima e dopo con trim()
            -Rimuove le virgolette poste alla stringa con stripslashes()
            -Sostituisce caratteri speciali di HTML con stringhe che ne permettono una visualizzazione corretta:
            es: < (less than)  -->	&lt;*/
        function ValidateValue($value){
            $value = trim($value);
            $value = stripslashes($value);
            $value = htmlspecialchars($value);
            return $value;
        }

        //I valori presi dai form email e password vengono resi validi

        $email = ValidateValue($_POST['email']);
        $password = ValidateValue($_POST['password']);

        //Tramite la funzione empty posso verificare se una variabile è vuota, in seguito voglio avvisare l'utente

        if (empty($email)) {
            header("Location: ..\index.php?error=Email is required"); //Invio all'URL un header http per indicare si è verificato un errore
            exit(); //blocca lo script corrente
        }else if(empty($password)){
            header("Location: ..\index.php?error=Password is required");
            exit();
        }else{

            //Metto nella variabile $query l'interrogazione da eseguire al DB
            $query = "SELECT * FROM [User] WHERE [Email] = '$email' AND [Password] = '$password'";
            
            //Viene interrogato il server e ritornato l'array dei record ottenuti dalla query in 'result'
            $result = sqlsrv_query($conn_sql, $query);

            //sqlsrv_num_rows funzione che restituisce il numero di record
            if (sqlsrv_has_rows($result)) {
                $row = sqlsrv_fetch_array($result); //row è un array che riceve l'array di ritorno di sqlsrv_fetch_array(associativo)
                if ($row['Email'] === $email && $row['Password'] === $password) {
                    $_SESSION['Email'] = $row['Email'];
                    $_SESSION['Password'] = $row['Password'];
                    $_SESSION['IdUser'] = $row['IdUser'];   //QUESTO IF ELSE POTREBBE ESSERE INUTILE, CONTROLLA
                    $_SESSION['Seed'] = $row['Seed'];
                    header("Location: PutOTP.php");   //Si viene condotti alla home dopo l'accesso corretto
                    exit();
                }else{
                    //Valori corrispondenti non trovati nel DB
                    header("Location: ..\index.php?error=Incorrect Email or password");
                    exit();
                }
            }else{
                //Valori corrispondenti non ritornati, non sono ritornati record dalla query
                header("Location: ..\index.php?error=Incorrect Email or password");
                exit();
            }
        }



    }

?>