<?php

namespace Eazybright\DesignPatternsPHP\Bridge;

class Tv implements Device
{
    protected bool $status = false;

    protected int $volume;

    protected int $channel;

    public function isEnabled()
    {
        return $this->status;
    }

    public function enable()
    {
        $this->status = true;
    }

    public function disable()
    {
        $this->status = false;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function getVolume()
    {
        return $this->volume;
    }

    public function setVolume(int $volume)
    {
        $this->volume = $volume;
    }

    public function getChannel()
    {
        return $this->channel;
    }

    public function setChannel(int $channel)
    {
        $this->channel = $channel;
    }
}