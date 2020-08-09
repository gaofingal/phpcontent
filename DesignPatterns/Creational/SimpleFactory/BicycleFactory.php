<?php declare(strict_types=1);

namespace DesignPatterns\Creational\SimpleFactory;

include_once "Bicycle.php";

class BicycleFactory
{
    public function CreateBicycle(): Bicycle
    {
        return new Bicycle();
    }
}
