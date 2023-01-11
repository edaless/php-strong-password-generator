<!-- 
Dobbiamo creare una pagina che permetta ai nostri utenti 
di utilizzare il nostro generatore di password sicure. 
-->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- fontawesome -->
    <!-- <script src="https://kit.fontawesome.com/a523a9c105.js" crossorigin="anonymous"></script> -->
    <!-- bootstrap -->
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous"> -->

    <!-- Ajax -->
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.20.0/axios.min.js"></script> -->
    <!-- Vue -->
    <!-- <script src="https://unpkg.com/vue@3"></script> -->
    <!-- CSS -->
    <!-- <link rel="stylesheet" href="CSS/style.css"> -->
    <!--gfont-->
    <!-- <link rel="preconnect" href="https://fonts.googleapis.com"> -->
    <!-- <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin> -->
    <!--roboto -->
    <!-- <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet"> -->




</head>



<body>

    <!-- 
    Milestone 1
    Creare un form che invii in GET la lunghezza della password. 
    Una nostra funzione utilizzerà questo dato per generare una password casuale da restituire all’utente. 
    La password dovra' essere composta da 
    
    lettere minuscole e 
    
    maiuscole, 
    
    numeri e 
    
    simboli

    Scriviamo tutto (logica e layout) in un unico file index.php.
    -->


    <form>
        <label for="lunghezza">lunghezza</label>
        <input type="number" name="lunghezza">
        <input type="submit" value="vai">

    </form>
    <div>
        <?php
        $lunghezza = 0;
        $lunghezza = $_GET["lunghezza"];
        $password = "";

        for ($i = 0; $i < $lunghezza; $i++) {
            $tipo = rand(1, 4);
            // echo $tipo . ")  ";

            if ($tipo === 1) {
                // lettera minuscola
                $password .= chr(rand(97, 122));
                // echo $password[strlen($password) - 1] . "<br>";
            } else if ($tipo === 2) {
                // lettera maiuscola
                $password .= chr(rand(65, 90));
                // echo $password[strlen($password) - 1] . "<br>";
            } else if ($tipo === 3) {
                // numero
                $password .= chr(rand(48, 57));
                // echo $password[strlen($password) - 1] . "<br>";
            } else {
                // simbolo
                $password .= chr(rand(33, 47));
                // echo $password[strlen($password) - 1] . "<br>";
            };
        }


        echo "la tua password è: <br><br>" . $password;



        ?>

    </div>






    <!-- mio js -->
    <!-- <script type="text/javascript" src="JS/functions.js"> -->
    <!-- </script> -->
    <!-- <script type="text/javascript" src="JS/main.js"> -->
    <!-- </script> -->
    <!-- js BootStrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> -->


</body>

</html>


<?php

?>