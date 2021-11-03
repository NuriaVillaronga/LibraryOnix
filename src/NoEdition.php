<?php
namespace OnixComponents;

use SimpleXMLElement;

class NoEdition
{

    public bool $contents;

    public function __construct(SimpleXMLElement $nodeNoEdition)
    {
        $this->contents = (bool) $nodeNoEdition;
    }
}

