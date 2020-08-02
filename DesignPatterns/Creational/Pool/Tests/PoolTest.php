<?php

namespace DesignPatterns\Creational\Pool\Tests;

use DesignPatterns\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testCanGetNewInstanceWithGet()
    {
        $pool = new WorkerPool();
        $work1 = $pool->get();
        $work2 = $pool->get();

        $this->assetCount(2, $pool);
        $this->assetNotSame($work1, $work2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst()
    {
        $pool = new WorkerPool();
        $work1 = $pool->get();
        $pool->dispose($work1);
        $work2 = $pool->get();

        $this->assetCount(1, $pool);
        $this->assetSame($work1, $work2);
    }
}