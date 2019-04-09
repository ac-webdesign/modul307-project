<?php
require 'app/Views/clowns.view.php';

$array = [
    "Herschel Krustofski",
    "Alfredo Smaldini",
    "Charlie Rivel",
    "Oleg Popow",
    "Eugen Rosai",
    "Carl Godlewski",
];

asort($array);

foreach ($array as $clown) {

    $markiere = false;
    if (strrpos($clown, 'ski') !== false) {
        echo "<strong>" . $clown . "</strong><br>";
    } else {
        echo "<p>" . $clown . "</p><br>";
    }
}
