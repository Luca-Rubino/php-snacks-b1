<?php

$animali = [
    [
        'nome' => 'elefante',
        'specie' => 'asiatico',
        'classe' => '9',
    ],
    [
        'nome' => 'tigre',
        'specie' => 'grandi felini',
        'classe' => '10',
    ],
    [
        'nome' => 'pantera',
        'specie' => 'grandi felini',
        'classe' => '9',
    ],
    [
        'nome' => 'iena',
        'specie' => 'il protele',
        'classe' => '8',
    ],
    [
        'nome' => 'riccio',
        'specie' => '',
        'classe' => '2',
    ],
    [
        'nome' => 'cane',
        'specie' => 'canidi',
        'classe' => '3',
    ],
    [
        'nome' => 'gatto',
        'specie' => 'felini',
        'classe' => '3',
    ],
    [
        'nome' => 'lemure',
        'specie' => 'sifaka',
        'classe' => '7',
    ],
    [
        'nome' => 'scimmia',
        'specie' => 'bonobo',
        'classe' => '6',
    ],
    [
        'nome' => 'armadillo',
        'specie' => 'a nove fasce',
        'classe' => '5',
    ],
];

?>

<?php foreach ($animali as $animale) { ?>
<ul>

    <li> <?php echo 'nome:'. ' '. $animale['nome'] ?> </li>
    <li> <?php echo 'specie:'. ' '. $animale['specie'] ?> </li>
    <li> <?php echo 'classe:'. ' '. $animale['classe'] ?> </li>

</ul> 
<?php } ?>