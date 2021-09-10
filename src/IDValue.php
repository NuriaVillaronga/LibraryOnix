<?php
namespace OnixComponents;

use SimpleXMLElement;

class IDValue
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeIDValue)
    {
        $this->contents = (string) ($nodeIDValue);
    }
}

