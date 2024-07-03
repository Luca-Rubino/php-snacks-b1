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
    <title>Snack-6</title>
</head>
<body>
    <main>
        <section> 
            <ul>
            <?php foreach ($db as $teachers => $teacher) { ?>
                <li>
                    <h3><?php echo $teachers; ?></h3>
                </li>
                <li>
                <?php foreach ($teacher as $teacher) { ?>
                    <p><?php echo $teacher['name']. " " . $teacher['lastname']; ?></p>
                <?php } ?>
                </li>
                <?php } ?>
            </ul>

        </section>
    </main>
</body>
</html>