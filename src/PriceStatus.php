<?php
namespace OnixComponents;

use SimpleXMLElement;

class PriceStatus
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodePriceStatus)
    {
        $this->contents = (string) ($nodePriceStatus);
    }
}

