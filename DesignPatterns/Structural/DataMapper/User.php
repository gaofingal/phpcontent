<?php declare(strict_types=1);


namespace DesignPatterns\Structural\DataMapper;


class User
{
    private $username;
    private $email;

    public static function formState(array $state): User
    {
        return new self($state["username"], $state["email"]);
    }

    public function __construct(string $username, string $email)
    {
        $this->username = $username;
        $this->email = $email;
    }

    /**
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }

    /**
     * @return string
     */
    public function getUsername(): string
    {
        return $this->username;
    }

}