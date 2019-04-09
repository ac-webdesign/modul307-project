<?php
require 'app/Views/spam.view.php';

$inputs = [
    'Neue Aktionen von Ihrem Computerteile-Händler.',
    'Vergrössern Sie jetzt ihr SPAM mit SPAM.',
    'SPAM kann ihnen dabei helfen wieder ruhig zu schlafen.',
    'Kennen Sie Justin Bieber? Finden Sie andere Singles in Ihrer Nähe.',
    'Wenn spam zum Problem wird, haben Sie ein Problem.'
];

foreach($inputs as $nr => $satz) {
    $hasSpam = strpos($satz, 'SPAM');
    if($hasSpam !== false) {
        echo "Satz {$nr} ist SPAM\n";
    } else {
        echo "Satz {$nr} ist OK\n";
    }
}