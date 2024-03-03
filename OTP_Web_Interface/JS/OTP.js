var currentDate = new Date();
//ricavo minuti e secondi rimanenti al primo aggiornamento, in quanto un utente non accede perfettamente all'inizio di 5 minuti
var remainingSeconds = (60 - currentDate.getSeconds()); 

//ricavo il modulo dei minuti con 5, così da capire quanti ne mancano e ne sottraggo uno in quanto un minuto è in corso
var remainingMinutes = currentDate.getMinutes() % 2;

//traggo il numero di millisecondi mancanti al primo aggiornamento dall'accesso dell'utente
var millisecondsToUpdate = remainingSeconds*1000 + remainingMinutes*60*1000;

//Ogni n millisecondi calcolati per l'update ricarico la pagina, il che riavvia anche il php
var n = setTimeout(function(){window.location.reload(true)}, millisecondsToUpdate);




