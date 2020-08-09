<?php


namespace DesignPatterns\Creational\StaticFactory;

include_once "Formatter.php";

class FormatString implements Formatter
{

    public function format(string $input): string
    {
        return $input;
    }
}