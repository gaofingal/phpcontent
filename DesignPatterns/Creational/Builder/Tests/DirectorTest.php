<?php declare(strict_types=1);

namespace DesignPatterns\Creational\Builder\Tests;

use DesignPatterns\Creational\Builder\Parts\Car;
use DesignPatterns\Creational\Builder\Parts\Truck;
use DesignPatterns\Creational\Builder\TruckBuilder;
use DesignPatterns\Creational\Builder\CarBuilder;
use DesignPatterns\Creational\Builder\Director;
use PHPUnit\Framework\TestCase;

include_once dirname(__DIR__) . "/Parts/Car.php";
include_once dirname(__DIR__) . "/Parts/Truck.php";
include_once dirname(__DIR__) . "/TruckBuilder.php";
include_once dirname(__DIR__) . "/CarBuilder.php";
include_once dirname(__DIR__) . "/Director.php";

class DirectorTest extends TestCase
{
    public function testCanBuildTrack()
    {
        $Director = new Director();
        $truckBuilder = new TruckBuilder();
        $newTruck = $Director->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newTruck);
    }

    public function testCanBuildCar()
    {
        $Director = new Director();
        $carBuilder = new CarBuilder();
        $newCar = $Director->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newCar);
    }
}
