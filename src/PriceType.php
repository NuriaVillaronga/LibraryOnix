<?php
namespace OnixComponents;

use SimpleXMLElement;

class PriceType
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePriceType)
    {
        $this->contents = (string) ($nodePriceType);
    }
}

