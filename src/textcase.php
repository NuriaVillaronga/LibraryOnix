<?php
namespace OnixComponents;

use SimpleXMLElement;

class textcase
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeAttributeTextcase)
    {
        $this->contents = (string) ($nodeAttributeTextcase);
    }
}

