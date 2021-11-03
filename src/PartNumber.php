<?php
namespace OnixComponents;

use SimpleXMLElement;

class PartNumber
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePartNumber)
    {
        $this->contents = (string) ($nodePartNumber);
    }
}

