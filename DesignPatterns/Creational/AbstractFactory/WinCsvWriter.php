<?php

namespace DesignPatterns\Creational\AbstractFactory;

class WinCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {
        // TODO: Implement write() method.
        return join(',', $line) . "\r\n";
    }
}