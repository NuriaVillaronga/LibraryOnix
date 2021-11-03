<?php
namespace OnixComponents;

use SimpleXMLElement;

class ReturnsCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeReturnsCode)
    {
        $this->contents = (string) ($nodeReturnsCode);
    }
}

