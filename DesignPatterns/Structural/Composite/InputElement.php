<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Composite;

include_once "Renderable.php";

class InputElement implements Renderable
{


    public function render(): string
    {
        return "<input type='text' />";
    }
}