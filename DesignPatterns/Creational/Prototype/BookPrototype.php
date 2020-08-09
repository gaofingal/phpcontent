<?php declare(strict_types=1);


namespace DesignPatterns\Creational\Prototype;


abstract class BookPrototype
{
    protected $title;
    protected $category;

    abstract public function __clone();

    /**
     * @return string
     */
    public function getTitle():string
    {
        return $this->title;
    }

    /**
     * @param string $title
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

}