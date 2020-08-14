<?php declare(strict_types=1);


namespace DesignPatterns\Structural\DataMapper\Tests;

use InvalidArgumentException;
use DesignPatterns\Structural\DataMapper\StorageAdapter;
use DesignPatterns\Structural\DataMapper\User;
use DesignPatterns\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;

include_once dirname(__DIR__) . "/StorageAdapter.php";
include_once dirname(__DIR__) . "/User.php";
include_once dirname(__DIR__) . "/UserMapper.php";

class DataMapperTest extends TestCase
{
    public function testCanMapperFormStorage()
    {
        $storage = new StorageAdapter([1 => ["username"=>"domnik1","email"=>"liebler.domnik@gmail.com"]]);
        $mapper = new UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData()
    {
        $this->expectException(InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}