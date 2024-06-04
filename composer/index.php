<?php

require 'vendor/autoload.php';

use Cat\Being;

use Cat\Enemy;

var_dump(\Cat\Math::$hello);

$hero = new Being('Marcwline', 50, ['gold' => 120, 'potion' => 3, 'axe' => 1,]);

$hero->takeDamage(40);

$hero->takeDamage(5);

$hero->takeDamage(2);

$enemies = [
    new Being('Ice King', 50, ['gold' => 900, 'crow' => 1, 'gunther' => 1]),

    new Being('The Lich', 9999, ['gold' => 999]),

];

$enemies[0]->takeDamage(3);
