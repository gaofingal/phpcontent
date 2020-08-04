<?php

namespace DesignPatterns\Creational\AbstractFactory;

include_once "CsvWriter.php";
class WinCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {
        return join(',', $line) . "\r\n";
    }
}