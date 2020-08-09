<?php declare(strict_types=1);


namespace DesignPatterns\Creational\Prototype;

include_once "BookPrototype.php";

class BarBookPrototype extends BookPrototype
{
    protected $category = "Bar";

    public function __clone()
    {

    }
}