<?php
namespace OnixComponents;

use SimpleXMLElement;

class dateformat
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAttributeDateformat)
    {
        $this->contents = (string) ($nodeAttributeDateformat);
    }
}

