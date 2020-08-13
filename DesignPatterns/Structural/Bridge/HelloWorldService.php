<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Bridge;

include_once "Service.php";

class HelloWorldService extends Service
{

    public function get(): string
    {
        return $this->implementation->format("hello,world");
    }
}