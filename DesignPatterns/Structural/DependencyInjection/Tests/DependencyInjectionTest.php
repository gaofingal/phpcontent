<?php declare(strict_types=1);

namespace DesignPatterns\Structural\DependencyInjection\Tests;

use DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

include_once dirname(__DIR__) . "/DatabaseConfiguration.php";
include_once dirname(__DIR__) . "/DatabaseConnection.php";

class DependencyInjectionTest extends TestCase
{

    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration("localhost", 3306, "domnikl", "1234");
        $connect = new DatabaseConnection($config);

        $this->assertSame("domnikl:1234@localhost:3306", $connect->getDsn());
    }

}