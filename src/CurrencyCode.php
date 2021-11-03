<?php
namespace OnixComponents;

use SimpleXMLElement;

class CurrencyCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeCurrencyCode)
    {
        $this->contents = (string) ($nodeCurrencyCode);
    }
}

