<?php
namespace OnixComponents;

use SimpleXMLElement;

class NoEdition
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeNoEdition)
    {
        $this->contents = (string) $nodeNoEdition;
    }
}

