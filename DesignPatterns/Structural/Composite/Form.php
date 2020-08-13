<?php


namespace DesignPatterns\Structural\Composite;

include_once "Renderable.php";

class Form implements Renderable
{
    private $element;

    public function render(): string
    {
       $formCode = "<form>";

       foreach ($this->element as $element){
           $formCode .= $element->render();
       }

       $formCode .= "</form>";

       return $formCode;
    }

    public function addElement(Renderable $element)
    {
        $this->element[] = $element;
    }
}