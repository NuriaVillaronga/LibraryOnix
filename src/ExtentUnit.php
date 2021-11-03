<?php
namespace OnixComponents;

use SimpleXMLElement;

class ExtentUnit
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeExtentUnit)
    {
        $this->contents = (string) ($nodeExtentUnit);
    }
}

