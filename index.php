<?php

$cities = [
    'Нью-Йорк'      => [null => 8175133],
    'Лос-Анджелес'  => ['Калифорния' => 3792621],
    'Чикаго'        => ['Иллинойс' => 2695598],
    'Филадельфия'   => ['Пенсильвания' => 1526006],
    'Феникс'        => ['Аризона' => 1445632],
    'Сан-Антонио'   => ['Техас' => 1327407],
    'Сан-Диего'     => ['Калифорния' => 1307402],
    'Даллас'        => ['Техас' => 1197816],
    'Сан-Хосе'      => ['Калифорния' => 945942],
    'Хьюстон'       => ['Техас' => 2100263],

];


?><!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap.css">
    <title>Document</title>
</head>
<body>
<table class="table table-hover">
    <thead>
        <tr>
            <th>Город</th>
            <th>Штат</th>
            <th>Население</th>
        </tr>
    </thead>
    <tbody>
    <?php ksort($cities, false); foreach($cities as $city => $information):?>
        <?php ksort($information, SORT_NUMERIC); foreach($information as $state => $persons): $total_person += $persons;?>
            <tr class="table-active">
                <th><?= $city ?></th>
                <td><?= (($state == null)? "-" :  $state); ?></td>
                <td><?= $persons ?></td>
            </tr>
        <?php endforeach?>
    <?php endforeach?>
    </tbody>
</table>
<ul class="nav nav-pills flex-column">
    <li class="nav-item">
        <div class="nav-link active"><?php echo "Общее население: $total_person";?></div>
    </li>
</ul>
</body>
</html>