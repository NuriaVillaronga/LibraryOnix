<?php
namespace OnixComponents;

use SimpleXMLElement;

class NumberOfPages
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeNumberOfPages)
    {
        $this->contents = (string) $nodeNumberOfPages;
    }
}