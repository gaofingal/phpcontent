<?php


namespace DesignPatterns\Structural\Decorator\Tests;

use DesignPatterns\Structural\Decorator\DoubleRoomBooking;
use DesignPatterns\Structural\Decorator\ExtraBed;
use DesignPatterns\Structural\Decorator\WiFi;
use PHPUnit\Framework\TestCase;

include_once dirname(__DIR__) . "/DoubleRoomBooking.php";
include_once dirname(__DIR__) . "/ExtraBed.php";
include_once dirname(__DIR__) . "/WiFi.php";

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceBasicDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();

        $this->assertSame(40, $booking->calculatePrice());
        $this->assertSame("Double room", $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFi()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);

        $this->assertSame(42, $booking->calculatePrice());
        $this->assertSame("Double room with wifi", $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomWithWiFiAndExtraBed()
    {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);

        $this->assertSame(72, $booking->calculatePrice());
        $this->assertSame("Double room with wifi with extra bed", $booking->getDescription());
    }

}