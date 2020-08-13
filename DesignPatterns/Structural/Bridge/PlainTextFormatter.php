<?php


namespace DesignPatterns\Structural\Bridge;

include_once "Formatter.php";

class PlainTextFormatter implements Formatter
{

    public function format(string $text): string
    {
        return $text;
    }
}