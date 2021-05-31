<!-- ## Snack 1
Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario. Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 -->

<?php

$array_match = [

    [
        "squadraCasa" => "Olimpia Milano",
        "squadraTrasferta" => "Cantù",
        "punti_casa" => rand(60, 90),
        "punti_trasferta" => rand(60, 90),
    ],
    [
        "squadraCasa" => "Bologna",
        "squadraTrasferta" => "Brindisi",
        "punti_casa" => rand(60, 90),
        "punti_trasferta" => rand(60, 90),
    ],
    [
        "squadraCasa" => "Venezia",
        "squadraTrasferta" => "Cremona",
        "punti_casa" => rand(60, 90),
        "punti_trasferta" => rand(60, 90),
    ],
    [
        "squadraCasa" => "Reggio Emilia",
        "squadraTrasferta" => "Varese",
        "punti_casa" => rand(60, 90),
        "punti_trasferta" => rand(60, 90),
    ],
];

// var_dump($array_match);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>

        <?php

        for ($i = 0; $i < count($array_match); $i++) {
            $currentItem = $array_match[$i];
            $team = $currentItem["squadraCasa"] . " - " . $currentItem["squadraTrasferta"];
            $result = $currentItem["punti_casa"] . " - " . $currentItem["punti_trasferta"];
        ?>

            <li>
                <span><?php echo $team ." | "?></span>
                <span><?php echo $result?></span>
            </li>

        <?php

        }
        ?>
    </ul>

</body>

</html>