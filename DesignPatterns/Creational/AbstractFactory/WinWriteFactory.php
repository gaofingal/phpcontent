<?php

namespace DesignPatterns\Creational\AbstractFactory;

include_once "WriterFactory.php";
include_once "WinJsonWriter.php";
include_once "WinCsvWriter.php";
class WinWriteFactory implements WriterFactory
{

    public function createCsvWriter(): CsvWriter
    {
        return new WinCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }
}