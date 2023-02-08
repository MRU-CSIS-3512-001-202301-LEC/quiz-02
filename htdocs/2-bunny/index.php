<?php
//  http://127.0.0.1:8080/2-bunny/index.php?n=bugs&s=12
//  http://127.0.0.1:8080/2-bunny/index.php?s=10
//  http://127.0.0.1:8080/2-bunny/index.php?n=fiver

require 'Rabbit.php';

$name = $_GET['n'] ?? 'roger';
$speed = isset($_GET['s']) ? $_GET['s'] : "2";

$bunny = new Rabbit($name, $speed);
$name = $bunny->name();
$adjective = $bunny->adjective();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Document</title>
</head>

<body>

    <h1><?= "$name is $adjective" ?></h1>

</body>

</html>