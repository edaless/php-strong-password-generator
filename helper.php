<!-- 
Milestone 2
**Verificato il corretto funzionamento del nostro codice**. 
Spostiamo poi la logica in un file `helper.php` che includeremo poi nella pagina principale. 
-->






<?php



function generaPassword($lunghezza, $ripetizione)
{

    $password = "";
    $nuovoCarattere = "";

    $i = 0;
    while ($i < $lunghezza) {



        // scelta casuale TIPO CARATTERE
        $tipo = rand(1, 4);
        if ($tipo === 1) {
            // lettera minuscola
            $nuovoCarattere = chr(rand(97, 122));
        } else if ($tipo === 2) {
            // lettera maiuscola
            $nuovoCarattere = chr(rand(65, 90));
        } else if ($tipo === 3) {
            // numero
            $nuovoCarattere = chr(rand(48, 57));
        } else {
            // simbolo
            $nuovoCarattere = chr(rand(40, 47));
        };

        // se si può ripetere aggiungo il carattere e incremento l'indice, 
        // oppure:
        // se NON si può ripetere E il carattere NON è contenuto
        if (
            ($ripetizione === "si")
            || ($ripetizione === "no" && !str_contains($password, $nuovoCarattere))
        ) {
            $password .= $nuovoCarattere;
            $i++;
        };
        // se no non faccio niente 

        // prova di console log
        echo "<script>console.log( '$i   $nuovoCarattere' );</script>";
    }

    return $password;
};
