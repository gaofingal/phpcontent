<?php declare(strict_types=1);


namespace DesignPatterns\Structural\Adapter;


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
        $this->getPage();
    }
}