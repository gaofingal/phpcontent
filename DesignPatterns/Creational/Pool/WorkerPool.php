<?php

namespace DesignPatterns\Creational\Pool;

use Countable;

class WorkerPool implements Countable
{

    /**
     * @var array StringReverseWorker[]
     */
    private $occupiedWorkers = [];

    /**
     * @var array StringReverseWorker[]
     */
    private $freeWorkers = [];

    public function get(): StringReverseWorker
    {
        if ($this->count($this->freeWorkers) == 0){
            $worker = new StringReverseWorker();
        }else{
            $worker = array_pop($this->occupiedWorkers);
        }

        $this->occupiedWorkers[spl_object_hash($worker)] = $worker;

        return $worker;
    }

    public function dispose(StringReverseWorker $worker)
    {
        $key = spl_object_hash($worker);

        if (isset($this->occupiedWorkers[$key])){
            unset($this->occupiedWorkers[$key]);
            $this->freeWorkers[$key] = $worker;
        }
    }

    public function count(): int
    {
        return count($this->occupiedWorkers) + count($this->freeWorkers);
    }
}