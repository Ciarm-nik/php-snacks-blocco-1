<!-- ## Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
Qui l’array di esempio: https://www.codepile.net/pile/R2K5d68z -->

<?php

$posts = [

    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

//  var_dump($posts)

?>


<!-- Metodo con il foreach -->

<?php

foreach ($posts as $date => $post) {
?>
    <h1>
        <?php echo $date ?>
    </h1>

    <?php foreach ($post as $parametri) { ?>
        <ul>
            <?php foreach ($parametri as $key => $value) { ?>
                <li>
                    <strong><?php echo $key ?></strong>
                    <span><?php echo $value ?></span>
                </li>
            <?php } ?>
        </ul>
    <?php } ?>
<?php
}
?>

<!-- Documentazione foreach array PHP:

https://www.php.net/manual/en/control-structures.foreach.php

-->




<!-- Metodo con il for -->

<ul>

    <?php
    $keysMap = array_keys($posts);

    for ($i = 0; $i < count($posts); $i++) {
        $key = $keysMap[$i];
        $value = $posts[$key];
    ?>

        <li>
            <?php echo $key ?>

            <ul>

                <?php
                for ($y = 0; $y < count($value); $y++) {
                    $singlePost = $value[$y];
                ?>
                    <li>
                        <strong><?php echo $singlePost["title"] ?></strong><br>
                        <em><?php echo $singlePost["author"] ?></em>
                        <p><?php echo $singlePost["text"] ?></p>
                    </li>
                <?php
                } 
                ?>

            </ul>

        </li>

    <?php
    }
    ?>
</ul>