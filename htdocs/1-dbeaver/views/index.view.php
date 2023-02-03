<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($games as $game) : ?>
            <li><?= $game['bgname'] ?> (<?= $game['year'] ?>)</li>
        <?php endforeach ?>
    </ul>
</body>

</html>