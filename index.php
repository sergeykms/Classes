<?php

$autoloadPath1 = __DIR__ . '/../../autoload.php';
$autoloadPath2 = __DIR__ . '/vendor/autoload.php';
if (file_exists($autoloadPath1)) {
    require_once $autoloadPath1;
} else {
    require_once $autoloadPath2;
}

use App\Point;

$point1 = new Point(2, 3);
$result = $point1->getPoint();
print_r($result);

$point1->setPoint(10, 20);
print_r($point1->getPoint());