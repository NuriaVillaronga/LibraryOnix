<?php
namespace OnixComponents;

use SimpleXMLElement;

class NoPrefix
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeNoPrefix)
    {
        //$this->contents = (string) $nodeNoPrefix;
        $this->contents = true;
    }
}

