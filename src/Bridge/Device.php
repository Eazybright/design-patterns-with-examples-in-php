<?php

namespace Eazybright\DesignPatternsPHP\Bridge;

interface Device
{
    public function isEnabled();
    public function enable();
    public function disable();
    public function getStatus();
    public function getVolume();
    public function setVolume(int $volume);
    public function getChannel();
    public function setChannel(int $channel);
}