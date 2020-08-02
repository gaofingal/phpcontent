<?php

namespace DesignPatterns\Creational\Pool;

use Datetime;

class StringReverseWorker
{
    private $cratedAt;

    public function __construct()
    {
        $this->cratedAt = new Datetime();
    }

    public function run(string $text)
    {
        return strrev($text);
    }
}