<!-- Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55-60  -->

<?php

$matches = array(

    [
        "home" => "Virtus Roma",
        "guest" => "Bologna",
        "home-score" => "35",
        "guest-score" => "50",
    ],

    [
        "home" => "Olimpia Milano",
        "guest" => "Treviso",
        "home-score" => "68",
        "guest-score" => "50",

    ],

    [
        "home" => "Dinamo Pavia",
        "guest" => "Bolzano",
        "home-score" => "68",
        "guest-score" => "50",
    ]

);


?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <?php foreach ($matches as $match) : ?>

        <p>
            <?= $match["home"] ?> - <?= $match["guest"] ?> | <?= $match["home-score"] ?>-<?= $match["guest-score"] ?>
        </p>


    <?php endforeach; ?>


</body>

</html>