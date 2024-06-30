<?php


// Olimpia Milano - Cantù | 55-60


$partite = [
    [
        "squadra-casa" => "Olimpia Milano",
        "squadra-ospite" =>  "Cantù",
        "punteggio" => "55-60",
    ],
    
    [
        "squadra-casa" => "Bankstown Bruins",
        "squadra-ospite" =>  "Manly W.",
        "punteggio" => "68-60",
    ],
    
    [
        "squadra-casa" => "Venezia",
        "squadra-ospite" =>  "Virtus Bologna",
        "punteggio" => "81-96",
    ],

    [
        "squadra-casa" => "Brescia",
        "squadra-ospite" =>  "Pistoia",
        "punteggio" => "97-75",
    ],

    [
        "squadra-casa" => "Treviso",
        "squadra-ospite" =>  "Tortona",
        "punteggio" => "87-74",
    ],
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-snacks-B1</title>
</head>
<body>
    <ul>
    <?php foreach ($partite as $partite) { ?>
        <li><?php echo $partite["squadra-casa"] . " " . "-" . " " . $partite["squadra-ospite"] . "\ " . $partite["punteggio"] . ".";?></li>
    <?php } ?>
    </ul>   
</body>
</html>