<?php
namespace OnixComponents;

use SimpleXMLElement;

class ProductRelationCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeProductRelationCode)
    {
        $this->contents = (string) ($nodeProductRelationCode);
    }
}

