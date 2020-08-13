<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Composite\Tests;

use DesignPatterns\Structural\Composite\Form;
use DesignPatterns\Structural\Composite\TextElement;
use DesignPatterns\Structural\Composite\InputElement;
use PHPUnit\Framework\TestCase;

include_once dirname(__DIR__) . "/Form.php";
include_once dirname(__DIR__) . "/TextElement.php";
include_once dirname(__DIR__) . "/InputElement.php";

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement("Email:"));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement("Password:"));
        $embed->addElement(new InputElement());
        $form->addElement($embed);

        $this->assertSame("<form>Email:<input type='text' /><form>Password:<input type='text' /></form></form>",
            $form->render());
    }
}