<!-- 
Milestone 2
**Verificato il corretto funzionamento del nostro codice**. 
Spostiamo poi la logica in un file `helper.php` che includeremo poi nella pagina principale. 
-->






<?php




function carattereCasuale($lunghezza)
{


    for ($i = 0; $i < $lunghezza; $i++) {



        // scelta casuale TIPO CARATTERE
        $tipo = rand(1, 4);
        if ($tipo === 1) {
            // lettera minuscola
            $password .= chr(rand(97, 122));
        } else if ($tipo === 2) {
            // lettera maiuscola
            $password .= chr(rand(65, 90));
        } else if ($tipo === 3) {
            // numero
            $password .= chr(rand(48, 57));
        } else {
            // simbolo
            $password .= chr(rand(33, 47));
        };
    }


    echo "la tua password è: <br><br>" . $password;
}
