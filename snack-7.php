<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->




<?php
$alunni = [
    [
        'name' => 'Fabio',
        'last_name' => 'De Fabis',
        'votes' => [7, 4, 6, 8, 5]
    ],
    [
        'name' => 'Marco',
        'last_name' => 'De Marchis',
        'votes' => [4, 9, 10, 8, 5]
    ],
    [
        'name' => 'Mario',
        'last_name' => 'De Mari',
        'votes' => [6, 8, 3, 4, 7]
    ],
    [
        'name' => 'Franco',
        'last_name' => 'De Franchi',
        'votes' => [6, 6, 7, 7, 8]
    ],
];



foreach ($alunni as $value) {
?>
    <div>
        <h4>
            <?=
            "{$value['name']} {$value['last_name']}";
            ?>
        </h4>
        <p>
            Media:
            <?=
            array_sum($value['votes']) / count($value['votes']);
            ?>
        </p>
    </div>
<?php
}
?>