<!-- Snack 7
Creare un array contenente qualche alunno di un’ipotetica classe. 
Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. 
Stampare Nome, Cognome e la media dei voti di ogni alunno. -->




<?php
$alunni = [
    [
        'name' => 'Fabio',
        'lastName' => 'De Fabis',
        'votes' => [7, 4, 6, 8]
    ],
    [
        'name' => 'Marco',
        'lastName' => 'De Marchis',
        'votes' => [4, 9, 10, 8]
    ],
    [
        'name' => 'Mario',
        'lastName' => 'De Mari',
        'votes' => [6, 8, 3, 4]
    ],
    [
        'name' => 'Franco',
        'lastName' => 'De Franchi',
        'votes' => [6, 6, 7, 7]
    ],
];



foreach ($alunni as $value) {
?>
    <div>
        <strong>
            <?=
            "{$value['name']} {$value['lastName']}";
            ?>
        </strong>
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