<?php declare(strict_types=1);

namespace DesignPatterns\Creational\FactoryMethod;

include_once "Logger.php";

class FileLogger implements Logger
{
    private $filePath;

    public function __construct($filePath)
    {
        $this->filePath = $filePath;
    }

    public function log(string $message)
    {
       file_put_contents($this->filePath, $message.PHP_EOL, FILE_APPEND);
    }
}
