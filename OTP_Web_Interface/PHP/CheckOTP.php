<?php
    
    include "Login.php";

    function ValidateValue($value){
        $value = trim($value);
        $value = stripslashes($value);
        $value = htmlspecialchars($value);
        return $value;
    }

    $seed = $_SESSION['Seed'];  //--> dall'altro file incluso mantengo il valore del seed
            
    //$date = date('Y-m-d');     //Con questo ricaverei tutta la data, mi evito un passaggio con:

    $year = (int)date('y');      //anno (ultime 2 cifre, anno intero con Y)
    $month = (int)date('M');     //mese
    $day = (int)date('D');       //giorno
    
    $hour = (int)date('G');      //ricavo ora -> formato 24h
    $minute = (int)date('i');    //ricavo minuti

    //==================OTP==========================
    //Ricavo dal seme i caratteri nelle posizioni della data
    $Message = "" . $seed[$year] . $seed[$month] . $seed[$day] . $seed[$hour] . $seed[$minute];

    //Cripto il messaggio con MD5
    $Message = md5($Message);

    //Prelevo i primi 6 caratteri del risultato
    $CorrectOTP = substr($Message, 0, 6);
    //=============================================

    if(isset($_POST['OTP'])){

        $otp = ValidateValue($_POST['OTP']);

        if (empty($otp)) {
            header("Location: PutOTP.php?error=OTP is Required"); //Invio all'URL un header http per indicare si è verificato un errore
            exit(); //blocca lo script corrente
        }
        else if($otp == $CorrectOTP){
            header("Location: home.php?");
            exit();
        }
        else{
            header("Location: PutOTP.php?error=Incorrect OTP"); //Invio all'URL un header http per indicare si è verificato un errore
            exit();
        }

        

    }


?> 
 
