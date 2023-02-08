<?php

if (isset($_GET["handle"]) && $_GET["handle"] == "easy") {
    $handler = "easy-handler.php";
} else {
    $handler = "regular-handler.php";
}

require 'form.view.php';
