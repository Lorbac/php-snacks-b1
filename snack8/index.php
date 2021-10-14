<!-- #snack 8
Partendo da questo array: https://www.codepile.net/pile/Po60bjgQ
Ad ogni refresh della pagina visualizzare una pubblicità a schermo, tenendo conto che possono essere sorteggiate solo quelle is_active true. -->



<?php

    include __DIR__ . "/partials/database.php";

    $aviableAds = [];
    foreach ($ads as $ad) {
        if ($ad["is_active"]) {
            $aviableAds[] = $ad;
        }
    }

    $currentActive = $aviableAds[rand(0, count($aviableAds) -1)];

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Snack8</title>
</head>
<body>
    
    <div class="container">
        <a href="<?php echo $currentActive["link"] ?>">
        <img src="<?php echo $currentActive["image_path"] ?>" alt="">
        </a>
    </div>

</body>
</html>