<?php
namespace OnixComponents;

use SimpleXMLElement;

class IDTypeName
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeIDTypeName)
    {
        $this->contents = (string) ($nodeIDTypeName);
    }
}

