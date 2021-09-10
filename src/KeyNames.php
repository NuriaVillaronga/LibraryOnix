<?php
namespace OnixComponents;

use SimpleXMLElement;

class KeyNames
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeKeyNames)
    {
        $this->contents = (string) ($nodeKeyNames);
    }
}

