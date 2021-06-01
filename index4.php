<!-- ## Snack 4
Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta -->

<?php
# Snack 4
$maxNumbers = 15;
$numbersList = [];

for ($i = 1; $i <= 15; $i++) {
    $randomNumber = rand(1, 15);

    if (!in_array($randomNumber, $numbersList)) {
        $numbersList[] = $randomNumber;
    } else {
        $i--;
    }
}


for ($i = 0; $i < count($numbersList); $i++) {
    echo "Numero casuale: " . $numbersList[$i] . "<br>\n";
}
?>