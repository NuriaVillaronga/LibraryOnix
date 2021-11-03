<?php
namespace OnixComponents;

use SimpleXMLElement;

class textformat
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAttributeTextformat)
    {
        $this->contents = (string) ($nodeAttributeTextformat);
    }
}

