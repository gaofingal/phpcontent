<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Adapter;

include_once "Book.php";

class PaperBook implements Book
{
    private $page;

    public function turnPage()
    {
        $this->page++;
    }

    public function open()
    {
        $this->page = 1;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}