<?php
namespace OnixComponents;

use SimpleXMLElement;

class TaxRateCode
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTaxRateCode)
    {
        $this->contents = (string) ($nodeTaxRateCode);
    }
}

