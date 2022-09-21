<!-- un array contenente partite di basket, ogni partita ha 4 informazioni (squadra casa squadra ospite punti casa punti ospite)  -->
<!-- Heat
Bulls
Cavaliers
Sixers
Raptors
Celtics -->

<?php

$partita = [
    'home' => 'Heat',
    'away' => 'Bulls',
    'ptiHome' => 62,
    'ptiAway' => 81
];


// $partita = [
//     'home' => [
//         'name' => 'Heart',
//         'score' => 50
//     ],
//     'guest' => [
//         'name' => 'Bulls',
//         'score' => 70
//     ]
// ];


$partite = [
    $partita,
    [
        'home' => 'Cavaliers',
        'away' => 'Sixers',
        'ptiHome' => 41,
        'ptiAway' => 81
    ],
    [
        'home' => 'Raptors',
        'away' => 'Celtics',
        'ptiHome' => 62,
        'ptiAway' => 98
    ],
    [
        'home' => 'Dragons',
        'away' => 'Minions',
        'ptiHome' => 50,
        'ptiAway' => 70
    ],

];
var_dump($partite);
?>
<!-- // home - guest | ptiHome - ptiAway -->

<ul>
    <?php
    for ($i = 0; $i < count($partite); $i++) {
    ?>
        <li>
            <?php
            echo $partite[$i]['home'] . ' - ' . $partite[$i]['away'] . ' | ' . $partite[$i]['ptiHome'] . '-' . $partite[$i]['ptiAway'] . '<br />';
            ?>
        </li>
    <?php
    };
    ?>
</ul>

<ul>
    <?php
    for ($i = 0; $i < count($partite); $i++) {
        $match = $partite[$i];
    ?>
        <li>
            <?php
            echo "{$match['home']} - {$match['away']} | ";
            ?>
            <span>
                <?php
                echo "{$match['ptiHome']}-{$match['ptiAway']}";
                ?>
            </span>
        </li>
    <?php
    }
    ?>
</ul>