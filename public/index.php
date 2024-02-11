<?php

include __DIR__ . "/../src/App/function.php";

$app = include __DIR__ . "/../src/App/bootstrap.php";

$app->run();









































































































































































// declare(strict_types=1);

// $function = [
//     function ($next) {
//         echo "A <br>";
//         $next();
//     },
//     function ($next) {
//         echo "B <br>";
//         $next();
//     },
//     function ($next) {
//         echo "C <br>";
//         $next();
//     }
// ];

// $a = function () {
//     echo "Main Content <br>";
// };

// foreach ($function as $function) {
//     $a = fn () => $function($a);
// }

// $a();
