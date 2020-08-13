<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Bridge;

use DesignPatterns\Structural\Bridge\HelloWorldService;
use DesignPatterns\Structural\Bridge\HtmlFormatter;
use DesignPatterns\Structural\Bridge\PlainTextFormatter;
use PHPUnit\Framework\TestCase;

include_once dirname(__DIR__) . "/HelloWorldService.php";
include_once dirname(__DIR__) . "/HtmlFormatter.php";
include_once dirname(__DIR__) . "/PlainTextFormatter.php";

class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());
        $this->assertSame("hello,world", $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());
        $this->assertSame('<p>hello,world</p>', $service->get());
    }

}