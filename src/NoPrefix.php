<?php
namespace OnixComponents;

use SimpleXMLElement;

class NoPrefix
{

    public bool $contents;

    public function __construct(SimpleXMLElement $nodeNoPrefix)
    {
        $this->contents = (bool) $nodeNoPrefix;
    }
}

