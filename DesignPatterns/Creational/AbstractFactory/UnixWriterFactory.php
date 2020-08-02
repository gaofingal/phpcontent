<?php

namespace DesignPatterns\Creational\AbstractFactory;

class UnixWriterFactory implements WriterFactory
{

    public function createCsvWriter(): CsvWriter
    {
        // TODO: Implement createCsvWriter() method.
        return new UnixCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        // TODO: Implement createJsonWriter() method.
        return new UnixJsonWriter();
    }
}