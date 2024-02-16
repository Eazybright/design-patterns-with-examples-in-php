<?php

namespace Eazybright\DesignPatternsPHP\Bridge;

class RemoteControl
{
    protected Device $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function togglePower()
    {
        if ($this->device->isEnabled()) {
            $this->device->disable();
        }else {
            $this->device->enable();
        }

        return get_class($this->device)." status is ".$this->device->getStatus().PHP_EOL;
    }

    public function volumeDown(int $counter)
    {
        $this->device->setVolume($this->device->getVolume() - $counter);

        return get_class($this->device). " volume is ".$this->device->getVolume().PHP_EOL;
    }

    public function volumeUp(int $counter)
    {
        $this->device->setVolume($this->device->getVolume() + $counter);
        
        return get_class($this->device). " volume is ".$this->device->getVolume().PHP_EOL;
    }

    public function channelDown(int $counter)
    {
        $this->device->setChannel($this->device->getChannel() - $counter);
    }

    public function channelUp(int $counter)
    {
        $this->device->setChannel($this->device->getChannel() + $counter);
    }
}