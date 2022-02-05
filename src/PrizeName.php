<?php
namespace OnixComponents;

use SimpleXMLElement;

class PrizeName 
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePrizeName)
    {
        $this->contents = (string) ($nodePrizeName); 
    }
}