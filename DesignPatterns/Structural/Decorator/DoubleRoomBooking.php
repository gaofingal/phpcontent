<?php


namespace DesignPatterns\Structural\Decorator;

include_once "Booking.php";

class DoubleRoomBooking implements Booking
{

    public function calculatePrice(): int
    {
        return 40;
    }

    public function getDescription(): string
    {
        return "Double room";
    }
}