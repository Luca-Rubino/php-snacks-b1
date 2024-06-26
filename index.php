<?php

$array = [
    "chiave0" => [
        '0a','0b','0c','0d',
    ],
    
    "chiave1" => [
        '1a','1b','1c','1d',
    ],
    
    "chiave2" => [
        '2a','2b','2c','2d',
    ]
];

foreach ($array as "chiave0" => 0) {
    echo $array;
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Php-snacks-B1</title>
</head>
<body>
    <p><?php echo $array["chiave0"];  ?></p>
    <p><?php echo $array["chiave1"];  ?></p>
    <p><?php echo $array["chiave2"];  ?></p>
</body>
</html>