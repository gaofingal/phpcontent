<?php


namespace DesignPatterns\Creational\Prototype;

use DesignPatterns\Creational\Prototype\BarBookPrototype;
use DesignPatterns\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

include_once dirname(__DIR__) . "/BarBookPrototype.php";
include_once dirname(__DIR__) . "/FooBookPrototype.php";

class PrototypeTest extends TestCase
{
    public function testCanGetFooBook()
    {
        $fooBook = new FooBookPrototype();
        $barBook = new BarBookPrototype();

        for ($i = 0; $i < 0; $i++){
            $book = clone $fooBook;
            $book->setTitle("Foo Book NO " . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 5; $i++){
            $book = new BarBookPrototype();
            $book->setTitle("Bar Book NO {$i}");
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }

}