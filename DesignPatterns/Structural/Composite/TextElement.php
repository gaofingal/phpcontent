<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Composite;

include_once "Renderable.php";

class TextElement implements Renderable
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}