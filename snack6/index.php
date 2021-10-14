<?php
    include __DIR__ . '/database.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Snack6</title>
</head>
<body>
    <div class="container">

        <div class="teachers"><?php

            foreach ($db as $key => $role) {
                if ($key === "teachers") {
                    echo $key . "<hr>" . "</br>";
                    foreach ($role as $person) {
                        echo "nome: " . $person["name"] . "</br>" . "cognome: " . $person["lastname"] . "<hr>" . "</br>" ;
                    }
                }
            }
            

        ?></div>

        <div class="pm"><?php

            foreach ($db as $key => $role) {
                if($key === "pm") {
                    echo $key . "<hr>" . "</br>";
                    foreach ($role as $person) {
                        echo "nome: " . $person["name"] . "</br>" . "cognome: " . $person["lastname"] . "<hr>" . "</br>";
                    }
                }
            }

        ?></div>

    </div>

</body>
</html>




