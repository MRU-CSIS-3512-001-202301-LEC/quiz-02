<?php

session_start();

if (!isset($_SESSION['ping'])) {
    $_SESSION['ping'] = 'pong';
} else {
    $_SESSION['ping'] = ["ping" => "pong"];
}

$_SESSION['foo'] = 'bar';

// var_dump($_SESSION);

setcookie($_SESSION['foo'], $_SESSION['ping']);


// http://127.0.0.1:8080/4-session-cookie/