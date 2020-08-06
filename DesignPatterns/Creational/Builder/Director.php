<?php declare(strict_types = 1);

namespace  DesignPatterns\Creational\Builder;

use DesignPatterns\Creational\Builder\Parts\Vehicle;

include_once "Parts/Vehicle.php";

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addWheel();
        $builder->addEngine();
        $builder->addDoors();

        return $builder->getVehicle();
    }
}

