<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductComposition
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeProductComposition)
    {
        $this->contents = (string) ($nodeProductComposition);
    }
}

