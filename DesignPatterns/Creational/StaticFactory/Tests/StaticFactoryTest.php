<?php


namespace DesignPatterns\Creational\StaticFactory\Tests;

use InvalidArgumentException;
use DesignPatterns\Creational\StaticFactory\FormatNumber;
use DesignPatterns\Creational\StaticFactory\FormatString;
use DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

include_once dirname(__DIR__) . "/Formatter.php";
include_once dirname(__DIR__) . "/FormatString.php";
include_once dirname(__DIR__) . "/FormatNumber.php";
include_once dirname(__DIR__) . "/StaticFactory.php";

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormat()
    {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory("number"));
    }

    public function testCanCreateStringFormat()
    {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory("string"));
    }

    public function testException()
    {
        $this->expectException(InvalidArgumentException::class);

        StaticFactory::factory("subject");
    }
}