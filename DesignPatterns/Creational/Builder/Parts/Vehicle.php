<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Parts;

abstract class Vehicle
{
    private $data = [];

    public function setPart(string $key, object $value)
    {
        $this->data[$key] = $value;
    }
}
