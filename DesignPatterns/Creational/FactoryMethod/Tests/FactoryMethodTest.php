<?php declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod\Tests;

use DesignPatterns\Creational\FactoryMethod\FileLogger;
use DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
use DesignPatterns\Creational\FactoryMethod\StdoutLogger;
use DesignPatterns\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

include_once dirname(__DIR__) . "/FileLogger.php";
include_once dirname(__DIR__) . "/FileLoggerFactory.php";
include_once dirname(__DIR__) . "/StdoutLogger.php";
include_once dirname(__DIR__) . "/StdoutLoggerFactory.php";

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogger()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogger()
    {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);

    }
}
