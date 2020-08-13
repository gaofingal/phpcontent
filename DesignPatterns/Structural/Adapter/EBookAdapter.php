<?php


namespace DesignPatterns\Structural\Adapter;

include_once "Book.php";

class EBookAdapter implements Book
{
    protected $ebook;

    public function __construct(EBook $ebook)
    {
        $this->ebook = $ebook;
    }

    public function turnPage()
    {
        $this->ebook->pressNext();
    }

    public function open()
    {
        $this->ebook->unlock();
    }

    public function getPage(): int
    {
        return $this->ebook->getPage()[0];
    }
}