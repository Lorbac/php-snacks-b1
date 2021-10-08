<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa
del calendario.
Ogni array avrà una squadra di casa e una squadra ospite,
punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->


<?php 

    $partite = [
        [
            "squadraCasa" => "Olimpia Milano",
            "squadraOspite" => "Cantù",
            "puntiCasa" => 55,
            "puntiOspite" => 60
        ],
        [
            "squadraCasa" => "Verdi",
            "squadraOspite" => "Rossi",
            "puntiCasa" => 59,
            "puntiOspite" => 99
        ],
        [
            "squadraCasa" => "Blu",
            "squadraOspite" => "Gialli",
            "puntiCasa" => 39,
            "puntiOspite" => 70
        ]
    ];
    
    for ($i = 0 ; $i < count($partite) ; $i++) {
        echo $partite[$i]["squadraCasa"] . " - " . $partite[$i]["squadraOspite"] . " | " . $partite[$i]["puntiCasa"] . "-" . $partite[$i]["puntiOspite"] ."<br/>" ;
    }

?>