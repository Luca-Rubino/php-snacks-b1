<?php

$alunni = [
    'Alberto-Fiorentini' => [
        '7','10','6','8','7',
    ],
    'Carla-Maggi' => [
        '10','10','9','8','7',
    ],
    'Antonio-Rossi' => [
        '7','7','6','6','6',
    ],
    'Marta-Alfonzini' => [
        '5','6','6','8','7',
    ],
    'Carla-Paolicelli' => [
        '5','7','10','8','7',
    ],
];

?>

<h2> Voti studenti </h2>

<?php foreach ($alunni as $nomi => $voti) { ?>
    <p> <?php echo $nomi ?> </p>
    <p> Media dei voti: <?php echo(array_sum($voti) / count($voti)); ?> </p>
<?php } ?>