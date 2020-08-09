<?php


namespace DesignPatterns\Creational\StaticFactory;

include_once "Formatter.php";

class FormatNumber implements Formatter
{

    public function format(string $input): string
    {
        return number_format((int) $input);
    }
}