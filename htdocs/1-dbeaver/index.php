<?php

// http://127.0.0.1:8080/1-dbeaver/

require 'database/DatabaseHelper.php';

$config = require 'database/config.php';
$db = new DatabaseHelper($config);

$min_rating = $_GET['rating'] ?? "5";

$query = <<<QUERY
    SELECT bgname, year_published AS year
    FROM games
    WHERE rating > :target_rating
QUERY;

$games = $db->run($query, [":target_rating" => $min_rating])->fetchAll();

// die(var_dump($games));

require 'views/index.view.php';
