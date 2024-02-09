<?php

use Eazybright\DesignPatternsPHP\Adapter\RoundHole;
use Eazybright\DesignPatternsPHP\Adapter\RoundPeg;
use Eazybright\DesignPatternsPHP\Adapter\SquarePeg;
use Eazybright\DesignPatternsPHP\Adapter\SquarePegAdapter;

require 'vendor/autoload.php';

$hole = new RoundHole(5);
$peg = new RoundPeg(5);

echo "Do they fit? ".$hole->fits($peg).PHP_EOL;

$small_square = new SquarePeg(5);
$big_square = new SquarePeg(10);

$small_square_adapter = new SquarePegAdapter($small_square);
$big_square_adapter = new SquarePegAdapter($big_square);

echo "Do they fit? ".$hole->fits($small_square_adapter).PHP_EOL;
echo "Do they fit? ".$hole->fits($big_square_adapter).PHP_EOL;

