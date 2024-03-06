<?php
//programma che controlla la validità della password di un utente
/*
function ControlloPassword()
{
    $password = readline("Inserisci la password, con almeno: 8 caratteri Una lettera maiuscola  Almeno un carattere numerico Almeno un carattere speciale ");
    $passLength = strlen($password);
    $characters8 = false;
    $containsCapsLock = false;
    $containsNumbers = false;
    $containsSpecial = false;

    if ($passLength >= 8) {
        $characters8 = true;
    }

    //controllo caps lock

    for ($i = 0; $i < $passLength; $i++) {
        if (ctype_upper($password[$i])) {
            $containsCapsLock = true;
            break;
        }


    }
    print_r($containsCapsLock);

    //controllo numeri
    for ($i = 0; $i < $passLength; $i++) {
        if (is_numeric($password[$i])) {
            $containsNumbers = true;
            break;
        }
    }
    //controllo caratteri speciali
    if (!preg_match('/^[A-Za-z0-9]$/', $password)) {
        $containsSpecial = true;
    }

    if ($characters8 == true && $containsSpecial == true && $containsNumbers == true && $containsCapsLock == true) {
        echo "la password è corretta";
    } else {
        echo "La password non verifica i requisiti";
        ControlloPassword();

    }

}

ControlloPassword();
*/

// controllo password 2
$password = readline('Inserire la nuova password :');
function CheckPassword($password)
{

    $passlength = strlen($password);
    $caratterespeciale = preg_match('/[^A-Za-z0-9]/', $password);
    $maiuscolo = preg_match('/[A-Z]/', $password);
    $numeri = preg_match('/[0-9]/', $password);
    if ($passlength < 8) {
        echo 'La password non è valida, deve avere più di 8 caratteri';
        $password = readline('Inserire la nuova password :');
        CheckPassword($password);
        
    } else if (!$maiuscolo) {
        echo 'La password non è valida, deve avere almeno una lettera Maiuscola';
        $password = readline('Inserire la nuova password :');
        CheckPassword($password);
        
    } else if (!$caratterespeciale) {
        echo 'La password non è corretta, deve avere almeno un carattere speciale!';
        $password = readline('Inserire la nuova password :');
        CheckPassword($password);
    } else if (!$numeri) {
        echo 'La password non è valida, deve avere almeno un numero';
        $password = readline('Inserire la nuova password :');
        CheckPassword($password);
    } else {
        echo 'La password verifica tutti i requisiti';
    }

}
CheckPassword($password);