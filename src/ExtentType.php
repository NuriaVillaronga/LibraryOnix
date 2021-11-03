<?php
namespace OnixComponents;

use SimpleXMLElement;

class ExtentType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeExtentType)
    {
        $this->contents = (string) ($nodeExtentType);
    }
}

