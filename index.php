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

    <!--gfont-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <!--roboto -->
    <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
        }

        body {
            background-color: #0e1c36;
            display: flex;
            flex-direction: column;
            align-items: center;
            font-family: 'Roboto', sans-serif;
        }

        .container {
            width: 90%;
            display: flex;
            flex-direction: column;
            align-items: center;

        }

        h1 {
            margin: 30px 0 0;
            color: #81899a;
        }

        h2 {
            margin: 10px 0 0;
            color: white;
        }

        .istruzione {
            background-color: #d5f3fd;
            color: #2f5d75;
        }

        section {
            display: flex;
            flex-direction: column;

            background-color: #f7f8f9;
            margin-top: 15px;
            padding: 15px;
            border-radius: 5px;
            width: 100%;
        }

        .riga {
            /* background-color: red; */
            margin-top: 10px;
            display: flex;
            justify-content: space-between;
            width: 100%;

        }

        .sinistra {
            width: 60%;
            /* background-color: blue; */
        }


        .destra {
            width: 40%;
            /* background-color: green; */
        }


        .inputLunghezza {
            padding: 10px;
            width: 150px;
            border: 1px solid #d2d7dc;
            border-radius: 3px;
        }
    </style>

    <?php
    include 'helper.php';
    ?>

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
    <div class="container">
        <h1>
            Strong Password Generator
        </h1>

        <h2>
            Genera una password sicura
        </h2>


        <?php

        $lunghezza = $_GET["lunghezza"];
        $ripetizione = $_GET["ripetizione"];
        $password = "";


        // se la lunghezza non è un numero 
        if (!(is_numeric($lunghezza))) {

            echo "<section class='istruzione'>
                Inserire un numero intero
                </section>
            ";
            // se la lunghezza è maggiore di 70 e i caratteri non si possono ripetere
        } else if ($ripetizione === "no" && $lunghezza > 70) {

            echo "<section class='istruzione'>
                    Sono disponibili al massimo 70 caratteri diversi
                    </section>
                ";
        } else {

            $password = generaPassword($lunghezza, $ripetizione);
        };
        ?>

        <section>

            <form>
                <div class="riga">
                    <div class="sinistra">
                        Lunghezza password:
                    </div>
                    <div class="destra">
                        <input type="text" name="lunghezza" class="inputLunghezza">

                    </div>
                </div>
                <div class="riga">
                    <div class="sinistra">
                        Consenti ripetizioni di uno o più caratteri:
                    </div>
                    <div class="destra">
                        <div>
                            <input type="radio" id="si" name="ripetizione" value="si" <?php if ($ripetizione === "si") {
                                                                                            echo "checked";
                                                                                        }   ?>>
                            <!-- la parte di php serve a far sì che se uno clicca su no il no rimane cliccato anche dopo aver generato la password -->
                            <label for="si">sì</label>
                        </div>
                        <div>
                            <input type="radio" id="no" name="ripetizione" value="no" <?php if ($ripetizione === "no") {
                                                                                            echo "checked";
                                                                                        }   ?>>
                            <label for="no">no</label>
                        </div>


                    </div>
                </div>

                <input type="submit" value="vai">

            </form>




        </section>

        <section>
            <?php
            if (strlen($password > 0)) {
                // echo "<section>$password</section>";
                echo $password;
            }

            // $password = "";
            ?>
        </section>



    </div>


    <!-- js BootStrap -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script> -->


</body>

</html>


<?php

?>