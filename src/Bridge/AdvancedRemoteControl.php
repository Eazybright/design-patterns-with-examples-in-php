<?php

namespace Eazybright\DesignPatternsPHP\Bridge;

class AdvancedRemoteControl extends RemoteControl
{
    public function mute()
    {
        $this->device->setVolume(0);
    }
}