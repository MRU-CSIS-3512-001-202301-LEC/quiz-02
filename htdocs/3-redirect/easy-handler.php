<?php

if (count($_GET) == 0) {
    header("Location: error.html");
} else {
    echo "<h1>That was easy<h1>";
}
