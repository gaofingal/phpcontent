<?php


namespace DesignPatterns\Structural\Bridge;

include_once "Service.php";

class PingService extends Service
{

    public function get(): string
    {
        return $this->implementation->format("pong");
    }
}