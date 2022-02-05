<?php
namespace OnixComponents;

use SimpleXMLElement;

class CorporateName
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCorporateName)  
    {
        $this->contents = (string) $nodeCorporateName;
    }
}