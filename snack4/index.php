<!-- ##Snack4 -->

<!-- Creare un array con 15 numeri casuali ( da 1 a 100), tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php 

    $numberContainer= [];

    while (count($numberContainer) < 15) {
        $rnd = rand(1,100);
        if (!in_array($rnd, $numberContainer)) {
            $numberContainer[] = $rnd;
        }
    }
    var_dump($numberContainer);
?>