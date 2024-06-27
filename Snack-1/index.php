<?php


// Olimpia Milano - Cantù | 55-60


$partite = [
    "Olimpia Milano - Cantù" => [
        '55-60',
    ],
    
    "Olimpia Milano - Cantù" => [
        '55-60',
    ],
    
    "Olimpia Milano - Cantù" => [
        '55-60',
    ]
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

    <?php foreach ($variable as $key => $value) { ?>
        <p><?php echo $partite['chiave0'];  ?></p>
        <p><?php echo $partite["chiave1"];  ?></p>
        <p><?php echo $partite["chiave2"];  ?></p>
    <?php } ?>
    
</body>
</html>