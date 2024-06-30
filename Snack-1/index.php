<?php


// Olimpia Milano - Cantù | 55-60


$partite = [
    "Olimpia Milano - Cantù" => [
        '55-60',
    ],
    
    "Bankstown Bruins - Manly W." => [
        '68-60',
    ],
    
    "Venezia - Virtus Bologna" => [
        '81-96',
    ],

    "Brescia - Pistoia" => [
        '97-75',
    ],

    "Treviso - Tortona" => [
        '87-74',
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
    <?php foreach ($partite as $key => $value) { ?>
        <li><?php echo  $partite[$key];?></li>
    <?php } ?>
    </ul>   
</body>
</html>