<?php

$post = [

    '10/11/2024' => [

        [
            'title' => 'post 1',
            'author' => 'Luca Rubino',
            'text' => 'text post 1',
        ],
        [
            'title' => 'post 2',
            'author' => 'Luca Rubino',
            'text' => 'text post 2',
        ],

    ],

    '09/12/2024' => [

        [
            'title' => 'post 3',
            'author' => 'Luca Rubino',
            'text' => 'text post 3',
        ],

    ],

    '25/10/2024' => [

        [
            'title' => 'post 4',
            'author' => 'Luca Rubino',
            'text' => 'text post 4',
        ],
        [
            'title' => 'post 5',
            'author' => 'Luca Rubino',
            'text' => 'text post 5',
        ],
        [
            'title' => 'post 6',
            'author' => 'Luca Rubino',
            'text' => 'text post 6',
        ],

    ],

];

?>

<h1> Lista Post </h1>

<?php foreach ($post as $data => $postPerData) { ?>
    <h2> <?php echo $data; ?> </h2>
    <?php foreach ($postPerData as $postPerData) { ?>
     <p> <?php echo $postPerData['title']; ?> </p> 
     <p> <?php echo $postPerData['author']; ?> </p>
     <p> <?php echo $postPerData['text']; ?> </p>
     <br>
    <?php }; ?>
<?php }; ?>