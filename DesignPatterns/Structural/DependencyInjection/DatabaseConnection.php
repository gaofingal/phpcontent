<?php declare(strict_types=1);


namespace DesignPatterns\Structural\DependencyInjection;


class DatabaseConnection
{
    private $configuration;

    public function __construct(DatabaseConfiguration $configuration)
    {
        $this->configuration = $configuration;
    }

    public function getDsn()
    {
        return sprintf("%s:%s@%s:%d", $this->configuration->getUsername(), $this->configuration->getPassword(), $this->configuration->getHost(), $this->configuration->getPort());
    }

}