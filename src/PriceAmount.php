<?php
namespace OnixComponents;

use SimpleXMLElement;

class PriceAmount
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePriceAmount)
    {
        $this->contents = (string) ($nodePriceAmount);
    }
}

