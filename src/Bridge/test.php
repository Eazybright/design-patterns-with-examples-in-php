<?php

use Eazybright\DesignPatternsPHP\Bridge\AdvancedRemoteControl;
use Eazybright\DesignPatternsPHP\Bridge\Radio;
use Eazybright\DesignPatternsPHP\Bridge\RemoteControl;
use Eazybright\DesignPatternsPHP\Bridge\Tv;

require 'vendor/autoload.php';

$tv = new Tv();
$remote = new RemoteControl($tv);
echo $remote->togglePower();

$radio = new Radio();
$newRemote = new AdvancedRemoteControl($radio);
echo $newRemote->volumeUp(30);