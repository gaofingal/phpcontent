<?php

namespace DesignPatterns\Creational\AbstractFactory;

class WinWriteFactory implements WriterFactory
{

    public function createCsvWriter(): CsvWriter
    {
        // TODO: Implement createCsvWriter() method.
        return new WinCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        // TODO: Implement createJsonWriter() method.
        return new WinJsonWriter();
    }
}