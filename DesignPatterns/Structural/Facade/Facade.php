<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Facade;


class Facade
{
    private $os;
    private $bios;

    public function __construct(Bios $bios, OperatingSystem $os)
    {
        $this->os = $os;
        $this->bios = $bios;
    }

    public function turnOn()
    {
        $this->bios->execute();
        $this->bios->waitForKeyPress();
        $this->bios->launch($this->os);
    }

    public function turnOff()
    {
        $this->os->halt();
        $this->bios->powerDown();
    }
}