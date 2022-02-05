<?php
namespace OnixComponents;

use SimpleXMLElement;

class Number
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeNumber)
    {
        $this->contents = (string) ($nodeNumber);  
    }
}