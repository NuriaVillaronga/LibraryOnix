<?php
namespace OnixComponents;

use SimpleXMLElement;

class TaxableAmount
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTaxableAmount)
    {
        $this->contents = (string) ($nodeTaxableAmount);
    }
}

