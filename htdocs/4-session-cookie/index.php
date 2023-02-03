<?php

// http://127.0.0.1:8080/4-session-cookie/

session_start();

if (!isset($_SESSION['ping'])) {
    $_SESSION['ping'] = 'pong';
}

$_SESSION['foo'] = 'bar';

setcookie($_SESSION['foo'], $_SESSION['ping']);
