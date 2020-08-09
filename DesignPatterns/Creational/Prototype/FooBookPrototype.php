<?php


namespace DesignPatterns\Creational\Prototype;

include_once "BookPrototype.php";

class FooBookPrototype extends BookPrototype
{
    protected $category = "Foo";

    public function __clone()
    {

    }
}