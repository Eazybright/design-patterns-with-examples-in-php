<?php

use Eazybright\DesignPatternsPHP\Composite\ImageEditor;

require 'vendor/autoload.php';

$image = new ImageEditor;
$image->load();
echo $image->draw();
print_r($image->all());