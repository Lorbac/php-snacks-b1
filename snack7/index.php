<!-- ## Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno. -->


<?php

    include __DIR__ . "/database.php";
    include __DIR__ . "/functions.php";

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Snack7</title>
</head>
<body>
    
    <div class="container">

        <div><?php
        
            foreach ($classe as $alunno => $voti) {
                echo $alunno . "= " . mediaVoti($voti) . "</br>";
            }

        ?></div>

    </div>

</body>
</html>