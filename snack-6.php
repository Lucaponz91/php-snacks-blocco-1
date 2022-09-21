<!-- Snack 6
Utilizzare questo array: https://pastebin.com/CkX3680A. 
Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio 
e i PM in un rettangolo verde. -->


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>
    <link rel="stylesheet" href="app.css">
</head>

<body>






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

    foreach ($db['teachers'] as $value) {
    ?>
        <div class="teachers">
            <?=
            "{$value['name']} {$value['lastname']}";
            ?>
        </div>
    <?php
    }
    ?>
    <?php
    foreach ($db['pm'] as $value) {
    ?>
        <div class="pm">
            <?=
            "{$value['name']} {$value['lastname']}";
            ?>
        </div>
    <?php
    }
    ?>


</body>

</html>