<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Decorator;

include_once "BookingDecorator.php";

class WIFI extends BookingDecorator
{
    private const PRICE = 2;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . " with wifi";
    }
}