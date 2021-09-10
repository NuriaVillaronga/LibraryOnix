<?php
namespace OnixComponents;

use SimpleXMLElement;

class TaxAmount
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTaxAmount)
    {
        $this->contents = (string) ($nodeTaxAmount);
    }
}

