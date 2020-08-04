<?php

namespace DesignPatterns\Creational\AbstractFactory;

include_once "JsonWriter.php";
class WinJsonWriter implements JsonWriter
{

    public function write(array $data, bool $formatted): string
    {
        return json_encode($data, JSON_PRETTY_PRINT);
    }
}