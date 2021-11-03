<?php
namespace OnixComponents;

use SimpleXMLElement;

class NamesBeforeKey
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeNamesBeforeKey)
    {
        $this->contents = (string) ($nodeNamesBeforeKey);
    }
}

