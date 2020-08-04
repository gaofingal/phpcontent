<?php

namespace DesignPatterns\Creational\AbstractFactory;

include_once "WriterFactory.php";
include_once "UnixCsvWriter.php";
include_once "UnixJsonWriter.php";
class UnixWriterFactory implements WriterFactory
{

    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }
}