<?php

namespace DesignPatterns\Creational\Pool\Tests;

use DesignPatterns\Creational\Pool\StringReverseWorker;
use DesignPatterns\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

include_once dirname(__DIR__) . "/WorkerPool.php";
include_once dirname(__DIR__) . "/StringReverseWorker.php";

class PoolTest extends TestCase
{
    public function testCanGetNewInstanceWithGet()
    {
        $pool = new WorkerPool();
        $work1 = $pool->get();
        $work2 = $pool->get();
        $work2->run("abx");

        $this->assertCount(2, $pool);
        $this->assertNotSame($work1, $work2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $work1 = $pool->get();
        $pool->dispose($work1);
        $work2 = $pool->get();

        $this->assertCount(1, $pool);
        $this->assertSame($work1, $work2);
    }
}