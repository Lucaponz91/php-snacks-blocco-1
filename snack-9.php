<?php

$ads = [
    [
        'image_path' => 'https://conversionsciences.com/wp-content/uploads/2019/04/example-of-emotional-logical-appeal-on-persuasive-copy.jpg',
        'link' => 'https://www.google.com',
        'is_active' => true,
    ],
    [
        'image_path' => 'https://previews.123rf.com/images/hstrongart/hstrongart1612/hstrongart161200121/68060446-anuncios-de-cepillos-de-dientes-el%C3%A9ctricos-modo-diferente-de-este-producto-con-blanco-modelo-de-diente.jpg',
        'link' => 'https://www.facebook.com',
        'is_active' => true,
    ],
    [
        'image_path' => 'https://thumbs.dreamstime.com/z/back-to-school-sale-background-chalkboard-sale-percentages-marketing-poster-color-pencils-96751666.jpg',
        'link' => 'https://codepen.io',
        'is_active' => false,
    ],
    [
        'image_path' => 'https://foodsecurityfoodjustice.files.wordpress.com/2016/11/beyond-the-omlette-1.jpg',
        'link' => 'https://laravel.com',
        'is_active' => false,
    ],
    [
        'image_path' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRniLfGdFLxVOUoEwYC9WeRIrfZInB74_80IV8yMnANx3HTZYoQ',
        'link' => 'https://www.php.net',
        'is_active' => true,
    ],

];
// filtriamo l'array in base a is_active=>true
$activeAds = array_filter($ads, function ($value) {
    return $value['is_active'];
});
// var_dump($activeAds);

// generiamo numero random tra 0 e arraylength -1 se l'array non è vuoto
// $max = count($activeAds) - 1;
$index = array_rand($activeAds, 1);
// var_dump($index);

// mostriamo la card
$adv = $activeAds[$index];
// var_dump($adv);
?>

<a href="<?php $adv['link'] ?>">
<div style="background-image: url('<?php echo $adv['image_path'] ?>'); height: 100px;"></div></a>