<?php

$db = [
    'teachers' => [
        [
            'name' => 'Michele',
            'lastname' => 'Papagni'
        ],
        [
            'name' => 'Fabio',
            'lastname' => 'Forghieri'
        ]
    ],
    'pm' => [
        [
            'name' => 'Roberto',
            'lastname' => 'Marazzini'
        ],
        [
            'name' => 'Federico',
            'lastname' => 'Pellegrini'
        ]
    ]
];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Snack-6</title>
</head>
<body>
    <main>
        <section> 
            <?php foreach ($db as $teachers => $teacher) { ?>
            <ul <?php echo ($teachers == 'pm') ? "class='bg-gray'" : "class='bg-green'" ?>>           
                <li>
                    <h3><?php echo $teachers; ?></h3>
                </li>
                <li>
                <?php foreach ($teacher as $teacher) { ?>
                    <p><?php echo $teacher['name']. " " . $teacher['lastname']; ?></p>
                <?php } ?>
                </li>
            </ul>
            <?php } ?>
        </section>
    </main>
</body>
</html>