<?php declare(strict_types=1);


namespace DesignPatterns\Structural\DataMapper;

use InvalidArgumentException;

class UserMapper
{
    private $adapter;

    public function __construct($adapter)
    {
        $this->adapter = $adapter;
    }

    public function findById(int $id): User
    {
        $result = $this->adapter->find($id);

        if ($result === null){
            throw new InvalidArgumentException("User #{$id} not found");
        }

        return $this->mapRowToUser($result);
    }

    private function mapRowToUser($row)
    {
        return User::formState($row);
    }
}