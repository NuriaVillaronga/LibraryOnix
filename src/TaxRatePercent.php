<?php
namespace OnixComponents;

use SimpleXMLElement;

class TaxRatePercent
{

    public string $contents;

    public function __construct(SimpleXMLElement $nodeTaxRatePercent)
    {
        $this->contents = (string) ($nodeTaxRatePercent);
    }
}

