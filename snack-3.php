<!-- Snack 3
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: 
    DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. 
    Stampare ogni data con i relativi post.
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
            'author' => 'Andrea',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Marco',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Gianfilippo',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Aristotele',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Ezio Greggio',
            'text' => 'Testo post 6'
        ]
    ],
];


foreach ($posts as $date => $value) {
    // var_dump($date);
    echo "<h2> $date <br/> </h2>";;
    foreach ($value as $post) {
        // var_dump($post);
        echo  "<h3>$post[title]</h3>";
        echo "<h5>$post[author]</h5>";
        echo "<p>$post[text]</p>";
    }
}




?>
