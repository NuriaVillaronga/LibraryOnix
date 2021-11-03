<?php
namespace OnixComponents;

use SimpleXMLElement;

class ExtentValue
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeExtentValue)
    {
        $this->contents = (string) ($nodeExtentValue);
    }
}

