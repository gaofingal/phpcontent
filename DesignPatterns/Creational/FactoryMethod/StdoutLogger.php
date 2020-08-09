<?php declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

include_once "Logger.php";

class StdoutLogger implements Logger
{

    public function log(string $message)
    {
        echo $message;
    }
}
